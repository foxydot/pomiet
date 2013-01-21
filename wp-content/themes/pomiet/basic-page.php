<?php
/*
Template Name: Basic Page
*/
?>

<?php get_header(); ?>
 
<div class="hero">
 <div class="wrapper">
   <h1><?php the_title(); ?></h1>
   <span class="tagline"><?php the_field('tagline'); ?></span>
 </div>
</div>

<div class="content-container">
 <div class="wrapper">
   <div class="content">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_content(); ?><?php endwhile; endif; ?>
   
     <div class="specifics">
       <section>
         <h2><?php the_field('spec1_title'); ?></h2>
         <p><?php the_field('spec1'); ?></p>
       </section>
       <section>
         <h2><?php the_field('spec2_title'); ?></h2>
         <p><?php the_field('spec2'); ?></p>
       </section>
     </div>
   </div>
   <aside>
     <?php the_field('dropquote'); ?>
   </aside>
 </div>
</div>

<?php get_footer(); ?>