<?php get_header(); ?>
<section class="newspage wrapper">
    <div class="newspage_content inner">
        <div class="newspage_content_menu">
            <a href="<?php echo esc_url(home_url('/category/news')); ?>" class="newspage_content_menu_new none">新着情報</a>
            <a href="<?php echo esc_url(home_url('/category/important')); ?>" class="newspage_content_menu_important">大切なお知らせ</a>
        </div>
        <div class="newspage_content_main">
            <ul class="newspage_content_main_list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"></a><span class="news_list_date"><?php the_time('Y/m/d'); ?></span><span class="news_list_tag"><?php the_field('newsTag'); ?></span>
                            <p class="news_list_txt"><?php the_title(); ?></p>
                        </li>
                <?php
                    endwhile;
                endif; ?>
            </ul>
            <?php
            $args = array(
                'mid_size' => 1,
                'prev_text' => '&lt;',
                'next_text' => '&gt;',
                'screen_reader_text' => ' ',
            );
            the_posts_pagination($args);
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>