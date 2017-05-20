<?php
define('TEMP_DIR', get_template_directory(). '/');
define('TEMP_URI', get_template_directory_uri(). '/');

/**
 * Wordpress filters config
 */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('comment_text', 'wpautop');
remove_filter('the_content', 'capital_P_dangit',11);
remove_filter('the_excerpt', 'capital_P_dangit',11);
remove_filter('comment_text', 'capital_P_dangit',31);
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
add_filter('tiny_mce_before_init', function($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
});
add_theme_support( 'post-thumbnails' );
show_admin_bar(false); // Show admin menu bar true/false

/**
 * Include template by current lang
 * @temp template path - string
 */
add_filter('template_include', function ($temp)
{
    $lang = getPlazaLocale();
    $dir = TEMP_DIR . 'languages';
    $file = pathinfo($temp)['basename'];

    if (is_page()) {
        return "$dir/$lang/$file";
    } elseif (is_single()) {
        return "$dir/$lang/single.php";
    } elseif (is_category()) {
        if ( $delim = strstr($file, '-') ){
            return "$dir/$lang/category$delim";
        }
        return "$dir/$lang/category.php";
    } elseif (is_404()) {
        return "$dir/$lang/404.php";
    }

    return $temp;
});

/**
 * return plaza locale
 */
function getPlazaLocale()
{
    switch (get_locale()){
        case ('en_GB'):
            return 'en';
        case ('ru_RU'):
            return 'ru';
        default:
            return 'kg';
    }
}

/**
 * set excerpt length
 */
add_filter('excerpt_length', function() {
    return 7;
});

/**
 * set excerpt more
 */
add_filter('excerpt_more', function()
{
    global $post;
    $link = get_permalink($post->ID);
    $phrase = '';

    switch (getPlazaLocale()){
        case ('en'): $phrase = 'Read more'; break;
        case ('ru'): $phrase = 'Читать далее'; break;
        case ('kg'): $phrase = 'Көбүрөөк оку';
    }

    return "<a href='$link'> $phrase...</a>";
});

/**
 * Custom search form
 */
add_filter( 'get_search_form', function()
{
    $locale = getPlazaLocale();
    ob_start();
    require "languages/$locale/searchform.php";
    return ob_get_clean();
} );