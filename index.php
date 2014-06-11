<?php
    // This file is the main controller
    include 'template/header.php';

    // Handle url
    $url = explode("/", $_SERVER['PHP_SELF']);
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