<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
   <title><?php bloginfo('name'); ?></title>
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"> <!--displays the primary CSS-->
 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <?php wp_head(); ?>

  </head>
 <body>
 

      <nav class="navbar navbar-expand-lg navbar-light bg-pearl border-blue" role="navigation" id="navi">

   <a class="navbar-brand font-weight-bold" href="#">CodeFactory</a>

       <!-- Brand and toggle get grouped for better mobile display -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

       

           <?php

           wp_nav_menu( array(

               'theme_location'    => 'primary',

               'depth'             => 2, // 1 = no dropdowns, 2 = dropdown

               'container'         => 'div',

               'container_class'   => 'collapse navbar-collapse',

               'container_id'      => 'bs-example-navbar-collapse-1',

               'menu_class'        => 'navbar-nav',

               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',

               'walker'            => new WP_Bootstrap_Navwalker(),

           ) );

           ?>

   </nav>


   <div class="container-fluid">
     <div class="jumbotron background-photo text-center">
       <h1 class="display-1 text-white font-weight-bold"><?php bloginfo('name'); ?></h1>
       <p class="text-white"><?php bloginfo('description'); ?></p>
     </div>