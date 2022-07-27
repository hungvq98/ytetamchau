<?php
get_header();
while (have_posts()) :
    the_post();

    $arr = get_terms([
        'taxonomy' => 'category',
        'hide_empty' => false,
        'order' => 'ASC',
        'orderby' => "id",
    ]);
?>

    <div class="main">
        <div class="sec-breadcrumb">
            <div class="container">
                <?php get_template_part("patch/breadcrumb"); ?>
            </div>
        </div>
        <div class="news">
            <div class="container">
                <div class="news-wrap">
                    <div class="news-left">
                        <h1 class="news-title"><?php the_title(); ?></h1>
                        <div class="date">
                            <img src="<?php echo site_url(); ?>/template/assets/img/svg/calendar.svg" alt=""><span><?php echo get_the_date('d, F, Y', get_the_ID())?></span>
                        </div>
                        <div class="mona-content">
                            <?php the_content(); ?>
                        </div>

                        <div class="news-socials">
                            <a href="javascript:;"><?php _e('Chia sẻ bài viết', 'monamedia')?></a>
                            <?php get_template_part('patch/social-share'); ?>
                        </div>

                    </div>

                    <div class="news-right">
                        <div class="category">
                            <form class="category-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="text" placeholder="Tìm kiếm" name="s" id="s" required>
                                <button type="submit" class="btn btn-yellow">
                                    <img src="<?php echo site_url(); ?>/template/assets/img/svg/loupe4.svg" alt="">
                                </button>
                            </form>

                            <?php if ($arr) :?>
                                <div class="category-body">
                                    <div class="category-title">
                                        <img src="<?php echo site_url(); ?>/template/assets/img/svg/apps.svg" alt="">
                                        <span><?php _e("Danh mục", "monamedia")?></span>
                                    </div>
                                    <div class="category-item">
                                        <?php foreach ($arr as $item) :?>
                                            <a href="<?php echo get_category_link($item->term_id); ?>"><?php echo $item->name; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="category-blog">
                                <div class="category-title">
                                    <img src="<?php echo site_url(); ?>/template/assets/img/svg/document.svg" alt="">
                                    <span><?php _e("Bài viết nổi bật", "monamedia")?></span>
                                </div>
                                <div class="category-blog-box">
                                    <?php
                                        $count = 3;
                                        $args = [
                                            'post_type' => 'post',
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
                                    ?>
                                        <a href="<?php the_permalink(); ?>" class="category-blog-item">
                                            <div class="item-imgs">
                                                <?php the_post_thumbnail('88x66'); ?>
                                            </div>
                                            <div class="item-info">
                                                <div class="date"><img src="<?php echo site_url(); ?>/template/assets/img/svg/calendar.svg" alt="">
                                                    <span><?php echo get_the_date('d, F, Y', get_the_ID())?></span>
                                                </div>
                                                <p>
                                                    <?php echo get_the_title(get_the_ID()); ?>
                                                </p>
                                            </div>
                                        </a>
                                    <?php
                                            }
                                            wp_reset_query();
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
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

<style>
    .breadcrumb-link.wh {
        color: #000
    }
    .breadcrumb-item:not(:first-child)::before {
        content: url(/wp-content/uploads/2022/07/icon-breadcrumb.png) !important;
    }
</style>