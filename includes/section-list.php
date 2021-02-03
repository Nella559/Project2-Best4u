<?php

function get_list_color()
{
    $default_list_bg_color_class = '#343a40';
    $acf_list_color_value = get_field('bg_color_book');

    if ($acf_list_color_value) {
        return 'style="background-color: ' . $acf_list_color_value . '" ';
    } else {
        return 'style="background-color: ' . $default_list_bg_color_class . '" ';
    }
}
?>

<?php
function get_list_image() {
    $acf_list_image_value = get_field('book_bg_image');

    if($acf_list_image_value) {
        return 'style="background-image: linear-gradient(0deg, rgba(107, 192, 72, 0.6), rgba(107, 192, 72, 0.6)), url( '. $acf_list_image_value .')"';
    }
}

?>

<section class="list">
        <div class="list-bg" <?php echo get_list_color(); ?>>

                <div class="content position-left">
                    <div class="container-inner-list">
                    <h3><?php the_field('book_heading');?></h3>
                    <p><?php the_field('book_paragraph');?></php></p>

                    <?php
                    $button = get_field('button');
                    if( $button ):
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
                    <?php endif; ?>
                    </div>

                </div>


        </div>
        <div class="book_bg_image" <?php echo get_list_image();?>>
                <div class="content position-right">
                    <h3><?php the_field('book_list_heading');?></h3>
                    <div class="icon-links"> <?php the_field('list'); ?></div>
                </div>
        </div>

</section>
