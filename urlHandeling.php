<?php
// ensures utf-8
header('Content-Type: text/html; charset=utf-8');

    // configuration
    require("../includes/config.php"); 

    
    // path-formatting partially adapted from http://pumka.net/2009/12/30/rewriting-for-seo-friendly-urls-htaccess-or-php/

    // grabs the path from the URL
    $path = $_SERVER['REQUEST_URI'];

    //extracts the path and explodes it into an array, split at each slash...
    $extractedPath = explode('/', $pfad);

    // the last element of the array (aka page we want)
    $lastEl = array_pop((array_slice($extractedPath, -1)));

    // if we are in the home-page scenario, AKA index etc., redirect to whichever page we want
    if ($lastEl === "index.php" || $lastEl === "" || $lastEl === "index" ){
        
        // render the home page
        
    }


    // if the URL ends with something other than nothing or index, do 
    if (isset($lastEl) && $lastEl !== '' ){
        
        // apply logic here, for example:
        if ($lastEl === "login"){
            redirect("../editor.php");    
        }
    }


// some further reading

// http://stackoverflow.com/questions/27766724/transform-get-vars-from-php-into-friendly-urls

// http://pumka.net/2009/12/30/rewriting-for-seo-friendly-urls-htaccess-or-php/

?>
