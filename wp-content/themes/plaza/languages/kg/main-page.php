<?php

get_header('kg');

global $post;
echo get_post($post)->post_content;

get_footer('kg');

