<?php 
/**
 * Template Name: blank
 */
?>

<?php get_header(); ?>
<div class="max-w-full min-h-screen min-w-screen bg-white py-24 px-24 mx-auto">
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>
<?php get_footer(); ?>