<?php
/*
Template Name: Plan page
*/

get_header('en');
echo do_shortcode( '[drawattention ID="'.get_the_id().'"]' );
get_footer('en');
