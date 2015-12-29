<!doctype html>
<html class="no-js" lang=""
    <head
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/js/vendor/modernizr-2.8.3.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="mobile-header">
            <!-- will need proper assets here -->        
            <button class="nav-trigger">
                <img src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/nav-trigger.png" alt="Nav Trigger">
            </button>
            <div id="mobile-logo">
                <a href="<?php bloginfo('url'); ?>"><img width="70px" src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/logomark.svg" alt=""></a>
            </div>
        </div>
        <nav id="nav">
            <!-- will need proper assets here -->        
            <button class="nav-trigger">
                <img src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/close.png" alt="close">
            </button>
            <div id="logo">
                <a href="<?php bloginfo('url'); ?>"><img width="70px" src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/logomark.svg" alt=""></a>
            </div>
            <ul class="links">
                <?php
                    $pages = get_pages( array('sort_column' => 'menu_order', 'exclude' => 2) );
                    $posts = get_posts( array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1) );
                    foreach ( $pages as $page ) :
                        $current_link = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                        $permalink = get_page_link( $page->ID );
                ?>
                <li>
                    <?php if ( $page->post_name != 'news' ) : ?>
                    <a class="<?php echo $page->post_name . '-link'; if(strcmp($current_link,$permalink)==0) : echo ' active'; endif; ?>" href="<?php echo $permalink; ?>"><?php echo $page->post_title; ?></a>
                        <?php if ( $page->post_name == 'residences' ) : ?>
                        <ul class="dropdown">
                            <li><button class="module-trigger">Floor plans</button></li>
                            <li><button class="module-trigger">Interior specs</button></li>
                        </ul>
                        <?php endif; ?>
                    <?php elseif ( $page->post_name == 'news' ) : if ( sizeof($posts) > 0 ) : ?>
                    <a class="<?php echo $page->post_name . '-link'; if(strcmp($current_link,$permalink)==0) : echo ' active'; endif; ?>" href="<?php echo $permalink; ?>"><?php echo $page->post_title; ?></a>
                    <?php endif; endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <section class="nav-footer">
                <div class="contact-info">
                    <p>70 Rainey Street, Austin, TX. 78701</p>
                    <p>512-476-7010 • <a href="mailto:info@70Rainey.com">info@70Rainey.com</a></p>
                </div>
                <div class="social-media">
                    <ul>
                        <li><a href="https://www.facebook.com/SeventyRainey/" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/facebook-icon-bronze.svg" alt="Facebook" height="14px"></a></li>
                        <li><a href="https://twitter.com/70_rainey" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/twitter-icon-bronze.svg" alt="Twitter" width="14px"></a></li>
                        <li><a href="https://www.instagram.com/70_rainey" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/icons/instagram-icon-bronze.svg" alt="Instagram" height="14px"></a></li>
                        <li class="sackman"><a href="http://sackman.com/" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/rainey/img/Sackman-logo-bronze.svg" alt="Sackman" height="20px"></a></li>
                    </ul>
                </div>
            </section>
        </nav>
        <?php $background_image = get_field('background_image'); ?>
        <div class="main-content" <?php if ( $background_image ) : ?>style="background:url( <?php echo $background_image; ?> ) center center no-repeat; background-size:cover;"<?php endif;?>><!-- .main-content closes in footer.php -->

