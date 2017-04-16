<?php
get_header('en');

global $post;
echo get_post($post)->post_content;
echo 'RU';

get_footer('en');
