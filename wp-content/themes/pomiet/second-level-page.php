<?php
/*
Template Name: Second Level Page
*/
?>

<?php get_header(); ?>

<div class="hero">
  <div class="wrapper">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="content-container">
  <div class="wrapper">
    <div class="content">
      <p class="intro">
        <?php the_field('introduction'); ?>
      </p>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_content(); ?><?php endwhile; endif; ?>
    </div>
    <aside>
      <?php the_field('dropquote'); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>