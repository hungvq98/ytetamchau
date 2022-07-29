<?php

/**
 * Template name: Home Page
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
    the_post();
?>

    <div class="main">
        <?php
            if (have_rows('banner_home_page')) :
        ?>
            <div class="home-banner pos-relative">
                <div class="swiper homeSwiper">
                    <div class="swiper-wrapper">
                        <?php
                            while(have_rows('banner_home_page')) : the_row();
                                $title_banner_home = get_sub_field('title_banner_home');
                                $desc_banner_home = get_sub_field('desc_banner_home');
                                $img_banner_home = get_sub_field('img_banner_home');
                                $list_desc_banner_home = get_sub_field('list_desc_banner_home');
                                $btn_desc_banner_home = get_sub_field('btn_desc_banner_home');
                        ?>
                            <div class="swiper-slide">
                                <div class="home-overlay"></div>
                                <?php echo wp_get_attachment_image($img_banner_home, '1915x772');?>
                                <div class="container">
                                    <div class="home-wrap">
                                        <h1 class="home-title">
                                            <?php echo $title_banner_home; ?>
                                        </h1>
                                        <p class="home-para">
                                            <?php echo $desc_banner_home; ?>
                                        </p>
                                        <?php if ($list_desc_banner_home) :?>
                                            <ul class="banner-lst-intro">
                                                <?php
                                                    foreach ($list_desc_banner_home as $item) :
                                                        $info = $item["info_list_desc_banner_home"];
                                                ?>
                                                    <li class="banner-item-intro"><?php echo $info;?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <div class="home-btns">
                                            <div class="hands">
                                                <img src="<?php echo site_url(); ?>/template/assets/img/svg/hand.png" alt="">
                                            </div>
                                            <div class="cir">
                                                <img src="<?php echo site_url(); ?>/template/assets/img/svg/cir.png" alt="">
                                            </div>
                                            <?php 
                                                if ($btn_desc_banner_home) :
                                                    foreach ($btn_desc_banner_home as $item) :
                                                        $title = $item["title_btn_desc_banner_home"];
                                                        $link = $item["link_btn_desc_banner_home"];
                                            ?>
                                                <a href="<?php echo $link; ?>" class="btn btn-yellow"><?php echo $title; ?></a>
                                            <?php
                                                    endforeach;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                    <div class="home-btn swiper-button-next"></div>
                    <div class="home-btn swiper-button-prev"></div>
                </div>
                <div class="banner-dc">
                    <div class="banner-dc-lst"></div>
                </div>
            </div>
        <?php
            endif; 
        ?>

        <?php
            if (have_rows('welcome_home_page')) :
                while(have_rows('welcome_home_page')) : the_row();
                $title_welcome_home_page = get_sub_field('title_welcome_home_page');
                $desc_welcome_home_page = get_sub_field('desc_welcome_home_page');
                $btn_welcome_home = get_sub_field('btn_welcome_home');
                $img_welcome_home_page = get_sub_field('img_welcome_home_page');
                $hotline_welcome_home = get_sub_field('hotline_welcome_home');
        ?>
            <div class="home-two">
                <div class="container">
                    <div class="home-two-wrap">
                        <div class="home-two-imgs">
                            <?php echo wp_get_attachment_image($img_welcome_home_page, '421x611');?>
                        </div>
                        <div class="home-two-info">
                            <h2 data-aos="fade-left" data-aos-duration="1000"><?php echo $title_welcome_home_page; ?></h2>
                            <div class="mona-content" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                                <?php echo $desc_welcome_home_page; ?>
                            </div>
                            <div class="home-two-btns">
                                <?php 
                                    if ($btn_welcome_home) :
                                        foreach ($btn_welcome_home as $item) :
                                            $title = $item["title_btn_welcome_home"];
                                            $link = $item["link_btn_welcome_home"];
                                ?>
                                    <div class="btn btn-yellow" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900">
                                        <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                                    </div> 
                                <?php 
                                        endforeach;
                                    endif; 
                                ?>

                                <?php 
                                    if ($hotline_welcome_home) :
                                        foreach ($hotline_welcome_home as $item) :
                                            $title = $item["title_hotline_welcome_home"];
                                            $link = $item["link_hotline_welcome_home"];
                                            $icon = $item["icon_hotline_welcome_home"];
                                ?>
                                    <a href="tel:<?php echo $link; ?>" class="home-two-phone" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1200">
                                        <div class="imgs"><?php echo wp_get_attachment_image($icon, 'thumbnail');?></div>
                                        <span><?php echo $title; ?></span>
                                    </a>
                                <?php 
                                        endforeach;
                                    endif; 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('order_now_home_page')) :
                while(have_rows('order_now_home_page')) : the_row();
                $thumbnail_order_now_home = get_sub_field('thumbnail_order_now_home');
                $btn_order_now_home = get_sub_field('btn_order_now_home');
                $sub_title_order_now_home = get_sub_field('sub_title_order_now_home');
                $title_order_now_home = get_sub_field('title_order_now_home');
        ?>
            <div class="home-three">
                <?php echo wp_get_attachment_image($thumbnail_order_now_home, '1915x611');?>
                <div class="container">
                    <div class="home-three-wrap" data-aos="fade-up" data-aos-duration="1000">
                        <span><?php echo $sub_title_order_now_home; ?></span>
                        <p><?php echo $title_order_now_home; ?></p>
                        <?php 
                            if ($btn_order_now_home) :
                                foreach ($btn_order_now_home as $item) :
                                    $title = $item["title_btn_order_now_home"];
                                    $link = $item["link_btn_order_now_home"];
                        ?>
                            <div class="btn btn-yellow" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                                <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                            </div>
                        <?php 
                                endforeach; 
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('commit_home_page')) :
                while(have_rows('commit_home_page')) : the_row();
                $thumbnail_commit_home = get_sub_field('thumbnail_commit_home');
                $list_commit_home = get_sub_field('list_commit_home');
        ?>
            <div class="home-four">
                <div class="home-four-wrap">
                    <div class="home-four-box">
                        <div class="home-four-box-left">
                            <div class="imgs">
                                <?php echo wp_get_attachment_image($thumbnail_commit_home, '371x523'); ?>
                            </div>
                        </div>
                        <?php if ($list_commit_home) :?>
                            <div class="home-four-box-right">
                                <?php
                                    $i = 0;
                                    foreach ($list_commit_home as $item) :
                                        $icon = $item["icon_list_commit_home"];
                                        $title = $item["title_list_commit_home"];
                                        $desc = $item["desc_list_commit_home"];
                                        $btn = $item["btn_list_commit_home"];
                                ?>
                                    <div class="home-four-item" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="<?php echo $i;?>">
                                        <div class="icon">
                                            <?php echo wp_get_attachment_image( $icon , 'thumbnail'); ?>
                                        </div>
                                        <h4><?php echo $title; ?></h4>
                                        <p><?php echo $desc; ?></p>
                                        <?php 
                                            if ($btn) :
                                                foreach ($btn as $sub_item) :
                                                    $sub_title = $sub_item["title_btn_list_commit_home"];
                                                    $sub_link = $sub_item["link_btn_list_commit_home"];
                                        ?>
                                            <a href="<?php echo $sub_link; ?>"><?php echo $sub_title; ?></a>
                                        <?php 
                                                endforeach;
                                            endif;
                                        ?>
                                    </div>
                                <?php
                                    $i+=300;
                                    endforeach;
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('category_product_home_page')) :
                while(have_rows('category_product_home_page')) : the_row();
                $title_category_product_home = get_sub_field('title_category_product_home');
                $desc_category_product_home = get_sub_field('desc_category_product_home');
                $list_category_product_home = get_sub_field('list_category_product_home');
        ?>
            <div class="sec-category home-five padding-sec">
                <div class="container">
                    <div class="category-wrap" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="text-l m-b-8 text-center category-tit"><?php echo $title_category_product_home; ?></h2>
                        <p class="text-1 text-center category-txt">
                            <?php echo $desc_category_product_home; ?>
                        </p>
                        <div class="category-tab-content">
                            <div class="navigation">
                                <div class="navigation-prev navigation-slide">
                                    <i class='bx bx-chevron-left'></i>
                                </div>
                                <div class="navigation-next navigation-slide">
                                    <i class='bx bx-chevron-right'></i>
                                </div>
                            </div>
                            <?php if ($list_category_product_home) :?>
                                <div class="category-tab-lst flex flex-wrap">
                                    <?php 
                                        $i = 1;
                                        foreach ($list_category_product_home as $item) :
                                            $icon = get_field("icon_category_product_home", $item->taxonomy . '_' . $item->term_id);
                                    ?>
                                        <div class="category-tab-item <?php if ($i == 1){echo "active";}?>">
                                            <div class="icon">
                                                <?php echo wp_get_attachment_image($icon, 'thumbnail');?>
                                            </div>
                                            <div class="label text-4"><?php echo $item->name; ?></div>
                                        </div>
                                    <?php $i++; endforeach; ?>
                                </div>
                                <div class="category-content-lst">
                                    <?php 
                                        $i = 1;
                                        foreach ($list_category_product_home as $item) :
                                            $title = get_field("title_category_product_home", $item->taxonomy . '_' . $item->term_id);
                                            $desc = get_field("desc_category_product_home", $item->taxonomy . '_' . $item->term_id);
                                            $img = get_field("img_category_product_home", $item->taxonomy . '_' . $item->term_id);
                                    ?>
                                        <div class="category-content-item <?php if ($i == 1){echo "active";}?>">
                                            <div class="category-content-ct d-item">
                                                <h3 class="text-8 m-b-16 tit"><?php echo $item->name; ?></h3>
                                                <p class="text-9 m-b-8 txt-1">
                                                    <?php echo $title; ?>
                                                </p>
                                                <div class="text-1 m-b-30 txt-2 mona-content">
                                                    <?php echo $desc; ?>
                                                </div>
                                                <div class="home-btns">
                                                    <div class="hands">
                                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/hand.png" alt="">
                                                    </div>
                                                    <div class="cir">
                                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/cir.png" alt="">
                                                    </div>
                                                    <a href="<?php echo get_category_link($item->term_id); ?>" class="btn btn-yellow"><?php _e("Xem thêm", "monamedia")?></a>
                                                </div>
                                            </div>
                                            <div class="category-content-img d-item">
                                                <div class="img">
                                                    <?php echo wp_get_attachment_image($img, '570x358');?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('take_care_home_page')) :
                while(have_rows('take_care_home_page')) : the_row();
                $title_take_care_home = get_sub_field('title_take_care_home');
                $desc_take_care_home = get_sub_field('desc_take_care_home');
                $btn_take_care_home = get_sub_field('btn_take_care_home');
                $img_take_care_home = get_sub_field('img_take_care_home');
        ?>
            <div class="sec-care home-six">
                <div class="container">
                    <div class="care-wrap flex flex-wrap">
                        <div class="care-content">
                            <h3 class="text-l care-tit" data-aos="fade-right" data-aos-duration="1000"><?php echo $title_take_care_home; ?></h3>
                            <p class="text-1 care-txt" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                                <?php echo $desc_take_care_home; ?>
                            </p>
                            <?php 
                                if ($btn_take_care_home) :
                                    foreach ($btn_take_care_home as $item) :
                                        $title = $item["title_btn_take_care_home"];
                                        $link = $item["link_btn_take_care_home"];
                            ?>
                                <div class="action">
                                    <button class="btn btn-l" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                                        <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                                    </button>
                                </div>
                            <?php 
                                    endforeach;
                                endif;
                            ?>
                        </div>
                        <div class="care-image">
                            <div class="img">
                                <?php echo wp_get_attachment_image($img_take_care_home, '615x402');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('why_pick_me_home_page')) :
                while(have_rows('why_pick_me_home_page')) : the_row();
                $title_why_pick_me_home = get_sub_field('title_why_pick_me_home');
                $desc_why_pick_me_home = get_sub_field('desc_why_pick_me_home');
                $img_why_pick_me_home = get_sub_field('img_why_pick_me_home');
                $box_list_info_home_us = get_sub_field('box_list_info_home_us');
        ?>
            <div class="sec-reason home-seven">
                <div class="container">
                    <div class="reason-wrap">
                        <h2 class="text-l text-center m-b-16 reason-tit"><?php echo $title_why_pick_me_home; ?></h2>
                        <p class="text-center text-6 reason-txt">
                            <?php echo $desc_why_pick_me_home; ?>
                        </p>
                        <div class="reason-content pos-relative">
                            <div class="reason-image">
                                <div class="bg-shape"></div>
                                <?php echo wp_get_attachment_image($img_why_pick_me_home, '570x627');?>
                            </div>
                            <?php  if ($box_list_info_home_us) : ?>
                                <div class="reason-lst-wrap">
                                    <?php
                                        foreach ($box_list_info_home_us as $item) :
                                            $select = $item["select_type_layout_list"];
                                            $list = $item["list_info_home_us"];
                                            if ($select == "left") :
                                                if ($list) :
                                                    
                                    ?>
                                        <div class="reason-lst left">
                                            <?php 
                                                $s = 1;
                                                foreach ($list as $sub_item) :
                                                    $icon = $sub_item["icon_list_info_home_us"];
                                                    $title = $sub_item["title_list_info_home_us"];
                                                    $desc = $sub_item["desc_list_info_home_us"];
                                            ?>
                                                <div class="reason-lst-item <?php if ($i == 2){echo "flex-jc-end";}?>">
                                                    <div class="gen-icon">
                                                        <?php echo wp_get_attachment_image($icon, 'thumbnail');?>
                                                    </div>
                                                    <h3 class="text-2 m-b-8 tit"><?php echo $title; ?></h3>
                                                    <p class="text-1 text">
                                                        <?php echo $desc; ?>
                                                    </p>
                                                </div>
                                            <?php $i++; endforeach; ?>
                                        </div>
                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                    ?>

                                    <?php
                                        foreach ($box_list_info_home_us as $item) :
                                            $select = $item["select_type_layout_list"];
                                            $list = $item["list_info_home_us"];
                                            if ($select == "right") :
                                                if ($list) :
                                                    
                                    ?>
                                        <div class="reason-lst right">
                                            <?php 
                                                $s = 1;
                                                foreach ($list as $sub_item) :
                                                    $icon = $sub_item["icon_list_info_home_us"];
                                                    $title = $sub_item["title_list_info_home_us"];
                                                    $desc = $sub_item["desc_list_info_home_us"];
                                            ?>
                                                <div class="reason-lst-item">
                                                    <div class="gen-icon">
                                                        <?php echo wp_get_attachment_image($icon, 'thumbnail');?>
                                                    </div>
                                                    <h3 class="text-2 m-b-8 tit"><?php echo $title; ?></h3>
                                                    <p class="text-1 text">
                                                        <?php echo $desc; ?>
                                                    </p>
                                                </div>
                                            <?php $i++; endforeach; ?>
                                        </div>
                                    <?php
                                                endif;
                                            endif;
                                        endforeach;
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('destination_home_page')) :
                while(have_rows('destination_home_page')) : the_row();
                $link_video_destination_home = get_sub_field('link_video_destination_home');
                $title_destination_home = get_sub_field('title_destination_home');
                $desc_destination_home = get_sub_field('desc_destination_home');
                $btn_destination_home = get_sub_field('btn_destination_home');
        ?>
            <div class="home-eight">
                <div class="section-wrap flex flex-wrap">
                    <div class="content-video pos-relative">
                        <div class="video">
                            <?php
                                if ($link_video_destination_home != '') {
                                    $get = wp_oembed_get(@$link_video_destination_home);
                                    if (!$get) {
                                        $get = '<iframe allowfullscreen  width="870" height="480"src="' . @$link_video_destination_home . '" class="s-video"></iframe>';
                                    }
                                    if ($get != '') {
                                        echo $get;
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="content-text flex flex-wrap flex-jc-center flex-ai-center" data-aos="zoom-in" data-aos-duration="1000">
                        <h3 class="text-center text-l tit"><?php echo $title_destination_home; ?></h3>
                        <p class="text-center text-1 txt m-b-30">
                            <?php echo $desc_destination_home; ?>
                        </p>
                        <?php
                            if ($btn_destination_home) :
                                foreach ($btn_destination_home as $item) :
                                    $title = $item["title_btn_destination_home"];
                                    $link = $item["link_btn_destination_home"];
                        ?>
                            <button class="btn btn-l">
                                <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                            </button>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <?php
            if (have_rows('partners_and_customer_home_page')) :
                while(have_rows('partners_and_customer_home_page')) : the_row();
                $title_partners_and_customer_home = get_sub_field('title_partners_and_customer_home');
                $list_partners_and_customer_home = get_sub_field('list_partners_and_customer_home');
        ?>
            <div class="sec-partner padding-sec-1">
                <div class="container">
                    <div class="partner-wrap">
                        <h2 class="text-center color-white text-l partner-tit"><?php echo $title_partners_and_customer_home; ?></h2>
                        <?php if ($list_partners_and_customer_home) :?>
                            <div class="partner-silde">
                                <div class="swiper-wrapper">
                                    <?php 
                                        foreach ($list_partners_and_customer_home as $item) :
                                            $rating = $item["select_rating_list_pnc_home"];
                                            $desc = $item["desc_list_pnc_home"];
                                            $ava = $item["ava_list_pnc_home"];
                                            $name = $item["name_list_pnc_home"];
                                            $location = $item["location_list_pnc_home"];
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="rate m-b-30">
                                                <ul class="rate-lst flex">
                                                    <li class="rate-item <?php if ($rating >= 1){echo "active";}?>">
                                                        <i class='bx bxs-star'></i>
                                                    </li>
                                                    <li class="rate-item <?php if ($rating >= 2){echo "active";}?>">
                                                        <i class='bx bxs-star'></i>
                                                    </li>
                                                    <li class="rate-item <?php if ($rating >= 3){echo "active";}?>">
                                                        <i class='bx bxs-star'></i>
                                                    </li>
                                                    <li class="rate-item <?php if ($rating >= 4){echo "active";}?>">
                                                        <i class='bx bxs-star'></i>
                                                    </li>
                                                    <li class="rate-item <?php if ($rating >= 5){echo "active";}?>">
                                                        <i class='bx bxs-star'></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="intro text-6">
                                                <?php echo $desc; ?>
                                            </p>
                                            <div class="avatar">
                                                <?php echo wp_get_attachment_image($ava, 'thumbnail');?>
                                            </div>
                                            <p class="name text-7"><?php echo $name; ?></p>
                                            <p class="position text-uppercase text-5"><?php echo $location; ?></p>
                                        </div>
                                    <?php
                                        endforeach; 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <div class="navigation-noBg navigation-partner-next navigation-next navigation-swiper">
                        <i class='bx bx-chevron-right'></i>
                    </div>
                    <div class="navigation-noBg navigation-partner-prev navigation-prev navigation-swiper">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif; 
        ?>

        <div class="sec-news home-ten padding-sec">
            <div class="container">
                <h2 class="text-center text-l news-tit m-b-30" data-aos="fade-up" data-aos-duration="1000"><?php _e("Tin tức", "monamedia")?></h2>
                <div class="news-wrap">
                    <?php
                        $id_not = 0;
                        $count = 1;
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => $count,
                            'order'       => 'DESC',
                            'tax_query' => [
                                'relation' => 'AND',
                            ]
                        ];
                        $queryPro = new WP_Query($args);
                        if ($queryPro->have_posts()) {
                            while ($queryPro->have_posts()) {
                                $queryPro->the_post();
                                $id_not = get_the_ID();
                    ?>
                        <div class="news-main news-i pos-relative" data-aos="fade-right" data-aos-duration="1000">
                            <div class="img img-main m-b-16">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('570x399'); ?></a>
                                <div class="news-date pos-abs flex flex-column flex-ai-center">
                                    <span class="day"><?php echo get_the_date("d", get_the_ID()); ?></span>
                                    <span class="month"><?php echo get_the_date("F", get_the_ID()); ?></span>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="text-4 m-b-8"><?php the_title(); ?></a>
                            <p class="text-10"><?php echo get_the_excerpt(); ?></p>
                        </div>
                    <?php
                            }
                            wp_reset_query();
                        }else {
                            echo'
                                <div class="container">
                                    <div class="col-3">
                                        <div class="not-found">' . __('Chưa có tin tức', 'monamedia') . '</div> </div> </div>';
                        }
                    ?>
                    <div class="news-lst flex flex-wrap news-i">
                        <?php
                            $s = 800;
                            $count = 4;
                            $args = [
                                'post_type' => 'post',
                                'posts_per_page' => $count,
                                'post__not_in' => array($id_not),
                                'order'       => 'DESC',
                                'tax_query' => [
                                    'relation' => 'AND',
                                ]
                            ];
                            $queryPro = new WP_Query($args);
                            if ($queryPro->have_posts()) {
                                while ($queryPro->have_posts()) {
                                    $queryPro->the_post();
                                    $id_not = get_the_ID();
                        ?>
                            <div class="news-lst-item flex" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="<?php echo $s;?>">
                                <div class="img img-item">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('170x113'); ?></a>
                                </div>
                                <div class="news-ct">
                                    <div class="date">
                                        <div class="icon">
                                            <img src="<?php echo site_url(); ?>/template/assets/img/svg/calendar.svg" alt="">
                                        </div>
                                        <span class="text text-1"><?php echo get_the_date("d, F, Y", get_the_ID());?></span>
                                    </div>
                                    <a href="#" class="text-4"><?php the_title(); ?></a>
                                </div>
                            </div>
                        <?php
                                $s+=200;
                                }
                                wp_reset_query();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part("patch/render/brand-gallery"); ?>
    </div>

<?php
endwhile;
get_footer();
?>