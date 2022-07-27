<div class="move-to-top moveToTop">
        <div class="pyramid"></div>
        <div class="pyramid"></div>
        <div class="pyramid"></div>
    </div>
    
<footer class="footer">
    <div class="container">
        <div class="footer-wrap">
            <ul class="footer-item">
                <li>
                    <div class="logo">
                        <img src="<?php echo mona_get_option('mona_footer_logo');?>" alt="">
                    </div>
                </li>
                <li>
                    <p>
                        <?php echo mona_get_option('mona_desc_footer'); ?>
                    </p>
                </li>
                <li>
                    <div class="footer-socials">
                        <?php if (mona_get_option('mona_sticky_header_facebook') != "") : ?>
                            <a href="<?php mona_option('mona_sticky_header_facebook'); ?>"><i class='bx bxl-facebook'></i></a>
                        <?php endif; ?>
                        <?php if (mona_get_option('mona_sticky_header_linkedin') != "") : ?>
                            <a href="<?php mona_option('mona_sticky_header_linkedin'); ?>"><i class='bx bxl-linkedin'></i></a>
                        <?php endif; ?>
                        <?php if (mona_get_option('mona_sticky_header_twitter') != "") : ?>
                            <a href="<?php mona_option('mona_sticky_header_twitter'); ?>"><i class='bx bxl-twitter'></i></a>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
            <ul class="footer-item">
                <?php if (is_active_sidebar('footer_about_us')) : ?>
                    <?php dynamic_sidebar('footer_about_us'); ?>
                <?php endif; ?>
            </ul>
            <ul class="footer-item">
                <li class="head"><?php mona_option('mona_title_contact_footer'); ?></li>
                <?php if (mona_get_option('mona_hotline_contact_footer') != "") : ?>
                    <li class="footer-contact"><img src="<?php echo site_url(); ?>/template/assets/img/svg/phone2.svg" alt="">
                        <a href="tel:<?php mona_option('mona_link_hotline_contact_footer'); ?>">
                            <?php _e('Hotline :', 'monamedia')?> <?php mona_option('mona_hotline_contact_footer'); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (mona_get_option('mona_email_contact_footer') != "") : ?>
                    <li class="footer-contact"><img src="<?php echo site_url(); ?>/template/assets/img/svg/mail2.svg" alt="">
                        <a href="mailto:<?php mona_option('mona_email_contact_footer'); ?>"><?php _e('Email :', 'monamedia')?> <?php mona_option('mona_email_contact_footer'); ?></a>
                    </li>
                <?php endif; ?>
                <?php if (mona_get_option('mona_address_contact_footer') != "") : ?>
                    <li class="footer-contact"><img src="<?php echo site_url(); ?>/template/assets/img/svg/locate.svg" alt="">
                        <a href="javascript:;"><?php _e('Địa chỉ :', 'monamedia')?> <?php mona_option('mona_address_contact_footer'); ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="footer-credit">
        <?php echo mona_get_option('mona_copyright'); ?>
    </div>
</footer>
<script src="<?php echo site_url(); ?>/template/js/libs/jquery/jquery.min.js"></script>
<script src="<?php echo site_url(); ?>/template/js/libs/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo site_url(); ?>/template/js/libs/aos/aos.js"></script>
<script src="<?php echo site_url(); ?>/template/js/libs/magnific/jquery.magnific-popup.min.js"></script>
<script src="<?php echo site_url(); ?>/template/js/main.js" type="module"></script>
<script>
    $(".vert-nav").find(".dropdown ul").addClass("submenu");
</script>
<?php wp_footer(); ?>
</body>

</html>