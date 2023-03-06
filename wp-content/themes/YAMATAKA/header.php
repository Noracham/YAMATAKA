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