<?php
/*
Template Name: Plan page
*/

get_header('en');
?>

<div class="container">
    <div class="row">
        <?php echo do_shortcode( '[drawattention ID="'.get_the_id().'"]' ); ;?>
    </div>
</div>

<?php get_footer('en');