<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="UTF-8">


        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>


        <meta name="description" content="Welcome to A3Ultimate.com. Project A3 Episode 5 Server Ultimate Server for Ultimate Gamers. With some interface changes for refreshing experience in A3 ">
        <meta name="keywords" content="A3 Ultimate,A3 Ultimate MMORPG, A3ultimate,A3, MMORPG,ultiamte">
        
        <meta name="site" content="a3ultimate.com">

        <title><?php if (isset($title)) echo $title; ?> - A3Ultimate.com</title>

        <!-- Favicons
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">-->
        <link rel="icon" href="<?php echo base_url(); ?>assects/images/favicon/favicon.ico" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- CSS  -->
        
        <link href="<?php echo base_url(); ?>assects/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

        <link href="<?php echo base_url(); ?>assects/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <?php
        if (isset($css)) {
            foreach ($css as $css_link) {
                echo "<link href='" . base_url() . "assects/css/$css_link' type='text/css' rel='stylesheet' media='screen,projection'/>";
            }
        }
        ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <!--  Boddy Starts Here  -->
    <body class=" grey lighten-2">
       <div id="loaderasdasd">
       
        </div>

<?php
if (isset($menu)) {
    $this->view($menu);
}


if (isset($sidemenu)) {
    $this->view($sidemenu);
}
?>