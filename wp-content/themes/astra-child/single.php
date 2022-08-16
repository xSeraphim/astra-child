<?php
get_header(); ?>

<div class="main-container">
    <h1><?php the_title(); ?></h1>
    <?php the_post_thumbnail('full'); ?>
    <p class="fact"><?php the_content(); ?></p>
    
</div>


<?php
get_footer(); ?>