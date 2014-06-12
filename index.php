<?php
    function __autoload($class_name) {
        include 'class/' . strtolower($class_name) . '.php';
    }

    // This file is the main controller
    include 'template/header.php';

    // Handle url
    $url = explode("/", $_SERVER['PHP_SELF']);
    $base_url = $url[0] . "/" . $url[1] . "/" $url[2] . "/";
    if(isset($url[3])) { 
        $page = $url[3]; 
    } else { 
        $page = "index"; 
    }
    if(isset($url[4])) { 
        $action = $url[4]; 
    } else { 
        $action = ""; 
    }
    if(!file_exists('controller/'.$page.'.php')) { $page = "404"; }

    // Show the menu, the previous part have set wich page we are on to set the "active" class in menu
    include 'template/menu.php';

    // Call the correct controller
    include 'controller/'.$page.'.php';

    // Show the footer
    include 'template/footer.php';