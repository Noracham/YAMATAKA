<?php
function load_my_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('reset', "https://unpkg.com/ress/dist/ress.min.css", array("style"));

    wp_enqueue_script("jquery");
    wp_enqueue_script('script', get_template_directory_uri() . '/js/index.js', array("jquery"));
    wp_enqueue_script('inview', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js');
}
add_action('wp_enqueue_scripts', 'load_my_styles');
