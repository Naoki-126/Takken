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
            <?php bcn_display(); ?>
        </div>
        <!-- /.l-breadcrumb -->
        <?php endif; ?>

<?php the_field('product'); ?>
<?php the_field('category'); ?>
<?php the_field('overview'); ?>

<?php get_footer(); ?>
