# PHP URL-Handling Example

## ABOUT:

Simple theoretical way to handle URLs more cleanly in php
Works best in conjunction with .htaccess as well.

This method can convert a 

    www.domain.com/page.php
    
Into a prettier, SEO friendly URL such as 

    www.domain.com/page
    
    
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




