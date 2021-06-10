<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>
<section class="bg-gray-800 p-6">
    <div class="max-w-2xl  mx-auto py-6 px-6 sm:px-0 lg:px-0">
      <h1 class="text-3xl font-bold text-white">
      <?php the_title();?>
      </h1>
    </div>
    <div class="max-w-2xl bg-white shadow rounded-2xl min-h-screen mx-auto px-6 py-6 sm:px-8 lg:px-8">
      
      
      <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>

  </div>
</section>

  <?php get_footer(); ?>