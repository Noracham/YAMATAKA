<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header_img"><a href="<?php echo esc_url(home_url()); ?>"></a><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="logo"></div>
        <nav class="header_nav">
            <div class="header_nav_sp"><span></span><span></span><span></span></div>
            <ul class="header_nav_list">
                <li><a href="<?php echo esc_url(home_url('/hospital/')); ?>">病院案内</a></li>
                <li><a href="<?php echo esc_url(home_url('/department/')); ?>">診療科案内</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">お知らせ</a></li>
                <li><a href="#access">アクセス</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
        <div class="sp_menu flex_center">
            <ul>
                <li><a class="trigger" href="<?php echo esc_url(home_url("/hospital/")); ?>">病院案内</a></li>
                <li><a class="trigger" href="<?php echo esc_url(home_url("/department/")); ?>">診療科案内</a></li>
                <li><a class="trigger" href="<?php echo esc_url(home_url("/category/news")); ?>">お知らせ</a></li>
                <li><a class="trigger" href="<?php echo esc_url(home_url()); ?>#access">アクセス</a></li>
                <li><a class="trigger" href="<?php echo esc_url(home_url("/contact/")); ?>">お問い合わせ</a></li>
            </ul>
        </div>
    </header>
    <section class="<?php echo $heroClass = is_home() || is_front_page() ? 'hero' : 'sub_hero' ?>">
        <?php if (is_home() || is_front_page()) :; ?>
            <div class="hero_txt">
                <h1 class="eachTextAnime">いつでもそばに<br>いつでもあなたの<br>健康を考えます</h1>
            </div>
            <div class="hero_info flex_column">
                <div class="hero_info_time">
                    <p>外来受付</p>
                    <div class="hero_info_time_txt">
                        <p>午前<span>8時</span>から午前<span>11時15分</span></p>
                    </div>
                </div>
                <div class="hero_info_time">
                    <p>診療開始</p>
                    <div class="hero_info_time_txt">
                        <p>午前<span>9時</span>より順次</p>
                    </div>
                </div>
                <div class="hero_info_week">
                    <div class="on">月</div>
                    <div class="on">火</div>
                    <div class="on">水</div>
                    <div class="on">木</div>
                    <div class="on">金</div>
                    <div class="off">土</div>
                    <div class="off">日</div>
                    <div class="off">祝</div>
                </div>
                <div class="hero_info_tel">
                    <p>お問い合わせはこちら</p>
                    <div class="hero_info_tel_num flex_center_column">
                        <div class="flex">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/Icon feather-phone-call.svg')); ?>" alt="TEL">
                            <p>0577-01-0000</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php else :; ?>
            <section class="subpage_hero flex_center">
                <h1><?php is_category() ? $echo = "お知らせ" : $echo = the_title();
                    echo $echo; ?></h1>
            </section>
        <?php endif; ?>
    </section>