<?php
function get_bg_color() {
    $default_bg_color_class = '#ccc';
    $acf_color_value = get_field('hero_bg');

    if($acf_color_value) {
        return 'style="background-color: ' . $acf_color_value . '" ';
        } else {
            return 'style="background-color: ' . $default_bg_color_class . '" ';
        }
    }
?>

<?php
function get_bg_image() {
    $acf_image_value = get_field('hero_image');

    if($acf_image_value) {
        return 'style="background-image: url('. $acf_image_value .')"';
    }
}

?>



<section class="hero">
    <div class="hero-bg" <?php echo get_bg_color(); ?>></div>
    <div class="hero_img" <?php echo get_bg_image();?>>
        <div class="container">

            <h1 class="hero-heading"><?php the_field('hero_heading') ?></h1>

        </div>
    </div>


</section>



