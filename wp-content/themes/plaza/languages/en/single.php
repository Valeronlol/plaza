<?php
    get_header('en');
    $gallery = get_field( "post_slider", $post->ID );
?>
    <?php if(empty($gallery) || !$gallery) :?>
        <p style="color:red; font-size: 25px; margin-top: 100px;">Пожалуйста, поставте хотя бы одну картинку в слайдер этой записи!</p>
    <?php endif ;?>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="shop-wrap col-md-10 col-md-offset-1">
                    <h2><?php echo get_the_category()[0]->name; ?></h2>
                    <div class="slick-single">
                        <?php foreach ($gallery as $img) :?>
                            <div class="shop-slide">
                                <div
                                    style="background-image: url(<?php echo (isset($img['sizes']['large']) ? $img['sizes']['large'] : $img['url']);?>)"
                                    class="col-md-6 shop-slide-img">
                                </div>
                                <div class="col-md-6 shop-slide-content">
                                    <h3><?php echo get_the_title(); ;?></h3>
                                    <p><?php echo get_post()->post_content;?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

get_footer('en');
