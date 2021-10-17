<?php get_header(); ?>

<div class="main-section">
  <?php while(have_posts()) : the_post() ?>

  <h1><?php the_title()?></h1>
  <p><?php the_content()?></p>

  <?php endwhile; ?>
</div>

<div class="contain first-mode">
    <div class="informations h1">
      <div  class="info">
        <img src="<?php echo get_template_directory_uri() ?>/images/mad1.jpg" width="350px" height="auto">
        <p><?php the_field("container1")?></p>
      </div>
      <div class="info">
        <img src="<?php echo get_template_directory_uri() ?>/images/mad2.jpg" width="350px" height="auto">
        <p><?php the_field("container2")?></p>
      </div>
      <div class="info">
        <img src="<?php echo get_template_directory_uri() ?>/images/mad3.jpg" width="350px" height="auto">
        <p><?php the_field("container3")?></p>
      </div>
    </div>
</div>

<?php get_footer(); ?>



