
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<!-- OGP宣言 -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"><!-- 電話のリンクをしない設定 -->

	<meta property="og:title" content="Takken"><!-- OGPタイトル -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://wp-1.naoki126-web.com/"><!-- OGPサイトURL -->
	<meta property="og:image" content="http://wp-1.naoki126-web.com/wp-content/uploads/2023/04/mv-img__pc-scaled.jpg"><!-- OGPサムネイル -->
	<meta property="og:site_name" content="Takken"><!-- OGPサイトネーム -->
	<meta property="og:description" content="宅研販売ホームページ"><!-- OGPサイトの概要欄 -->
	<meta name="twitter:card" content="summary_large_image"><!-- OGP Twitterカード -->
	<meta name="twitter:site" content="@naoking_web" /><!-- OGP Twitter site -->
	<!-- fontawesome -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2"> -->
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
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
	<!-- CSS -->
	<!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
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
                    <a href="<?php echo esc_url(home_url()); ?>" class="p-header__logo__link">
                        <img src="<?php echo get_template_directory_uri('/home'); ?>/img/logo.svg" alt="Takken&nbsp;Hanbai">
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
                            <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-header__item__link">
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
                        <li class="p-header__item--contact c-btn--Wh2">
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
                            <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">会社案内</a></li>
                            <li><a href="<?php echo esc_url(home_url('/products')); ?>">製品紹介</a></li>
                            <li><a href="<?php echo esc_url(home_url('/category/blog')); ?>">ブログ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="p-drawer__circle-bg"></div>
                <!-- / drawer実装 -->
            </div>
            <!-- / .p-header -->
        </header>
        <!-- /.l-header -->
