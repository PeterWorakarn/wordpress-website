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

  <div class="min-h-screen min-w-screen flex bg-white py-24 justify-center">
    <div class="p-12 text-center max-w-xl">
        <div class="md:text-3xl text-6xl font-bold">Page not Found</div>
        <div class="mt-6 flex justify-center h-12 relative">
            <?php get_search_form();?>
        </div>
    </div>
</div>


<?php get_footer(); ?>