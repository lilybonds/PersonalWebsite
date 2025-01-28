<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Green Mountain Cycles</title>
        <link rel="icon" type="image/x-icon" href="images/bike.jpg">
        <!-- https://www.w3schools.com/html/html_favicon.asp -->
        <!-- https://pin.it/5Rm74ltk0 -->
        <meta name="author" content="Aaron Perkel and Lily Bonds">
        <meta name="description" content="This is the web site
        for Green Mountain Cycles, a family owned bike shop located
        in Burlington, Vermont.">
        
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0">

        <link href="css/custom.css?version=<?php print time(); ?>" 
            rel="stylesheet" 
            type="text/css">

        <link href="css/layout-desktop.css?version=<?php print time(); ?>" 
            rel="stylesheet" 
            type="text/css">

        <link href="css/layout-tablet.css?version=<?php print time(); ?>" 
            media="(max-width: 820px)"
            rel="stylesheet" 
            type="text/css">

        <link href="css/layout-phone.css?version=<?php print time(); ?>" 
            media="(max-width: 430px)"
            rel="stylesheet" 
            type="text/css">
    </head>
    <?php

    print '<body class="' . $pathParts['filename'] . '">';
    print '<!-- #################   Body element    ################# -->';
    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ?>