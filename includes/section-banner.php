<?php

function get_banner_color()
{
    $default_banner_bg_color_class = '#343a40';
    $acf_banner_color_value = get_field('banner_color_bg');

    if ($acf_banner_color_value) {
        return 'style="background-color: ' . $acf_banner_color_value . '" ';
    } else {
        return 'style="background-color: ' . $default_banner_bg_color_class . '" ';
    }
}
?>

<?php
function get_banner_image() {
    $acf_banner_image_value = get_field('banner_image');

    if($acf_banner_image_value) {
        return 'style="background-image: url('. $acf_banner_image_value .')"';
    }
}

?>

<section class="banner">
    <div class="banner_bg_image" <?php echo get_banner_image(); ?>>
    </div>
    <div class="banner_bg_color" <?php echo get_banner_color(); ?>>
        <div class="container">
            <div class="content position-right">
                <div class="container-inner-banner">
                    <h3><?php the_field('banner_heading');?></h3>
                    <p><?php the_field('banner_description');?></php></p>
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
    </div>




</section>