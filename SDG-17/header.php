<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head(); ?>

</head>
  <body>  

  <div class="navbar" >

    <div class="logo">
        <img class="logo-img" src="<?php echo get_template_directory_uri() ?> /images/logo.svg" width="90px" height="90px"/>
    </div>

    <div class="justify">
      <div class="navbar-links">
        <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
      </div>
    </div>
    
        <div class="navbar-others">
            <div class="nav-icons">
            <a href="<?php the_field("facebook_link")?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri() ?>/images/facebook(nav).svg" width="23px" height="23px"></a>
                <a href="<?php the_field("instagram_link")?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri() ?>/images/instagram(nav).svg" width="23px" height="auto"></a>
            </div>
        </div>
    
    <div class="toggel-btn">
      <img class="icon toggle-menu" src=" <?php echo get_template_directory_uri() ?> /images/toggel-menu.svg" width="23px" height="23px">
    </div>

  </div>    
  