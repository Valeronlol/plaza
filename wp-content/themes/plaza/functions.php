<?php

/**
 * Include template by current lang
 */
add_filter('template_include', function (){
    $lang = getPlazaLocale();
    return get_template_directory() . "/languages/$lang/main-page.php";
});

/**
 * return plaza locale
 */
function getPlazaLocale(){
    switch (get_locale()){
        case ('en_GB'):
            return 'en';
        case ('ru_RU'):
            return 'ru';
        default:
            return 'kg';
    }
}