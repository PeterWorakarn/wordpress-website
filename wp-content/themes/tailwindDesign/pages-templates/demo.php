<?php 
/**
 * Template Name: demo
 */
?>

<?php get_header(); ?>
<section class="max-w-4xl min-h-screen mx-auto flex flex-col-reverse sm:flex-row jusitfy-between items-center">
              <div class="sm:w-2/5 flex flex-col items-center sm:items-start text-center sm:text-left">
                  <h1 class="uppercase text-6xl text-white font-bold leading-none tracking-wide mb-2">Digital</h1>
                  <h2 class="uppercase text-4xl text-white text-secondary tracking-widest mb-6">Marketing</h2>
                  <p class="text-white leading-relaxed mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing. Vestibulum rutrum metus at enim congue scelerisque. Sed suscipit metu non iaculis semper consectetur adipiscing elit.</p>
                  <a href="/" class="bg-green-300 hover:bg-green-400 py-3 px-6 uppercase text-lg font-bold text-white rounded-full">Learn more</a>
              </div>
              <div class="mb-16 sm:mb-0 mt-8 sm:mt-0 sm:w-3/5 sm:pl-12">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/img/hero.svg"/>
              </div>
          </section>
<?php get_footer(); ?>