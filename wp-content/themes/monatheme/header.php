<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @author : monamedia
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <!-- Meta
                ================================================== -->
        <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
                <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
                <link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/style.css">
                <?php wp_head(); ?>
                </head>
                    <?php
    if(wp_is_mobile()){
        $body = 'mobile-detect';
    }else{
       $body = 'desktop-detect'; 
    }
    ?>
            <body <?php body_class($body); ?>>
                <header class="header">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-top-wrap">
                                <div class="logo">
                                    <?php echo get_custom_logo(); ?>
                                </div>
                                <div class="header-info">
                                    <?php if (mona_get_option('mona_work_time_contact') != "") : ?>
                                        <div class="header-item">
                                            <img src="<?php echo site_url(); ?>/template/assets/img/svg/wall-clock 1.svg" alt="">
                                            <div class="header-item-box">
                                                <span><?php _e('Làm việc :', 'monamedia')?></span>
                                                <p><?php mona_option('mona_work_time_contact'); ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (mona_get_option('mona_hotline_contact_footer') != "") : ?>
                                        <div class="header-item">
                                            <img src="<?php echo site_url(); ?>/template/assets/img/svg/phone-call 1.svg" alt="">
                                            <div class="header-item-box">
                                                <span><?php _e('Hotline :', 'monamedia')?></span>
                                                <p>
                                                    <a href="tel:<?php mona_option('mona_link_hotline_contact_footer'); ?>"><?php mona_option('mona_hotline_contact_footer'); ?></a>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (mona_get_option('mona_email_contact_footer') != "") : ?>
                                        <div class="header-item">
                                            <img src="<?php echo site_url(); ?>/template/assets/img/svg/mail.svg" alt="">
                                            <div class="header-item-box">
                                                <span><?php _e('Email :', 'monamedia')?></span>
                                                <p>
                                                    <a href="mailto:<?php mona_option('mona_email_contact_footer'); ?>"><?php mona_option('mona_email_contact_footer'); ?></a>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container">
                            <div class="header-bottom-wrap">
                                <div class="logo">
                                    <?php echo get_custom_logo(); ?>
                                </div>
                                <nav class="header-nav">
                                    <?php 
                                        if (has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary-menu',
                                                'container' => false,
                                                'container_class' => 'ul-li',
                                                'menu_id' => 'menu',
                                                'menu_class' => '',
                                                'fallback_cb' => false,
                                                'depth' => 5,
                                                'walker' => new Mona_Custom_Walker_Nav_Menu()
                                            ));
                                        } 
                                    ?>
                                </nav>
                                

                                <div class="burger burger-js">
                                    <div class="burger-line"></div>
                                    <div class="burger-line"></div>
                                    <div class="burger-line"></div>
                                </div>
                                <div class="menu-mobile mobilemenu-js">
                                    <div class="menu-mobile-wrap">
                                        <div class="wrap">
                                            <main>
                                                <section id="vert-nav">
                                                    <nav role='navigation'>
                                                        <?php 
                                                            if (has_nav_menu('primary-menu')) {
                                                                wp_nav_menu(array(
                                                                    'theme_location' => 'primary-menu',
                                                                    'container' => false,
                                                                    'container_class' => 'ul-li',
                                                                    'menu_id' => '',
                                                                    'menu_class' => 'topmenu',
                                                                    'fallback_cb' => false,
                                                                    'depth' => 5,
                                                                    'walker' => new Mona_Custom_Walker_Nav_Menu_Mobile()
                                                                ));
                                                            } 
                                                        ?>
                                                    </nav>
                                                </section>
                                            </main>
                                        </div>

                                        <div class="header-info">
                                            <?php if (mona_get_option('mona_work_time_contact') != "") : ?>
                                                <div class="header-item">
                                                    <img src="<?php echo site_url(); ?>/template/assets/img/svg/wall-clock 1.svg" alt="">
                                                    <div class="header-item-box">
                                                        <span><?php _e('Làm việc :', 'monamedia')?></span>
                                                        <p><?php mona_option('mona_work_time_contact'); ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (mona_get_option('mona_hotline_contact_footer') != "") : ?>
                                                <div class="header-item">
                                                    <img src="<?php echo site_url(); ?>/template/assets/img/svg/phone-call 1.svg" alt="">
                                                    <div class="header-item-box">
                                                        <span><?php _e('Hotline :', 'monamedia')?></span>
                                                        <p>
                                                            <a href="tel:<?php mona_option('mona_link_hotline_contact_footer'); ?>"><?php mona_option('mona_hotline_contact_footer'); ?></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (mona_get_option('mona_email_contact_footer') != "") : ?>
                                                <div class="header-item">
                                                    <img src="<?php echo site_url(); ?>/template/assets/img/svg/mail.svg" alt="">
                                                    <div class="header-item-box">
                                                        <span><?php _e('Email :', 'monamedia')?></span>
                                                        <p>
                                                            <a href="mailto:<?php mona_option('mona_email_contact_footer'); ?>"><?php mona_option('mona_email_contact_footer'); ?></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="menu-mobile-over mobilemenuover-js"></div>
                <div class="bg-fade"></div>