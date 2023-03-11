<?php get_header(); ?>
<section class="careful flex_center">
    <div class="careful_content">
        <h1><img src="<?php echo esc_url(get_theme_file_uri('img/Icon metro-warning.svg')); ?>" alt="warning">ご注意ください</h1>
        <div class="careful_content_txt">
            <p>ご予約や緊急を有する場合は必ず</p>
            <p class="careful_content_txt_tel">「0577-00-0000」</p>
            <p>こちらまでお電話いただけますようよろしくお願いいたします。</p>
        </div>
    </div>
</section>
<?php the_content(); ?>
<?php get_footer(); ?>