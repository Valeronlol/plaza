<?php

get_header('ru');

global $post;
echo get_post($post)->post_content;

get_footer('ru');

