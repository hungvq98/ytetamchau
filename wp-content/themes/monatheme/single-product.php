<?php
get_header();
while (have_posts()) :
    the_post();
    $gallery = get_field('gallery_single_product');
    $rating = get_field('rating_single_product');
    $ar_color = get_field('array_color_single_product');
    $detail = get_field('detail_single_product');
    $table = get_field('table_desc_single_product');
?>

    <main class="main">
        <div class="sec-breadcrumb">
            <div class="container">
                <?php get_template_part("patch/breadcrumb"); ?>
            </div>
        </div>

        <div class="sec-product padding-sec">
            <div class="container">
                <div class="product-wrap flex flex-wrap">
                    <?php if ($gallery) :?>
                        <div class="slide-image flex-item">
                            <div class="slide-wrap">
                                <div class="product-gallery">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gen-relative">
                                                <div class="img">
                                                    <?php the_post_thumbnail('510x410'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php foreach ($gallery as $item) :?>
                                            <div class="swiper-slide">
                                                <div class="gen-relative">
                                                    <div class="img">
                                                        <?php echo wp_get_attachment_image($item, '510x410');?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gen-relative">
                                                <div class="img">
                                                    <?php the_post_thumbnail('168x119'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php foreach ($gallery as $item) :?>
                                            <div class="swiper-slide">
                                                <div class="gen-relative">
                                                    <div class="img">
                                                        <?php echo wp_get_attachment_image($item, '168x119');?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="product-info flex-item">
                        <h2 class="name text-l m-b-8"><?php the_title(); ?></h2>
                        <?php if ($rating) :?>
                            <div class="rate m-b-8">
                                <ul class="rate-lst flex">
                                    <li class="rate-item <?php if ($rating >= 1){echo "active";}?>">
                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/star.svg" alt="">
                                    </li>
                                    <li class="rate-item <?php if ($rating >= 2){echo "active";}?>">
                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/star.svg" alt="">
                                    </li>
                                    <li class="rate-item <?php if ($rating >= 3){echo "active";}?>">
                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/star.svg" alt="">
                                    </li>
                                    <li class="rate-item <?php if ($rating >= 4){echo "active";}?>">
                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/star.svg" alt="">
                                    </li>
                                    <li class="rate-item <?php if ($rating == 5){echo "active";}?>">
                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/star.svg" alt="">
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <p class="des text-1 m-b-16">
                            <?php the_content(); ?>
                        </p>
                        <ul class="properties-lst m-b-30">
                            <?php 
                                if ($ar_color) :
                            ?>
                                <li class="properties-item">
                                    <span class="properties-tit text-2"><?php _e('Màu sắc', 'monamedia')?></span>
                                    <span class="color-lst flex">
                                        <?php 
                                            $i = 1;
                                            foreach ($ar_color as $item) :
                                                $color = $item["color_single_product"];
                                        ?>
                                            <span class="color-control">
                                                <input type="radio" class="color-input" name="color" id="color-<?php echo $i;?>" checked="true">
                                                <label for="color-<?php echo $i;?>" class="color-label custom-color" data-color="<?php echo $color;?>"></label>
                                            </span>
                                        <?php 
                                            $i++;
                                            endforeach;
                                        ?>
                                    </span>
                                </li>
                            <?php
                                endif; 
                            ?>
                            <?php 
                                if ($detail) :
                                    foreach ($detail as $item) :
                                        $title = $item["title_detail_single_product"];
                                        $desc = $item["des_detail_single_product"];
                            ?>
                                <li class="properties-item">
                                    <span class="properties-tit text-2"><?php echo $title;?></span>
                                    <span class="properties-txt text-1"><?php echo $desc;?></span>
                                </li>
                            <?php 
                                    endforeach;
                                endif; 
                            ?>
                        </ul>
                        <a href="#" class="btn btn-l">ĐĂNG KÍ NGAY</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec-info padding-sec">
            <div class="container">
                <?php if ($table) :?>
                    <div class="tab-lst">
                        <ul class="lst flex">
                            <?php 
                                $i = 1;
                                foreach ($table as $item) :
                                    $title = $item["title_table_desc_single_product"];
                            ?>
                                <li class="tab-item color-white text-1 <?php if ($i==1){echo "active";}?>"><?php echo $title; ?></li>
                            <?php $i++; endforeach; ?>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <ul class="lst">
                            <?php 
                                $i = 1;
                                foreach ($table as $item) :
                                    $desc = $item["info_table_desc_single_product"];
                                    $table = $item["table_detail_single_product"];
                            ?>
                                <li class="tab-content-item tab-description <?php if ($i==1){echo "active";}?>">
                                    <div class="tab-txt m-b-16 mona-content">
                                        <?php echo $desc; ?>
                                    </div>
                                    <?php if ($table) :?>
                                        <table class="tab-table tb-dt">
                                            <tbody>
                                                <?php 
                                                    foreach ($table as $item) :
                                                        $title = $item["title_table_detail_single_product"];
                                                        $desc = $item["desc_table_detail_single_product"];
                                                ?>
                                                    <tr>
                                                        <td class="row-tb  row-1">
                                                            <span class="tab-txt-bold"><?php echo $title; ?></span>
                                                        </td>
                                                        <td>
                                                            <span class="tab-txt"><?php echo $desc; ?></span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php endif; ?>
                                </li>
                            <?php $i++; endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="sec-related-products padding-sec">
            <div class="container">
                <h2 class="name text-l m-b-30 text-center"><?php _e('Sản phẩm liên quan', 'monamedia')?></h2>
                <div class="list-content">
                    <div class="related-list">
                        <div class="swiper-wrapper">
                            <?php
                            $count = 5;
                            $args = [
                                'post_type' => 'product',
                                'posts_per_page' => $count,
                                'order'       => 'DESC',
                                'post__not_in' => array(get_the_ID()),
                                'tax_query' => [
                                    'relation' => 'AND',
                                ]
                            ];
                            $queryPro = new WP_Query($args);
                            if ($queryPro->have_posts()) {
                                while ($queryPro->have_posts()) {
                                    $queryPro->the_post();
                                    get_template_part('patch/render/product-related');
                                }
                                wp_reset_query();
                            }
                            ?>
                        </div>
                        <?php
                            if(!$queryPro->have_posts()){
                                echo'
                                    <div class="container">
                                        <div class="col-3">
                                            <div class="not-found">' . __('Chưa có sản phẩm liên quan', 'monamedia') . '</div> </div> </div>';
                            }
                        ?>
                    </div>

                </div>
            </div>
        </div>

        <?php get_template_part("patch/render/brand-gallery"); ?>
    </main>

<?php
endwhile;
get_footer();
?>

<style>
    .breadcrumb-link.wh {
        color: #000
    }
    .breadcrumb-item:not(:first-child)::before {
        content: url(/wp-content/uploads/2022/07/icon-breadcrumb.png) !important;
    }
</style>