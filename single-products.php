<?php get_header(); ?>

<div class="l-mv p-mv">
        <div class="p-mv__bg--child"></div>
        <div class="l-mv__content-area--child p-mv__content-area">
            <p class="p-mv__read-main--child">Products</p>
            <p class="p-mv__read-sub--child l-mv__read-sub--child">製品紹介</p>
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

        <div class="l-blogPage l-blogPage__wrapper l-inner__blogPage">
        <main class="l-blogPage__main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()): ?>
                <? the_post(); ?>

                <div class="p-entry l-entry-main__content">
                <div class="c-product-card__tag"><?php echo get_the_terms(get_the_ID(), 'genre')[0]->name; ?></div>
                    <h1 class="p-entry__title"><?php the_title(); ?></h1>
                    <div class="p-entry__date">
                        <time class="p-entry__published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
                        <?php if(get_the_modified_time('c') !== get_the_time('c')) :?>
                        <time class="p-entry__updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                        <?php endif; ?>
                    </div>
                    <div class="p-entry__img">
                        <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image">
                        <?php endif; ?>
                    </div>

                    <div class="p-entry__body p-entry-content">
                        <p class="p-entry-content__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <div class="p-toc p-entry-content__toc">
                            <div class="p-toc__title">この記事のコンテンツ</div>
                            <ul class="p-toc__level1-lists">
                                <li class="p-toc__level1-list">
                                    <a class="p-toc__level1-link" href="#">見出しが入ります</a>
                                    <ul class="p-toc__level2-lists">
                                        <li class="p-toc__level2-list">
                                            <a class="p-toc__level2-link" href="#">見出しが入ります</a>
                                        </li>
                                        <li class="p-toc__level2-list">
                                            <a class="p-toc__level2-link" href="#">見出しが入ります</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-toc__level1-list">
                                    <a class="p-toc__level1-link" href="#"> 見出しが入ります </a>
                                    <ul class="p-toc__level2-lists">
                                        <li class="p-toc__level2-list">
                                            <a class="p-toc__level2-link" href="#">見出しが入ります</a>
                                        </li>
                                        <li class="p-toc__level2-list">
                                            <a class="p-toc__level2-link" href="#">見出しが入ります</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h2 class="c-entry-heading-type1 p-entry-content__h2">見出しが入ります</h2>
                        <p class="p-entry-content__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a href="#"
                                class="p-entry-content__link">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <h3 class="c-entry-heading-type2 p-entry-content__h3">見出しが入ります</h3>
                        <p class="p-entry-content__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a href="#"
                                class="p-entry-content__link">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキスト<strong
                                class="p-entry-content__strong">テキストボールドテキストボールド</strong>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <h4 class="c-entry-heading-type3 p-entry-content__h4">見出しが入ります</h4>
                        <p class="p-entry-content__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<a href="#"
                                class="p-entry-content__link">テキストリンクテキストリンク</a>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>
                        <div class="p-entry-content__button">
                            <a class="c-entry-button" href="">テキストテキスト</a>
                        </div>
                    </div>
                    <div class="p-entry__tag p-entry-tag">
                        <div class="p-entry-tag__head">タグ</div>
                        <div class="p-entry-tag__item"><a href="">WordPress</a></div>
                        <div class="p-entry-tag__item"><a href="">コーディング</a></div>
                        <div class="p-entry-tag__item"><a href="">フリーランス</a></div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
