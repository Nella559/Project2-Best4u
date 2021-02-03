<section class="group">
    <div class="container">
        <div class="container-inner-group">

            <div class="group-content">
                <h3 clas="group-heading"><?php echo the_field('group_heading');?></h3>
                <p class="bold_paragraph"><?php the_field('group_paragraph_bold'); ?></p>
                <p class="light_paragraph"><?php the_field('group_paragraph'); ?></p>
            </div>
            <div  class="group-links">
                <?php

                    // Check rows exists.
                    if( have_rows('group_list') ):

                        // Loop through rows.
                        while( have_rows('group_list') ) : the_row();

                            // Load sub field value.
                               $image = get_sub_field('tailored_image');
                               $title = get_sub_field('tailored_heading');
                               $description = get_sub_field('tailored_description');
//                               echo('<pre>');
//                               var_dump($image['url']);
//                               echo('</pre>');
                ?>
                    <div style="background-image:linear-gradient(to bottom, #ffffff00, #000000bf), url( <?php echo $image['url']?>)" class="list-images full-link">
                        <?php
                            if( $title ):
                                $title_url = $title['url'];
                                $link_title = $title['title'];
                                $link_target = $title['target'] ? $title['target'] : '_self';
                        ?>
                        <a class="list-links" href="<?php echo esc_url( $title_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        <p class="list-description"><?php echo $description ?></p>
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

</section>