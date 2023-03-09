<?php get_header(); ?>
<section class="know wrapper" id="test">
    <div class="know_content">
        <div class="know_content_one flex_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="know_content_one_title"><img src="<?php echo esc_url(get_theme_file_uri('img/Icon awesome-hospital-alt.svg')); ?>" alt="hospital" />
                <h2>病院を知る</h2>
            </div>
            <p>病院の詳細や案内を確認するにはこちらをご覧ください。<br>
                所属医師の情報の確認も可能です。</p>
        </div>
        <div class="know_content_one flex_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="know_content_one_title"><img src="<?php echo esc_url(get_theme_file_uri('img/Icon awesome-paper-plane.svg')); ?>" alt="hospitalcross" />
                <h2>診療科を知る</h2>
            </div>
            <p>当院の緊急休業日や最新の情報など、大切なお知らせなどを確認するにはこちらをご覧ください。</p>
        </div>
        <div class="know_content_one flex_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="know_content_one_title"><img src="<?php echo esc_url(get_theme_file_uri('img/Icon awesome-hospital-alt.svg')); ?>" alt="information" />
                <h2>情報を知る</h2>
            </div>
            <p>病院の詳細や案内を確認するにはこちらをご覧ください。<br>
                所属医師の情報の確認も可能です。</p>
        </div>
        <div class="know_content_one flex_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="know_content_one_title"><img src="<?php echo esc_url(get_theme_file_uri('img/Icon awesome-map-marker-alt.svg')); ?>" alt="access" />
                <h2>アクセスを知る</h2>
            </div>
            <p>当院の所在地から、当院への公共交通機関のルート情報などを確認するにはこちらをご覧ください。</p>
        </div>
    </div>
</section>
<section class="department wrapper">
    <div class="department_content inner">
        <div class="department_content_parts flex_center_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="department_content_parts_img">
            </div>
            <h1>耳鼻科</h1>
            <p>耳や鼻に違和感を感じたら</p>
        </div>
        <div class="department_content_parts flex_center_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="department_content_parts_img">
            </div>
            <h1>眼科</h1>
            <p>目に違和感を感じたら</p>
        </div>
        <div class="department_content_parts flex_center_column">
            <a href="<?php echo esc_url(home_url()) ?>"></a>
            <div class="department_content_parts_img">
            </div>
            <h1>内科</h1>
            <p>からだに違和感を感じたら</p>
        </div>
    </div>
</section>
<section class="news wrapper">
    <div class="news_content">
        <div class="news_content_new news_back">
            <div class="news_content_new_inner">
                <h1 class="new_title sub_title">新着情報</h1>
                <div class="newslist_wrapper">
                    <ul class="news_list">
                        <li><span class="news_list_date">2023/03/03</span><span class="news_list_tag">お知らせ</span>
                            <p class="news_list_txt">新型コロナウイルスの規制緩和について</p>
                        </li>
                        <li><span class="news_list_date">2023/03/03</span><span class="news_list_tag">お知らせ</span>
                            <p class="news_list_txt">新型コロナウイルスの規制緩和について</p>
                        </li>
                        <li><span class="news_list_date">2023/03/03</span><span class="news_list_tag">お知らせ</span>
                            <p class="news_list_txt">新型コロナウイルスの規制緩和について</p>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/category/news/')); ?>">続きを見る<img src="<?php echo esc_url(get_theme_file_uri('img/Icon material-navigate-next.svg')); ?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="access wrapper" id="access">
    <h1 class="sub_title">アクセス情報</h1>
    <div class="access_content inner">
        <div class="access_content_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.838337501293!2d137.249967315711!3d36.14614931194031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6002bb2a69bfffff%3A0x519f027d6402cd7c!2z6auY5bGx5biC5b255omA!5e0!3m2!1sja!2sjp!4v1678357975601!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="access_content_info">
            <p class="access_content_info_txt">直通バスを午前、午後<br>〇〇バス停より直通バス運行</p>
            <p class="access_content_info_txt">高山駅から車で12分<br>第一駐車場20台、臨時駐車場5台</p>
            <p class="access_content_info_txt">岐阜県高山市〇〇町11-11<br>ヤマタカ病院</p>
        </div>
    </div>
</section>
<?php get_footer(); ?>