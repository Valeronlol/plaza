<?php

get_header('en');

global $post;
echo get_post($post)->post_content;

get_footer('en');
