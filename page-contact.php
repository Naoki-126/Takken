<?php
    /*
    Template Name: Contact
    */
?>

<?php get_header(); ?>

<div class="l-mv p-mv">
            <div class="p-mv__bg--child">
            </div>
            <div class="l-mv__content-area--child p-mv__content-area">
                <p class="p-mv__read-main--child">Contact</p>
                <p class="p-mv__read-sub--child l-mv__read-sub--child">お問い合わせ</p>
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
    <!-- /.l-breadcrumb -->
    <?php endif; ?>

    <div class="p-contactPage l-contactPage">
        <div class="l-inner__contactPage">
            <p class="p-contactPage__read l-contactPage__read">
                当社へのお問い合わせは<br class="u-active-sp">下記フォームよりお願いいたします。
            </p>
            <form class="p-contactPage__form  method=" post">
                <dl class="p-contactPage__contents">
                    <div class="p-contactPage__item">
                        <dt class="p-contactPage__dt">
                            <p class="p-contactPage__dt__title">
                                お名前
                            </p>
                            <span class="p-contactPage__dt__inline">必須</span>
                        </dt>
                        <dd class="p-contactPage__dd">
                            <input type="text" placeholder="山田太郎">
                        </dd>
                    </div>
                    <div class="p-contactPage__item">
                        <dt class="p-contactPage__dt">
                            <p class="p-contactPage__dt__title">
                                貴社名
                            </p>
                        </dt>
                        <dd class="p-contactPage__dd">
                            <input type="text" placeholder="株式会社宅研販売">
                        </dd>
                    </div>
                    <div class="p-contactPage__item">
                        <dt class="p-contactPage__dt">
                            <p class="p-contactPage__dt__title">
                                メールアドレス
                            </p>
                            <span class="p-contactPage__dt__inline">必須</span>
                        </dt>
                        <dd class="p-contactPage__dd">
                            <input type="email" placeholder="abc@defg.com">
                        </dd>
                    </div>
                    <div class="p-contactPage__item">
                        <dt class="p-contactPage__dt">
                            <p class="p-contactPage__dt__title">
                                メールアドレス（確認用）
                            </p>
                            <span class="p-contactPage__dt__inline">必須</span>
                        </dt>
                        <dd class="p-contactPage__dd">
                            <input type="email" placeholder="abc@defg.com">
                        </dd>
                    </div>
                    <div class="p-contactPage__item">
                        <dt class="p-contactPage__dt">
                            <p class="p-contactPage__dt__title">電話番号</p>
                        </dt>
                        <dd class="p-contactPage__dd">
                            <input type="tel" placeholder="123-456-7890">
                        </dd>
                    </div>
                    <div class="p-contactPage__item">
                        <dt class="p-contactPage__dt">
                            <p class="p-contactPage__dt__title">お問い合わせ内容</p>
                            <span class="p-contactPage__dt__inline">必須</span>
                        </dt>
                        <dd class="p-contactPage__dd">
                            <textarea placeholder="お問い合わせ内容を入力してください"></textarea>
                        </dd>
                    </div>
                    <div class="p-contactPage__footer">
                        <p class="p-contactPage__text">
                            ※「個人情報の取り扱いに同意する。」にチェックの上、<br>
                            「確認画面へ」ボタンを押してください。
                        </p>
                        <p class="p-contactPage__footer-privacy">
                            <input class="p-contactPage__checkbox" type="checkbox" id="praivate">
                            <label class="p-contactPage__privacy" for="praivate">
                            </label>
                            <a href="./contact-thanks.html" class="p-contactPage__link" target="_blank">個人情報の取り扱い</a>に同意します。
                        </p>
                    </div>
                </dl>
                <div class="p-contactPage__form-submit">
                    <button class="p-contactPage__submit" type="submit">確認画面へ</button>
                </div>
            </form>
        </div>
        <!-- /.l-inner -->
    </div>

<?php get_footer(); ?>
