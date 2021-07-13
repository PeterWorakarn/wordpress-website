<div class="container p-4">
    <h4 class="my-3"><?php block_field('title'); ?></h4>
    <div class="my-3">
        <?php block_field('description'); ?>
    </div>
    <div class="my-3">
        <a class="my-5 text-red-500 px-5 py-2 bg-indigo-500 rounded" href="<?php block_field('button-link'); ?>">  <?php block_field('button-text'); ?> </a>
    </div>
</div>