
<?php get_header(); ?>

<div class="l-mv p-mv">
            <div class="p-mv__bg--child">
            </div>
            <div class="l-mv__content-area--child p-mv__content-area">
                <p class="p-mv__read-main--child">Blog</p>
                <p class="p-mv__read-sub--child l-mv__read-sub--child"><?php the_archive_title(); ?></p>
                <p><?php the_archive_description(); ?></p>
            </div>
            <!-- /.p-mv__content-area -->
        </div>
        <!-- / .l-mv -->
    </div>
    <!-- /.l-bg-wrapper -->
    <?php if (function_exists('bcn_display')) : ?>
    <!-- breadcrumb -->
    <div class="l-inner__breadcrumb l-breadcrumb">
        <?php bcn_display(); ?>
    </div>
    <?php endif; ?>

    <div class="l-blogPage l-blogPage__wrapper l-inner__blogPage">
        <main class="l-blogPage__main">
            <ul class="p-blogPage__cards">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()): ?>
                    <? the_post(); ?>
                        <li class="p-blogPage__item">
                            <a href="<?php the_permalink(); ?>" class="p-card">
                                <div class="p-card__head">
                                    <?php if(has_post_thumbnail()):?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image">
                                    <?php endif; ?>
                                </div>
                                <div class="p-card__body">
                                    <div class="p-card__title"><?php the_title(); ?></div>
                                    <div class="p-card__description"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <!-- /.p-blogPage__cards -->
            <?php if(paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
            <!-- pagination -->
            <div class="l-pagination">
                <ul class="p-pagination">
                    <?php
                        $big = 9999999999;
                        $arg = array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'current' => max( 1, get_query_var('paged') ),
                            'show_all' => true,
                            'prev_next' => false,
                            'total'   => $wp_query->max_num_pages
                        );
                        echo paginate_links($arg);
                    ?>
                </ul>
            </div>
            <?php endif; ?>
        </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
