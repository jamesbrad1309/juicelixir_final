<?php get_header(); ?>

<div id="fullpage">
    <div class="section about-us">

        <?php
        // check if the repeater field has rows of data
        if (have_rows('slide', 'option')):
            // loop through the rows of data
            while (have_rows('slide', 'option')) : the_row();
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
                <?php
                $intro_text = get_field('intro_content', 'option');
                $intro_image = get_field('intro_image', 'option');
                ?>
                <div class="col-md-6">
                    <div class="content abs-center text-center">
                        <h3>About Us</h3>
                        <?php echo wp_trim_words($intro_text, 55, '...'); ?>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $intro_image; ?>" alt="intro Image" class="img-responsive abs-center">
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container intro">
            <div class="row">
                <?php
                    $pro_cat_img = get_field('product_cat_image','option');
                    $pro_cat_heading = get_field('product_cat_heading','option');
                    $pro_cat_links = get_field('product_cat_links','option');
                ?>
                <div class="col-md-6">
                    <img src="<?php echo $pro_cat_img; ?>" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <div class="content abs-center text-center">
                        <h3><?php echo $pro_cat_heading; ?></h3>

                        <?php
                            if(have_rows($pro_cat_links)):
                                while(have_rows($pro_cat_links)):
                                    $img = get_sub_field('product_cat_link');

                        ?>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

    </div>
</div>

<?php get_footer(); ?>
