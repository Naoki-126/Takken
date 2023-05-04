
<?php get_header(); ?>

<div class="l-mv p-mv">
            <div class="p-mv__bg--child">
            </div>
            <div class="l-mv__content-area--child p-mv__content-area">
                <p class="p-mv__read-main--child">Products</p>
                <p class="p-mv__read-sub--child l-mv__read-sub--child">製品紹介</p>
            </div>
            <!-- /.p-mv__content-area -->
        </div>
        <!-- / .l-mv -->
    </div>
    <!-- /.l-bg-wrapper -->
    <?php if (function_exists('bcn_display')) : ?>
    <!-- breadcrumb -->
    <div class="l-inner__breadcrumb l-breadcrumb">
        <div class="p-breadcrumb l-blogPage__breadcrumb"><?php bcn_display(); ?></div>
    </div>
    <!-- /.l-breadcrumb -->
    <?php endif; ?>

    <section class="l-products__page">
        <div class="p-products__categories">
            <div class="p-products__category"><a href="<?php echo get_post_type_archive_link('products'); ?>">すべて</a></div>
            <?php
            $cat = get_queried_object();
            $cat_name = $cat -> name;
            ?>
            <?php
            $genre_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
            foreach ( $genre_terms as $genre_term ) :
            ?>
            <div class="p-products__category <?php if($cat_name == esc_html($genre_term->name)){echo "is-active";} ?>">
            <a href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /.p-products__categories -->

        <ul class="p-products__cards">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): ?>
                    <? the_post(); ?>
                        <li class="p-products__card">
                            <a href="<?php the_permalink(); ?>"  class="c-product-card">
                                <div class="c-product-card__img">
                                <?php if(has_post_thumbnail()):?>
                                <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image">
                                <?php endif; ?>
                            </div>
                            <div class="c-product-card__content">
                                <div class="c-product-card__tag"><?php echo get_the_terms(get_the_ID(), 'genre')[0]->name; ?></div>
                                <div class="c-product-card__title"><?php the_title(); ?></div>
                                <div class="c-product-card__text"><?php the_excerpt(); ?></div>
                            </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>


        </ul>

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

    </section>


<?php get_footer(); ?>
