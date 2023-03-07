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
        <div class="header_img"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="logo"></div>
        <nav class="header_nav">
            <ul class="header_nav_list">
                <li><a href="<?php echo esc_url(home_url('/department/')); ?>">診療科案内</a></li>
                <li><a href="<?php echo esc_url(home_url('/hospital/')); ?>">病院案内</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">お知らせ</a></li>
                <li><a href="#">アクセス</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
    <section class="<?php echo $heroClass = is_home() || is_front_page() ? 'hero' : 'sub_hero' ?>">
        <?php if (is_home() || is_front_page()) :; ?>
            <div class="hero_txt">
                <h1>いつでもそばに<br>いつでもあなたの<br>健康を考えます</h1>
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
            aa
        <?php endif; ?>
    </section>