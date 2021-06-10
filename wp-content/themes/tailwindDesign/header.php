<!DOCTYPE html >
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- header hooks -->
    <?php wp_head(); ?> 
</head>

<body <?php body_class();?> >
<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" onclick="navigation()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex-shrink-0 flex items-center">
          <!-- sitelogo -->
            <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                 
                if ( has_custom_logo() ) {
                    echo '<img class="block h-12 w-auto" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                }
            ?>
            <a href="/" class="block px-4 py-2  text-sm font-medium text-white uppercase"><?php echo get_bloginfo( 'name' ) ?></a>
        </div>
        
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="hidden sm:block sm:ml-6">
              <?php wp_nav_menu ( array(
                  'menu' => 'Primary',
                  'theme_location' => 'Primary-w',
                  'menu_class' => 'flex space-x-4'
                  )    );?>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="hidden" id="mobile-menu">
  <?php wp_nav_menu ( array(
                  'menu' => 'Primary',
                  'theme_location' => 'Primary-m',
                  'container_class' => 'px-2 pt-2 pb-3 space-y-1"'
                  )    );?>
  </div>
</nav>
<main class="bg-gray-800 px-0 py-5">
