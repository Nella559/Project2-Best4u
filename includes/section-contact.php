<section class="contact">
    <div class="container">
        <div class="contact-inner">
            <div class="content-contact">
                <?php the_field('contact_content');?>
            </div>
            <div class="contact-form">
                <h3><?php the_field('form_heading'); ?></h3>
                <?php the_field('contact_form'); ?>
            </div>
        </div>
    </div>
</section>