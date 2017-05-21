<?php
/*
Template Name: Plan page
*/

get_header(getPlazaLocale());
?>

    <div class="container plan-wrap">
        <div class="row map-wrap">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 map">
                <div id="floor_map">
                    <?php echo do_shortcode( '[drawattention ID="'.get_the_id().'"]' );?>
                </div>
            </div>
            <?php include_once get_template_directory() . "/lift-template.php"; ?>
        </div>
    </div>

<?php get_footer(getPlazaLocale());