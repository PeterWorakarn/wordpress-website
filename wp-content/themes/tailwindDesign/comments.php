<h2 class="text-center font-bold">Comments Section</h2>
<h3>
    <?php 
        if( !have_comments()) {
            echo "Leave a Comments";
        } 
        else {
            echo get_comments_number()."Comments";
        }
    ?>
</h3>
<section>
    <p class="text-center font-bold">Comment list</p>
    <?php 
        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style' => 'div',
                )
            );
            ?>
    <p class="text-center font-bold">Comment form</p>
    <?php 
        if(comments_open()) {
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h2 class="text-blue-300">',
                    'title_reply_after' => '</h2>'
                )
            );
        };
        ?>
</section>