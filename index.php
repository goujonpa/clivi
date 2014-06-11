<?php
    // This file is the main controller
    include 'template/header.php';

    // TODO: Handle url to detect wich controller to call

    // Show the menu, the previous part have set wich page we are on to set the "active" class in menu
    include 'template/menu.php';

    // TODO: Call the correct controller
    include 'controller/index.php';

    // Show the footer
    include 'template/footer.php';
?>
