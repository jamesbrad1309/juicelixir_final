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
                    <div class="content text-center">
                        <h3 class="section-header">About Us</h3>
                        <p><?php echo wp_trim_words($intro_text, 55, '...'); ?></p>
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
                $pro_cat_img = get_field('product_cat_image', 'option');
                $pro_cat_heading = get_field('product_cat_heading', 'option');
                ?>
                <div class="col-md-6">
                    <img src="<?php echo $pro_cat_img; ?>" alt="Product Image" class="img-responsive abs-center">
                </div>
                <div class="col-md-6">
                    <div class="content text-center">
                        <h3 class="section-header"><?php echo $pro_cat_heading; ?></h3>
                        <ul class="list-unstyled text-center">
                            <?php
                            // check if the repeater field has rows of data
                            if( have_rows('product_cat_links','option') ):
                                // loop through the rows of data
                                while ( have_rows('product_cat_links','option') ) : the_row();
                                ?>

                                    <li>
                                        <a href="<?php echo get_sub_field('product_cat_single_link'); ?>"><?php echo get_sub_field('product_cat_link_title'); ?></a>
                                    </li>

                            <?php
                                endwhile;
                            else :
                                // no rows found
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container intro">
            <div class="row">

                <?php
                    $args= array(
                        'posts_per_page'=>1
                    );

                    $query = new WP_Query($args);
                    if($query->have_posts()):while($query->have_posts()):$query->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id);
                        $thumb_url = $thumb_url_array[0];
                ?>

                        <div class="col-md-6">
                            <div class="content text-center">
                                <h3 class="section-header">Blog</h3>
                                <p><?php echo wp_trim_words(get_the_content(), 55, '...'); ?></p>
                                <a href="<?php echo get_permalink(); ?>">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo $thumb_url; ?>" alt="intro Image" class="img-responsive abs-center">
                        </div>

                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>

</div><!--end fullpage-->

<?php get_footer(); ?>
