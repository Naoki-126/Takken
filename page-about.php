<?php
    /*
    Template Name: About
    */
?>

<?php get_header(); ?>

<div class="l-mv p-mv">
            <div class="p-mv__bg--child">
            </div>
            <div class="l-mv__content-area--child p-mv__content-area">
                <p class="p-mv__read-main--child">About</p>
                <p class="p-mv__read-sub--child l-mv__read-sub--child">宅研販売について</p>
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

    <!-- ここからメイン -->
    <main>
        <div class="l-aboutPage__inner">
            <div class="l-aboutPage__container">
                <div class="p-aboutPage__table">
                    <table class="p-aboutPage__info">
                        <tr>
                            <th class="p-aboutPage__info-title">会社名</th>
                            <td class="p-aboutPage__info-text">株式会社宅研販売</td>
                        </tr>
                        <tr>
                            <th class="p-aboutPage__info-title">代表取締役</th>
                            <td class="p-aboutPage__info-text">宅研  販売</td>
                        </tr>
                        <tr>
                            <th class="p-aboutPage__info-title">所在地</th>
                            <td class="p-aboutPage__info-text">
                                <div class="p-aboutPage__info-address">
                                    <p>123-4567<br>
                                    東京都渋谷区千駄ヶ谷1234<br>
                                    </p>
                                    <p class="p-aboutPage__info-access">
                                        【アクセス】<br>
                                        JR山手線、中央・総武線「代々木」駅西口から徒歩7分<br>
                                        JR中央・総武線「千駄ヶ谷」駅から徒歩6分<br>
                                        都営大江戸線「国立競技場」駅A5出口から徒歩11分<br>
                                        東京メトロ副都心線「北参道」駅1番出口から徒歩6分<br>
                                    </p>
                                </div>
                                <!-- /.p-page-about__info-address -->
                                <div class="p-aboutPage__info-map p-page-about__iframe">
                                    <div class="p-aboutPage__iframe__wrap">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12963.33663721076!2d139.698507934815!3d35.68108528310746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cc0a43ae8a3%3A0xfd90ae6c3a216ecd!2z5pel5pys44CB44CSMTUxLTAwNTEg5p2x5Lqs6YO95riL6LC35Yy65Y2D6aeE44Kx6LC3!5e0!3m2!1sja!2sau!4v1680127329720!5m2!1sja!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <!-- /.p-page-about__info-map -->
                            </td>
                        </tr>
                        <tr>
                            <th class="p-aboutPage__info-title">設立</th>
                            <td class="p-aboutPage__info-text">2023年4月</td>
                        </tr>
                        <tr>
                            <th class="p-aboutPage__info-title">資本金</th>
                            <td class="p-aboutPage__info-text">10百万円</td>
                        </tr>
                        <tr>
                            <th class="p-aboutPage__info-title">連絡先</th>
                            <td class="p-aboutPage__info-text">info@takkenhanbai.co.jp</td>
                        </tr>
                    </table>
                </div>
                <!-- /.p-aboutPage__table -->
            </div>
            <!-- /.l-aboutPage__container -->
        </div>
        <!-- /.l-aboutPage__inner -->

<?php get_footer(); ?>
