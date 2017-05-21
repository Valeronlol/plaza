<?php
/*
Template Name: Plan page
*/

get_header('en');
?>
<style>
    .hotspots-interaction .hotspots-placeholder {
        display: none !important;
    }
    #floor_map {
        width: 100%;
    }
    .map-wrap {
        position: relative;
    }
    #text {
        position: absolute;
    }
    .plan-wrap {
        margin-top: 50px;
        margin-bottom: 75px;
    }
</style>
<div class="container plan-wrap">
    <div class="row map-wrap">

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 map">
            <div id="floor_map">
                <?php echo do_shortcode( '[drawattention ID="'.get_the_id().'"]' );?>
            </div>

        </div>
        <div id="text" class="col-xs-12 col-sm-12 col-md-4 col-md-offset-8 col-lg-4 col-md-offset-8">
            <div data-href="f1" class="info_cont">
                <h2>1 этаж</h2>
                <p>На первом этаже нашего торгового центра имеется все необходимое для вас чтобы быстро и эффективно найди и приобрести что вам нужно и так же получить консультацию и помощь в сотовой связи. Так же посетители центра могут провести время сидя на наших удобных островках для отдыха, разменивать валюты и снять в аренду детские машинки на третье этаже.</p>
            </div>
            <div data-href="f2" class="info_cont">
                <h2>1 этаж</h2>
                <p>На первом этаже нашего торгового центра имеется все необходимое для вас чтобы быстро и эффективно найди и приобрести что вам нужно и так же получить консультацию и помощь в сотовой связи. Так же посетители центра могут провести время сидя на наших удобных островках для отдыха, разменивать валюты и снять в аренду детские машинки на третье этаже.</p>
            </div>
            <div class="but_cont">
                <span class="floors-button active" data-href="f1">1 этаж</span>
                <span class="floors-button" data-href="f2">2 этаж</span>
            </div>
        </div>
    </div>
</div>

<?php get_footer('en');