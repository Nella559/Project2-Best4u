<section class="site-footer">
<div class="container">
    <h2 class="footer-heading"><?php the_field('footer_heading', 'option')?></h2>
    <div class="footer-inner">

        <div class="footer-content">
            <p class="footer_description_bold"><?php the_field('footer_description_bold', 'option')?></p>
            <p class="footer_description_light"><?php the_field('footer_description', 'option')?></p>
            <div class="footer-links">
                <div class="footer-item">
                    <?php
                    $link_number = get_field('footer_link_number', 'option');
                    if( $link_number ):
                        $link_number_url = $link_number['url'];
                        $link_number_title = $link_number['title'];
                        $link_number_target = $link_number['target'] ? $link_number['target'] : '_self';
                        ?>
                        <a class="link-number" href="<?php echo esc_url( $link_number_url ); ?>" target="<?php echo esc_attr( $link_number_target ); ?>"><?php echo esc_html( $link_number_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="footer-item">
                    <?php
                    $link_email = get_field('footer_link_email', 'option');
                    if( $link_email ):
                        $link_email_url = $link_email['url'];
                        $link_email_title = $link_email['title'];
                        $link_email_target = $link_email['target'] ? $link_email['target'] : '_self';
                        ?>
                        <a class="link-email" href="<?php echo esc_url( $link_email_url ); ?>" target="<?php echo esc_attr( $link_email_target ); ?>"><?php echo esc_html( $link_email_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="socials">
                    <?php

                    // Check rows exists.
                    if( have_rows('socials', 'option') ):

                        // Loop through rows.
                        while( have_rows('socials', 'option') ) : the_row();

                            // Load sub field value.
                            $social_image = get_sub_field('socials_image', 'option');
                            $social_links = get_sub_field('socials_link', 'option');
                            $social_color = get_sub_field('socials_color', 'option');
//                               echo('<pre>');
//                               var_dump($image['url']);
//                               echo('</pre>');
                            ?>
                            <div style="background-color: <?php echo $social_color;?>" class="socials-links full-link">

                                <?php
                                if( $social_links ):
                                    $social_url = $social_links['url'];
                                    $social_title = $social_links['title'];
                                    $social_target = $social_links['target'] ? $social_links['target'] : '_self';
                                    ?>
                                    <a class="list-links" href="<?php echo esc_url( $social_url ); ?>" target="<?php echo esc_attr( $social_target ); ?>"><?php echo esc_html( $social_title ); ?><img src=<?php echo $social_image['url']?>></a>
                                <?php endif; ?>
                </div>

                        <?php
                            // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif; ?>
                </div>
            </div>
        </div>
        <div class="footer-form">
            <?php the_field('form_field', 'option'); ?>
        </div>
    </div>
</div>

</section>

<section class="copyright">
    <div class="container">
        <div class="copyright-inner">
            <div class="description">
                <p>Copyright 2017  -  Advies Bij Schulden</p>
            </div>
            <div class="author">
                <p>Ontwikkeld door Best4u Group B.V.</p>
            </div>
        </div>
    </div>
</section>


<?php wp_footer(); ?>

</body>
</html>