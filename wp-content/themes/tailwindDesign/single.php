<?php get_header(); ?>
<?php if (have_posts()) : while(have_posts()) : the_post();?>
    <div class=" mb-0 md:mb-0 w-full max-w-2xl mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
            style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
        <?php if(has_post_thumbnail()): ?>
        <img class="sm:rounded-2xl sm:rounded-bl-none sm:rounded-br-none absolute left-0 top-0 w-full h-full z-0 object-cover"
            src="<?php the_post_thumbnail_url('largest');?>" />
        <?php endif; ?>
        <div class="p-4 absolute bottom-0 left-0 z-20">
            <!-- Loop category -->
            <div  class="px-4 py-1 bg-gray-800 rounded-md text-gray-200 inline-flex items-center justify-center mb-2">
                <?php echo get_the_term_list( $post->ID, 'category', '',',', '' );?>
            </div>
            <h1 class="text-4xl font-semibold text-gray-100 leading-tight">
                <?php the_title(); ?>
            </h1>
            <div class="flex mt-3">
           
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                <div>
                    <p class="font-semibold text-gray-200 text-sm"> <?php echo get_the_author();?> </p>
                    <p class="font-semibold text-gray-400 text-xs"> <?php the_date(); ?></p>
                </div>
            </div>
        </div>
    </div>
<div class="px-0 py-0 sm:px-6 sm:pb-2">
    <article class="max-w-2xl bg-white shadow sm:rounded-2xl sm:rounded-tl-none sm:rounded-tr-none mx-auto px-6 py-6 sm:px-8 lg:px-8">
        <?php the_content();?>
        <div class="py-2 text-gray-800 font-semibold inline-flex items-center justify-center">
            <?php echo get_the_tag_list('#','&nbsp;#', '' );?>
        </div>
    </article>
    <div class="mx-auto max-w-2xl my-3 flex align-center justify-between">
        <div aria-current="page" class="bg-gray-800 rounded-md text-gray-200 px-4 py-2 text-sm font-medium">
            <?php echo previous_post_link() ;?>     
        </div>
        <div aria-current="page" class="bg-gray-800 rounded-md text-gray-200 px-4 py-2 text-sm font-medium">
            <?php echo next_post_link() ;?>     
        </div>
    </div>

</div>
<?php endwhile; endif;?>

<?php get_footer(); ?>