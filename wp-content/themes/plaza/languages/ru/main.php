<?php get_header(getPlazaLocale()); ;?>

<div class="main-slider">
    <?php foreach ( get_field( "title", $post->ID ) as $slide) :?>
        <section class="content" style="background-image: url(<?php echo $slide['slider-image'] ;?>)">
            <div class="container">
                <div class="row">
                    <h2 class="main-content-title"><?php echo $slide['slider-title'];?></h2>
                </div>
            </div>
        </section>
    <?php endforeach ;?>
</div>

<?php get_footer(getPlazaLocale()); ;?>