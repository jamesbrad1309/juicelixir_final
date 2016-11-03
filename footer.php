</div><!-- End wrapper -->

<footer>
    <div class="container">
        <div class="col-md-6">
            <section class="text-center">
                <h3>WHERE TO FIND US</h3>
                <p><?php echo get_field('address','option'); ?></p>
            </section>
            <section class="text-center">
                <h3>PHONE</h3>
                <p><?php echo get_field('phone','option'); ?></p>
            </section>
            <section class="text-center">
                <h3>WORKING HOURS</h3>
                <?php if(have_rows('business_hours','option')):while(have_rows('business_hours','option')):the_row(); ?>
                    <p>content</p>
                <?php endwhile; endif; ?>
            </section>
        </div>
        <div class="col-md-6">
            <section class="text-center">
                <h3>CONTACT US</h3>
                <div>
                    <form action="">
                        <input type="text" class="form-control" placeholder="Enter Your Email">
                    </form>
                </div>
            </section>
            <section>
                <img src="<?php echo get_field('logo', 'option'); ?>"
                     alt="<?php echo bloginfo('name'); ?>" class="img-responsive">
            </section>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>