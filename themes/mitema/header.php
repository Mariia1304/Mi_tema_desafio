<!DOCTYPE html>
<html <?php language_attributes();?>>

  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name')?></title>

   
    <?php wp_head();?>


  </head>
   

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mi primer tema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item active"> -->
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
              
             <!--  <a class="nav-link" href="http://localhost:8080/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/blog/">Blog</a>
            </li> -->
            
          </ul>
        </div>
      </div>
    </nav>