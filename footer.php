<section class="l-contact p-contact">
            <div class="l-inner">
                <div class="p-contact__content">
                    <h2 class="p-contact__title c-animate-title l-contact__title">まずはお気軽にご相談ください</h2>
                    <div class="p-contact__btnArea">
                        <div class="p-contact__btnArea__left">
                            <span class="p-contact__read c-read">話を聞いてみたい方は</span>
                            <!-- /.p-contact__btn__read c-btn-read -->
                            <a href="#" class="c-btn c-btn--iconBl p-contact__btn">無料で相談する</a>
                        </div>
                        <!-- /.p-contact__btnArea__left -->
                        <div class="p-contact__btnArea__right">
                            <span class="p-contact__read c-read">もっと詳しく知りたい方は</span>
                            <!-- /.p-contact__btn__read c-btn-read -->
                            <a href="#" class="c-btn c-btn--iconWh p-contact__btn">資料を請求する</a>
                        </div>
                        <!-- /.p-contact__btnArea__right -->
                    </div>
                    <!-- /.p-contact__btnArea -->
                </div>
                <!-- /.p-contact__content -->
            </div>
            <!-- /.l-inner -->
        </section>
        <!-- /.l-contact -->
    </main>
    <footer class="l-footer">
        <nav class="p-footer__nav">
            <div class="l-footer__inner l-inner">
                <ul class="l-footer__nav p-footer__nav__list">
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url(home_url()); ?>" class="p-footer__item__link">
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-footer__item__link">
                            <span>お知らせ</span>
                        </a>
                    </li>
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-footer__item__link">
                            <span>会社案内</span>
                        </a>
                    </li>
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url(home_url('/products')); ?>" class="p-footer__item__link">
                            <span>製品紹介</span>
                        </a>
                    </li>
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url(home_url('/category/blog')); ?>" class="p-footer__item__link">
                            <span>ブログ</span>
                        </a>
                    </li>
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-footer__item__link">
                            <span>お問い合わせ</span>
                        </a>
                    </li>
                    <li class="p-footer__nav__item">
                        <a href="<?php echo esc_url('/privacy-policy'); ?>" class="p-footer__item__link">
                            <span>プライバシーポリシー</span>
                        </a>
                    </li>
                </ul>
                <div class="l-inner">
                    <div class="p-footer__copy">&copy; 2023 宅研販売</div>
                </div>
            </div>
        </nav>
    </footer>
    <!-- footer -->

    <div id="js-to-top-button" class="l-to-top-button"> <!-- to-topボタン設置 -->
        <a href="#" class="c-to-top-button"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!-- to-top -->

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <?php wp_footer(); ?>
</body>

</html>
