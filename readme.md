# PHP URL-Handling Example

## ABOUT:

Simple theoretical way to handle URLs more cleanly in php
Works best in conjunction with .htaccess as well.

This method can convert a 

    www.domain.com/page.php
    
Into a prettier, SEO friendly URL such as 

    www.domain.com/page
    
## Gotchas    
 
 
### Folder Structure implications 

Please note that this is a *starting point* for such a method, because it will obviously need some additional logic here and there.
You need to think about non-absolute paths in your pictures, css, styles, etc.

because the overall URL structure adds a php file (page.php) like a folder (/page), you will likely need to go back one folder in your links.

    ./css/styles.css

will need to be 

    ../css/styles.css
    
Or you need to configure the server to handle requests accordingly


### Other issues

In this simple setup, you may also notice that 

    www.domain.com/something/page 
    
will render the same as

    www.domain.com/page
    
 but again, adding another folder-structure element that could potentially break your links.
    
    
---    
    
## server configuration

You can use .htaccess to tell the server to hide php extensions on Apache. Different servers may require different methods.

    Options +FollowSymLinks -MultiViews
    # Turn mod_rewrite on
    RewriteEngine On
    RewriteBase /

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?$1 [L,QSA]


    RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s(.*)/index\.php [NC]
    RewriteRule ^ %1 [R=301,L]




