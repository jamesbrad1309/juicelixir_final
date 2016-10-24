<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();


    echo get_the_content();

    // End the loop.
endwhile;
?>

<?php get_footer(); ?>