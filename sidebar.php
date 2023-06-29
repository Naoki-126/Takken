    <aside class="l-blogPage__aside">
        <div class="l-aside p-aside">
            <div class="p-aside__content1">
                <p class="p-aside__title1">人気記事ランキング</p>
                <?php
                    if ( function_exists('wpp_get_mostpopular') ) {
                        wpp_get_mostpopular(array(
                            'limit' => 3,
                            'range' => 'last24hours',
                            'thumbnail_width' => 94,
                            'thumbnail_height' => 66,
                            'stats_views' => 0,
                            'excerpt_length' => 15,
                            'wpp_start' => '<ul class="p-aside__lists1">',
                            'wpp_end' => '</ul>',
                            'post_html' => '<li class="p-aside__lists1__item">
                                <div href="#" class="p-aside__lists1__link">
                                    <div class="p-aside__lists1__img">{thumb}</div>
                                    <div class="p-aside__lists1__content">{excerpt}</div>
                                </div></li>'
                        ));
                    }
                ?>
                <!-- /.p-aside__lists1 -->
            </div>

            <div class="p-widget p-side-items__widget">
                <div class="p-widget__head c-widget-title p-aside__title1">新着記事</div>
                <ul class="p-aside__lists1">
                    <?php $recent_query = new WP_Query(
                        array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                        )
                    );
                    ?>

                    <?php if ($recent_query->have_posts()) : ?>
                        <?php while($recent_query->have_posts()) : ?>
                            <?php $recent_query->the_post(); ?>
                            <li class="p-aside__lists1__item">
                                <a href="<?php the_permalink(); ?>" class="p-aside__lists1__link">
                                    <div class="p-aside__lists1__img">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                            <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="p-aside__lists1__content"><?php the_excerpt(); ?></div> -->
                                    <div class="p-aside__lists1__content"><?php echo wp_trim_words( get_the_content(), 15, '…' ); ?></div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="p-widget p-side-items__widget">
                <div class="p-widget__head c-widget-title p-aside__title1">アーカイブ</div>
                <div class="p-widget__body">
                    <ul class="p-widget-links c-widget-link p-widget-links__item">
                        <?php wp_get_archives(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
</div>

    <!-- /.l-blogPage__wrapper -->
