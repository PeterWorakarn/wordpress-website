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

  <div class="max-w-2xl  mx-auto py-6 px-6 sm:px-0 lg:px-0">
    <h1 class="text-5xl font-bold text-white">
      <?php single_cat_title();?>
    </h1>
  </div>
<section class="bg-gray-800 sm:flex sm:max-w-5xl sm:mx-auto">
  <?php if (have_posts()) : while(have_posts()) : the_post();?>
  <article class="sm:flex-1 max-w-2xl bg-white shadow sm:rounded-2xl mx-auto mt-4 sm:mx-2">
      <div class='w-full'>

          <a href="<?php the_permalink();?>">
          <img class="sm:rounded-2xl sm:rounded-bl-none sm:rounded-br-none w-full"
            src="<?php the_post_thumbnail_url('largest');?>">
            </a>


        <div class='mb-2 py-2 px-6 sm:px-8 lg:px-8'>
          <a href="<?php the_permalink();?>">
          <h2 class="text-3xl text-gray-600 font-semibold"><?php the_title();?></h2></a></div>
        <div class='text-gray-500 font-thin text-sm mb-2  px-6 sm:px-8 lg:px-8 '>
          <?php the_excerpt();?></div>
        <div class="flex flex-row py-3  px-6 sm:px-8 lg:px-8 ">
          <div class="w-auto h-auto rounded-full border-2 border-green-300">
            <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar'
              src='<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>'>
          </div>
          <div class="flex flex-col mb-2 ml-4 mt-1">
            <div class='text-gray-600 text-sm font-semibold'><?php echo get_the_author();?></div>
              <div class='text-gray-300 font-thin text-xs'>
                • <?php echo get_the_date(); ?>
              </div>
          </div>
        </div>
          
        <div class="flex w-full border-t border-gray-100  px-6 sm:px-8 lg:px-8">
            <div class='flex text-gray-700 font-normal text-sm rounded-md my-2 items-center'>Comments:<div
                class="ml-1 text-gray-400 font-thin text-ms"> <?php comments_number(); ?></div>
          </div>
        </div>
      </div>
  </article>
<?php endwhile; endif;?>
</section>
<div class="bg-white">
<p>Work only in post page setup</p>
  <?php the_posts_pagination();?>
</div>


<?php get_footer(); ?>