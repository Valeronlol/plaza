<?php

get_header('en');

global $post;
echo get_post($post)->post_content;
echo 'KG';

get_footer('en');
