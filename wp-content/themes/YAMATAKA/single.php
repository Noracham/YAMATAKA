<?php get_header(); ?>
<section class="article wrapper">
    <div class="article_content inner">
        <div class="article_content_head">
            <div class="article_content_head_top">
                <span><?php the_time('Y/m/d'); ?></span><span><?php the_field('newsTag'); ?></span>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
        <p class="article_content_main"><?php the_field('newsContent'); ?></p>
    </div>
</section>
<div class="single_pagination">
    <div class="single_pagination_prev single_pagination_link flex_center">
        <?php previous_post_link('%link', '前へ', true); ?>
    </div>
    <div class="single_pagination_back flex_center"><a href="<?php echo esc_url(home_url('/category/news')); ?>">戻る</a></div>
    <div class="single_pagination_next single_pagination_link flex_center">
        <?php next_post_link('%link', '次へ', true); ?>
    </div>
</div>
<?php get_footer(); ?>