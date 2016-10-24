<?php get_header(); ?>

<div id="fullpage">
    <div class="section about-us">

            <?php
            // check if the repeater field has rows of data
            if( have_rows('slide','option') ):
                // loop through the rows of data
                while ( have_rows('slide','option') ) : the_row();
                    // display a sub field value
            ?>

                    <div class="slide">
                        <img src="<?php echo get_sub_field('slide_image'); ?>" alt="slide Image" class="img-responsive">
                    </div>

            <?php

                endwhile;
            else :
                // no rows found
            endif;

            ?>

    </div>
    <div class="section">
        <div class="container intro">
            <div class="row">
                <div class="col-md-6">
                    <?php
                        $intro_text = get_field('intro_content','option');
                        $intro_image = get_field('intro_image','option');
                    ?>
                    <img src="<?php echo $intro_image; ?>" alt="intro Image" class="img-responsive abs-center">
                </div>
                <div class="col-md-6">
                    <div class="content abs-center">
                        <h3>About Us</h3>
                        <?php echo $intro_text; ?>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

    </div>
    <div class="section">
        
    </div>
</div>

<?php get_footer(); ?>
