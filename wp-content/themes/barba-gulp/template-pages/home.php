<?php /* Template Name: Homepage */
get_header();
?>

<div class="main-info" data-barba="container" data-barba-namespace="homepage">
  <?php get_template_part('template-parts/home/banner') ?>
  <?php get_template_part('template-parts/home/apel') ?>
  <?php get_template_part('template-parts/home/sign') ?>
  <?php get_template_part('template-parts/home/about') ?>
  <?php get_template_part('template-parts/home/report') ?>
</div>

<?php get_footer(); ?>