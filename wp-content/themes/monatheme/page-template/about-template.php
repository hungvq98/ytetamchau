<?php

/**
 * Template name: About Page
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
    the_post();
?>

    <main class="main">
        <div class="banner">
            <?php the_post_thumbnail('1915x278'); ?>
            <h1><?php the_title(); ?></h1>
            <?php get_template_part("patch/breadcrumb"); ?>
        </div>

        <?php
            if (have_rows('banner_about_page')) :
                while(have_rows('banner_about_page')) : the_row();
                $title_banner_about = get_sub_field('title_banner_about');
                $list_banner_about = get_sub_field('list_banner_about');
        ?>
            <div class="sec-introduce padding-sec">
                <div class="container">
                    <div class="introduce-wrap flex flex-wrap">
                        <div class="introduce-content introduce-item">
                            <h2 class="text-l introduce-tit m-b-16"><?php echo $title_banner_about; ?></h2>
                            <?php if ($list_banner_about) :?>
                                <div class="introduce-lst">
                                    <?php 
                                        $i = 1;
                                        foreach ($list_banner_about as $item) :
                                            $title = $item["title_list_banner_about"];
                                            $desc = $item["desc_list_banner_about"];
                                    ?>
                                        <div class="introduce-lst-item flex flex-ai-center <?php if ($i == 1){echo "active";}?>">
                                            <span class="introduce-num text-xl"><?php echo $i;?>.</span>
                                            <div class="introduce-ct">
                                                <h3 class="text-4 introduce-ct-tit"><?php echo $title; ?></h3>
                                                <p class="text-1 introduce-ct-txt">
                                                    <?php echo $desc; ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php $i++; endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($list_banner_about) :?>
                            <div class="introduce-image introduce-item">
                                <div class="introduce-lstImg">
                                    <?php 
                                        $i = 1;
                                        foreach ($list_banner_about as $item) :
                                            $img = $item["img_list_banner_about"];
                                    ?>
                                        <div class="introduce-lstImg-item <?php if ($i == 1){echo "active";}?>">
                                            <div class="img">
                                                <?php echo wp_get_attachment_image($img, '945x472');?>
                                            </div>
                                        </div>
                                    <?php $i++; endforeach; ?>
                                </div>
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
            if (have_rows('why_pick_me_about_page')) :
                while(have_rows('why_pick_me_about_page')) : the_row();
                $title_why_pick_me_about = get_sub_field('title_why_pick_me_about');
                $desc_why_pick_me_about = get_sub_field('desc_why_pick_me_about');
                $img_why_pick_me_about = get_sub_field('img_why_pick_me_about');
                $box_list_info_about_us = get_sub_field('box_list_info_about_us');
        ?>
            <div class="sec-reason">
                <div class="container">
                    <div class="reason-wrap">
                        <h2 class="text-l text-center m-b-16 reason-tit"><?php echo $title_why_pick_me_about; ?></h2>
                        <p class="text-center text-6 reason-txt">
                            <?php echo $desc_why_pick_me_about; ?>
                        </p>
                        <div class="reason-content pos-relative">
                            <div class="reason-image">
                                <div class="bg-shape"></div>
                                <?php echo wp_get_attachment_image($img_why_pick_me_about, '570x627');?>
                            </div>
                            <?php  if ($box_list_info_about_us) : ?>
                                <div class="reason-lst-wrap">
                                    <?php
                                        foreach ($box_list_info_about_us as $item) :
                                            $select = $item["select_type_layout_list"];
                                            $list = $item["list_info_about_us"];
                                            if ($select == "left") :
                                                if ($list) :
                                                    
                                    ?>
                                        <div class="reason-lst left">
                                            <?php 
                                                $s = 1;
                                                foreach ($list as $sub_item) :
                                                    $icon = $sub_item["icon_list_info_about_us"];
                                                    $title = $sub_item["title_list_info_about_us"];
                                                    $desc = $sub_item["desc_list_info_about_us"];
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
                                        foreach ($box_list_info_about_us as $item) :
                                            $select = $item["select_type_layout_list"];
                                            $list = $item["list_info_about_us"];
                                            if ($select == "right") :
                                                if ($list) :
                                                    
                                    ?>
                                        <div class="reason-lst right">
                                            <?php 
                                                $s = 1;
                                                foreach ($list as $sub_item) :
                                                    $icon = $sub_item["icon_list_info_about_us"];
                                                    $title = $sub_item["title_list_info_about_us"];
                                                    $desc = $sub_item["desc_list_info_about_us"];
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
            if (have_rows('desc_about_page')) :
        ?>
            <div class="sec-equipment-ab padding-sec-0">
                <div class="container">
                    <div class="eqab-wap">
                        <?php
                            while(have_rows('desc_about_page')) : the_row();
                                $img_desc_about_page = get_sub_field('img_desc_about_page');
                                $icon_desc_about_page = get_sub_field('icon_desc_about_page');
                                $title_desc_about_page = get_sub_field('title_desc_about_page');
                                $info_desc_about_page = get_sub_field('info_desc_about_page');
                        ?>
                            <div class="eqab-item flex flex-wrap">
                                <div class="eqab-image eqab-item-cpn">
                                    <div class="img m-b-16">
                                        <?php echo wp_get_attachment_image($img_desc_about_page, '585x379');?>
                                    </div>
                                </div>
                                <div class="eqab-content eqab-item-cpn">
                                    <div class="icon">
                                        <?php echo wp_get_attachment_image($icon_desc_about_page, 'thumbnail');?>
                                    </div>
                                    <p class="text-2 text-gr"><?php echo $title_desc_about_page; ?></p>
                                    <p class="text-1 text"><?php echo $info_desc_about_page; ?></p>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        <?php
            endif; 
        ?>

        <?php
            if (have_rows('partners_and_customer_about_page')) :
                while(have_rows('partners_and_customer_about_page')) : the_row();
                $title_partners_and_customer_about = get_sub_field('title_partners_and_customer_about');
                $list_partners_and_customer_about = get_sub_field('list_partners_and_customer_about');
        ?>
            <div class="sec-partner padding-sec-1">
                <div class="container">
                    <div class="partner-wrap">
                        <h2 class="text-center color-white text-l partner-tit"><?php echo $title_partners_and_customer_about; ?></h2>
                        <?php if ($list_partners_and_customer_about) :?>
                            <div class="partner-silde">
                                <div class="swiper-wrapper">
                                    <?php 
                                        foreach ($list_partners_and_customer_about as $item) :
                                            $rating = $item["select_rating_list_pnc_about"];
                                            $desc = $item["desc_list_pnc_about"];
                                            $ava = $item["ava_list_pnc_about"];
                                            $name = $item["name_list_pnc_about"];
                                            $location = $item["location_list_pnc_about"];
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

        <?php get_template_part("patch/render/brand-gallery"); ?>
    </main>

<?php
endwhile;
get_footer();
?>