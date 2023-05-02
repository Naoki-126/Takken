<?php
    /*
        Template Name: Home
    */
?>



<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<!-- OGP宣言 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no"><!-- 電話のリンクをしない設定 -->

    <meta property="og:title" content="START"><!-- OGPタイトル -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/"><!-- OGPサイトURL -->
    <meta property="og:image" content="https://example.com/img/ogp.png"><!-- OGPサムネイル -->
    <meta property="og:site_name" content="START"><!-- OGPサイトネーム -->
    <meta property="og:description" content="説明文"><!-- OGPサイトの概要欄 -->
    <meta name="twitter:card" content="summary_large_image"><!-- OGP Twitterカード -->
    <!-- GoogleFonts 1 Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- GoogleFotns 2 Robot -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- GoogleFonts 3 Noto Sans Japanese -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- ファビコンの設定 -->
    <!-- <link rel="icon" type="image/png" href=""> 192 * 192 -->
    <!-- <link rel="icon" type="image/png" href=""> 180 * 180 -->
    <!-- <link rel="icon" type="image/png" href=""> nomal -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="l-bg-wrapper">
        <header class="l-header">
            <div class="p-header">
                <h1 class="p-header__logo">
                    <a href="#" class="p-header__logo__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Takken&nbsp;Hanbai">
                    </a>
                </h1>
                <nav class="p-header__nav u-hidden-tab">
                    <ul class="p-header__list">
                        <li class="p-header__item">
                            <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-header__item__link">
                                <span>お知らせ</span>
                            </a>
                        </li>
                        <li class="p-header__item">
                            <a href="<?php echo esc_url(home_url('/about')); ?>"  class="p-header__item__link">
                                <span>会社案内</span>
                            </a>
                        </li>
                        <li class="p-header__item">
                            <a href="<?php echo esc_url(home_url('/products')); ?>" class="p-header__item__link">
                                <span>製品紹介</span>
                            </a>
                        </li>
                        <li class="p-header__item">
                            <a href="<?php echo esc_url(home_url('/category/blog')); ?>"  class="p-header__item__link">
                                <span>ブログ</span>
                            </a>
                        </li>
                        <li class="p-header__item--contact c-btn__top">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-header__item__link">
                                <span>お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.p-header__list -->
                </nav>

                <!-- drawer実装 -->
                <div id="js-drawer__btn" class="p-drawer__btn u-hidden-pc">
                    <span></span><span></span><span></span>
                </div>
                <nav id="js-drawer__nav" class="p-drawer__nav">
                    <div id="js-drawer__list" class="p-drawer__list">
                        <ul>
                            <li><a href="#">会社案内</a></li>
                            <li><a href="#">製品紹介</a></li>
                            <li><a href="#">販売店</a></li>
                            <li><a href="#">ブログ</a></li>
                            <li><a href="#">お問い合わせ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="p-drawer__circle-bg"></div>
                <!-- / drawer実装 -->
            </div>
            <!-- / .p-header -->
        </header>
        <!-- /.l-header -->
        <div class="l-mv p-mv">
            <div class="p-mv__bg">
                <img class="u-hidden-sp" src="<?php echo get_template_directory_uri(); ?>/img/mv-img__pc.jpg" alt="金属の歯車の画像">
                <img class="u-active-sp" src="<?php echo get_template_directory_uri(); ?>/img/mv-img__sp.jpg" alt="金属の歯車の画像">
            </div>
            <div class="l-mv__content-area p-mv__content-area">
                <p class="p-mv__read-main">戸車国内シェア<span class="p-mv__read-main__span">No.1</span></p>
                <p class="p-mv__read-sub l-mv__read-sub c-animate-title">戸車と共に歩む、未来への回転</p>
                <a href="#" class="p-mv__contact u-hidden-pc c-btn l-mv__contact">お問い合わせ</a>
            </div>
            <!-- /.p-mv__content-area -->
        </div>
        <!-- / .l-mv -->
    </div>
    <!-- /.l-bg-wrapper -->
    <main>
        <section class="l-news">
            <div class="l-news__title">
                <h2 class="c-section__title">News</h2>
                <span class="c-section__title__sub">お知らせ</span>
            </div>
            <div class="p-news__index">
                <?php
                    $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                    );
                    $new_posts = new WP_Query($args);
                ?>
                <?php if ($new_posts->have_posts()) : while ( $new_posts->have_posts()) : $new_posts->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="p-news__item">
                        <time class="p-news__index-date"><?php echo get_the_date(); ?></time>
                        <p class="p-news__index-title"><?php the_title(); ?></p>
                    </a>
                <?php endwhile; wp_reset_postdata(); endif; ?>

                <div class="p-news__index-footer">
					<a href="<?php echo esc_url(home_url('/news')); ?>"  class="p-news__view-more c-btn-view-more">
							<span>view&nbsp;more</span>
					</a>
                </div>
            </div>
        </section>
        <!-- /.l-news -->
        <section class="l-about">
            <div class="l-about__inner p-about">
                <div class="p-about__items-flex">
                    <div class="p-about__item-text">
                        <h2 class="c-section__title--rev">About</h2>
                        <span class="c-section__title__sub--rev">宅研販売について</span>
                        <p class="p-about__lead">戸車国内シェアNo.1</p>
                        <p class="p-about__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="l-about__btnArea">
                            <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-about__btn c-btn-view-more--rev">
                                <span>view&nbsp;more</span>
                            </a>
                        </div>
                    </div>
                    <!-- /.p-about__item-text -->
                    <div class="p-about__item-img">
                        <div class="p-about__img-wrapper">
                            <div class="p-about__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- /.p-about__item-img -->
                </div>
            </div>
            <!-- /.l-about__inner -->
        </section>
        <!-- /.l-about -->
        <section class="l-products">
            <div class="l-products__inner">
                <div class="l-products__title">
                    <h2 class="c-section__title">Products</h2>
                    <span class="c-section__title__sub">製品紹介</span>
                </div>
                <div class="p-products__index">
                    <div class="p-products__items">
                        <a href="<?php echo esc_url(home_url('/genre/door')); ?>" class="p-products__item">
                            <div class="p-products__head">
                                <div class="p-products__title">扉関連機器</div>
                            </div>
                            <div class="p-products__body">
                                <div class="p-products__text">テキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキスト</div>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(home_url('/genre/security')); ?>" class="p-products__item">
                            <div class="p-products__head">
                                <div class="p-products__title">防犯機器</div>
                            </div>
                            <div class="p-products__body">
                                <div class="p-products__text">テキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキスト</div>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(home_url('/genre/oem')); ?>" class="p-products__item">
                            <div class="p-products__head">
                                <div class="p-products__title">OEM製品</div>
                            </div>
                            <div class="p-products__body">
                                <div class="p-products__text">テキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキスト</div>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(home_url('/genre/medical')); ?>" class="p-products__item">
                            <div class="p-products__head">
                                <div class="p-products__title">医療機器</div>
                            </div>
                            <div class="p-products__body">
                                <div class="p-products__text">テキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキスト</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-products__index-footer">
					<a href="<?php echo esc_url(home_url('/products')); ?>" class="p-products__view-more c-btn-view-more">
							<span>view&nbsp;more</span>
					</a>
                </div>
            </div>
        </section>
        <!-- /.l-products -->
        <section class="l-blog">
            <div class="l-inner">
                <h2 class="c-section__title">Blog</h2>
                <span class="c-section__title__sub">ブログ</span>
            </div>
            <!-- /.l-inenr -->
            <!-- Slider main container -->
            <div class="l-blog__swiper l-inner--swiper">
                <!-- /.l-inner--swiper -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <ul class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '-1',
                            'paged' => get_query_var('paged', 1)  //投稿の2ページ以降が1ページ目のものと同じ表示ではなくなる
                        );
                        $the_query = new WP_Query($args);
                        ?>
                    <?php if ($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <!-- Slides -->
                        <li class="swiper-slide">
                            <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-card">
                                <div class="p-card__head">
                                    <?php if(has_post_thumbnail()):?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="no-image">
                                    <?php endif; ?>
                                </div>

                                <div class="p-card__body">
                                    <p class="p-card__title"><?php the_title(); ?></p>
                                    <div class="p-card__description"><?php the_excerpt(15); ?></div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; wp_reset_postdata(); endif; ?>


                        <!-- <li class="swiper-slide">
                            <a class="p-card">
                                <div class="p-card__head">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-card-img2.png" alt="card">
                                </div>
                                <div class="p-card__body">
                                    <p class="p-card__title">タイトル</p>
                                    <p class="p-card__description">
                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキステキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス…
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="p-card">
                                <div class="p-card__head">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-card-img3.png" alt="card">
                                </div>
                                <div class="p-card__body">
                                    <p class="p-card__title">タイトル</p>
                                    <p class="p-card__description">
                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキステキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス…
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="p-card">
                                <div class="p-card__head">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/mv-img__sp.jpg" alt="card">
                                </div>
                                <div class="p-card__body">
                                    <p class="p-card__title">タイトル</p>
                                    <p class="p-card__description">
                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキステキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス…
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide">
                            <a class="p-card">
                                <div class="p-card__head">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/mv-img__sp.jpg" alt="card">
                                </div>
                                <div class="p-card__body">
                                    <p class="p-card__title">タイトル</p>
                                    <p class="p-card__description">
                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキステキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス…
                                    </p>
                                </div>
                            </a>
                        </li> -->

                    </ul>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="l-inner l-blog__btnArea">
                <a href="<?php echo esc_url(home_url('/category/blog')); ?>" class="l-blog__btn p-blog__btn c-btn-view-more">
                    <span>view&nbsp;more</span>
                </a>
            </div>
            <!-- /.l-inenr -->
        </section>
        <!-- /.l-blog -->

        <?php get_footer(); ?>
