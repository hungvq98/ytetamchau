<?php

/**
 * Template name: Thread Page
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
    the_post();
    $list = get_field("list_product_thread_page");
    $arr_color = ["#225CA6", "#54B549", "#B91F43", "#4EC9F5", "#FECB0D", "#C8972E", "#E3C998", "#EB4095", "#EE4039", "#F8AB9B", "#D9D9D7", "#B89BC9"];
?>

    <main class="main over">
        <div class="banner">
            <?php the_post_thumbnail('1915x278'); ?>
            <h1><?php the_title(); ?></h1>
            <?php get_template_part("patch/breadcrumb"); ?>
        </div>

        <div class="sec-cate">
            <div class="container">
                <div class="cate-wrap">
                    <div class="shape">
                        <div class="shape-wrap">
                            <div class="shape-slide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <p class="text text-l m-b-16"><?php the_title(); ?></p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p class="text text-l m-b-16"><?php the_title(); ?></p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p class="text text-l m-b-16"><?php the_title(); ?></p>
                                    </div>
                                </div>
                                <div class="swiper-pagination shape-pagination"></div>
                            </div>
                            <?php 
                                if ($list) : 
                                    foreach ($list as $item) :
                                        $select = $item["select_type_list_product_thread"];
                                        $arr_post = $item["post_single_product_thread"];
                            ?>
                                <?php if ($select == "left") :?>
                                    <div class="shape-points left">
                                        <?php if ($arr_post) :?>
                                            <div class="shape-points-lst">
                                                <?php 
                                                    $i = 1; 
                                                    foreach ($arr_post as $item) :
                                                ?>
                                                    <?php if ($i == 1) :?>
                                                        <div class="shape-point des-1">
                                                            <div class="line-a left-top"></div>
                                                        </div>
                                                    <?php elseif ($i == 2) :?>
                                                        <div class="shape-point des-2">
                                                            <div class="line-a line-a-2 left-top left-top-1"></div>
                                                        </div>
                                                    <?php elseif ($i == 3) :?>
                                                        <div class="shape-point des-3">
                                                            <div class="line-a line-a-3 left-top left-top-2"></div>
                                                        </div>
                                                    <?php elseif ($i == 4) :?>
                                                        <div class="shape-point des-4">
                                                            <div class="line-a line-a-3 left-bottom left-bottom-2"></div>
                                                        </div>
                                                    <?php elseif ($i == 5) :?>
                                                        <div class="shape-point des-5">
                                                            <div class="line-a line-a-2 left-bottom left-bottom-1"></div>
                                                        </div>
                                                    <?php elseif ($i == 6) :?>
                                                        <div class="shape-point des-6">
                                                            <div class="line-a left-bottom"></div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php 
                                                    $i++; 
                                                    endforeach; 
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($select == "right") :?>
                                    <div class="shape-points right">
                                        <?php if ($arr_post) :?>
                                            <div class="shape-points-lst">
                                                <?php 
                                                    $i = 1; 
                                                    foreach ($arr_post as $item) :
                                                ?>
                                                    <?php if ($i == 1) :?>
                                                        <div class="shape-point des-7">
                                                            <div class="line-a right-top"></div>
                                                        </div>
                                                    <?php elseif ($i == 2) :?>
                                                        <div class="shape-point des-8">
                                                            <div class="line-a line-a-2 right-top right-top-1"></div>
                                                        </div>
                                                    <?php elseif ($i == 3) :?>
                                                        <div class="shape-point des-9">
                                                            <div class="line-a line-a-3 right-top right-top-2"></div>
                                                        </div>
                                                    <?php elseif ($i == 4) :?>
                                                        <div class="shape-point des-10">
                                                            <div class="line-a line-a-3 right-bottom right-bottom-2"></div>
                                                        </div>
                                                    <?php elseif ($i == 5) :?>
                                                        <div class="shape-point des-11">
                                                            <div class="line-a line-a-2 right-bottom right-bottom-1"></div>
                                                        </div>
                                                    <?php elseif ($i == 6) :?>
                                                        <div class="shape-point des-12">
                                                            <div class="line-a right-bottom"></div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php 
                                                    $i++; 
                                                    endforeach; 
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            <?php 
                                    endforeach;
                                endif; 
                            ?>
                        </div>
                    </div>

                    
                    <div class="shape-around-lst">
                        <div class="shape-row pos-relative">
                            <?php 
                                if ($list) : 
                                    foreach ($list as $item) :
                                        $select = $item["select_type_list_product_thread"];
                                        $arr_post = $item["post_single_product_thread"];
                            ?>
                            <?php if ($select == "left") :?>
                                <div class="shape-col left">
                                    <?php if ($arr_post) :?>
                                        <div class="shape-col-wrap">
                                            <?php 
                                                $i = 0; 
                                                foreach ($arr_post as $item) :
                                                    $title = get_the_title($item);
                                                    $exc = get_the_excerpt($item);
                                                    $link = get_the_permalink($item);
                                                    $icon = get_field("icon_single_product_thread", $item);
                                            ?>
                                                <div class="shape-item-sm">
                                                    <div class="shape-icon" style="background: <?php echo $arr_color[$i];?>">
                                                        <?php echo wp_get_attachment_image($icon, 'thumbnail');?>
                                                    </div>
                                                    <div class="shape-info text-right">
                                                        <div class="shape-info-wrap">
                                                            <span class="name text-4"><?php echo $title;?></span>
                                                            <div class="shape-info-content">
                                                                <p class="info text-1">
                                                                    <?php echo $exc;?>
                                                                </p>
                                                                <a href="<?php echo $link;?>" class="shape-link text-1"><?php _e("Xem thêm", "monamedia")?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shape-point-des left-des" id="des-<?php echo $i;?>" style="background: <?php echo $arr_color[$i];?>"></div>
                                                </div>
                                            <?php 
                                                $i++; 
                                                endforeach; 
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($select == "right") :?>
                                <div class="shape-col right">
                                    <?php if ($arr_post) :?>
                                        <div class="shape-col-wrap">
                                            <?php 
                                                $i = 6; 
                                                foreach ($arr_post as $item) :
                                                    $title = get_the_title($item);
                                                    $exc = get_the_excerpt($item);
                                                    $link = get_the_permalink($item);
                                                    $icon = get_field("icon_single_product_thread", $item);
                                            ?>
                                                <div class="shape-item-sm">
                                                    <div class="shape-icon" style="background: <?php echo $arr_color[$i];?>">
                                                        <?php echo wp_get_attachment_image($icon, 'thumbnail');?>
                                                    </div>
                                                    <div class="shape-info">
                                                        <div class="shape-info-wrap">
                                                            <span class="name text-4"><?php echo $title;?></span>
                                                            <div class="shape-info-content">
                                                                <p class="info text-1">
                                                                    <?php echo $exc;?>
                                                                </p>
                                                                <a href="<?php echo $link;?>" class="shape-link text-1"><?php _e("Xem thêm", "monamedia")?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="shape-point-des right-des test-i" id="des-<?php echo $i;?>" style="background: <?php echo $arr_color[$i];?>"></div>
                                                </div>
                                            <?php 
                                                $i++; 
                                                endforeach; 
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
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
            $gallery_brand = get_field('gallery_brand');
            if ($gallery_brand) :
        ?>
            <div class="brand white-bg">
                <div class="brand-wrap">
                        <div class="container">
                        <div class="swiper brandSwiper">
                            <div class="swiper-wrapper">
                                <?php 
                                    foreach ($gallery_brand as $item) :
                                        $desc = $item["desc_gallery_brand"];
                                        $img = $item["img_gallery_brand"];
                                ?>
                                    <a href="#" class="swiper-slide">
                                        <p class="slide-over">
                                            <?php echo $desc; ?>
                                        </p>
                                        <div class="img">
                                            <?php echo wp_get_attachment_image($img, '200x100');?>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </main>

<?php
endwhile;
get_footer();
?>