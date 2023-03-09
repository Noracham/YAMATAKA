<?php wp_footer(); ?>
</body>
<footer class="footer">
    <div class="footer_logo flex_center"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="logo"></div>
    <div class="footer_info">
        <ul class="footer_info_list footer_info_department">
            <li class="head"><a href="<?php echo esc_url(home_url()); ?>">診療科案内</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">耳鼻科</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">眼科</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">内科</a></li>
        </ul>
        <ul class="footer_info_list footer_info_hospital">
            <li class="head"><a href="<?php echo esc_url(home_url()); ?>">病院案内</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">病院について</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">所属医師情報</a></li>
        </ul>
        <ul class="footer_info_list footer_info_news">
            <li class="head"><a href="<?php echo esc_url(home_url()); ?>">お知らせ</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">最新情報</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>">大切なお知らせ</a></li>
        </ul>
        <ul class="footer_info_list footer_info_other">
            <li class="head"><a href="<?php echo esc_url(home_url()); ?>">アクセス情報</a></li>
            <li class="head"><a href="<?php echo esc_url(home_url()); ?>">お問い合わせ</a></li>
        </ul>
    </div>
    <div class="footer_place">
        <p>477-0000<br>岐阜県高山市〇〇町11</p>
        <p>TEL : 0577-00-00</p>
    </div>
</footer>

</html>