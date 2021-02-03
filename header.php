<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
 
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="site-header__wrapper">
                <div class="logo">
                <?php if( has_custom_logo() ): ?>
                <?php the_custom_logo(); ?>
                <?php else: ?>
                    <div class="site-name">
                        <a href="<?php echo esc_url(get_home_url()); ?>">
                        <?php bloginfo( 'name' ); ?>
                        </a>
                    </div>
                <?php endif; ?>
                </div>
                <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'site-nav', 
                        'container_class' => 'navBar'
                )); 
                ?>
            </div>
            <div id="sticky-container" class="mobile_link sticky">
                <?php
                $link_mobile = get_field('hero_mobile_link');
                if( $link_mobile ):
                    $link_mobile_url = $link_mobile['url'];
                    $link_mobile_title = $link_mobile['title'];
                    $link_mobile_target = $link_mobile['target'] ? $link_mobile['target'] : '_self';
                    ?>
                    <a class="mobile_link" href="<?php echo esc_url( $link_mobile_url ); ?>" target="<?php echo esc_attr( $link_mobile_target ); ?>"><?php echo esc_html( $link_mobile_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </header>

