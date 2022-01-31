<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fv
 */
?>

    </div><!-- #content -->
      <?php get_template_part('template-parts/footer'); ?>
  </div><!-- #page -->
</div>

    <!-- get info about posts -->
  <?php 
  $all_posts_id = get_posts(array(
    'fields'          => 'ids',
    'posts_per_page'  => -1
  ));
  ?>

  <script>
    var singlePostCounter = "<?php echo (implode(', ', $all_posts_id)); ?>";
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
  </script>
  <?php wp_footer(); ?>
</body>

</html>
