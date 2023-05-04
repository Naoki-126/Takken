
<?php get_header(); ?>

    <div class="l-mv p-mv">
        <div class="p-mv__bg--child"></div>
        <div class="l-mv__content-area--child p-mv__content-area">
            <p class="p-mv__read-main--child">News</p>
            <p class="p-mv__read-sub--child l-mv__read-sub--child">お知らせ</p>
        </div>
        <!-- /.p-mv__content-area -->
    </div>
		<!-- / .l-mv -->
	</div>
    <!-- /.l-bg-wrapper -->
    <main>
        <!-- /.l-bg-wrapper -->
        <?php if (function_exists('bcn_display')) : ?>
        <!-- breadcrumb -->
        <div class="l-inner__breadcrumb l-breadcrumb">
        <div class="p-breadcrumb l-blogPage__breadcrumb"><?php bcn_display(); ?></div>
        </div>
        <!-- /.l-breadcrumb -->
        <?php endif; ?>

        <section class="l-news__page">
            <div class="p-news">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <dl class="p-news__item">
                                    <dt class="p-news__index-date"><?php echo get_the_date(); ?></dt>
                                    <dd class="p-news__index-title"><?php the_title(); ?></dd>
                            </dl>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>

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
            </div>
            <!-- /.p-news -->
        </section>
        <!-- /.l-news -->

<?php get_footer(); ?>
