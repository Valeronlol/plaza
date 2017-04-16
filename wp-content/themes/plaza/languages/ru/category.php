<?php
/**
 * Shop page categories
 */
$category_id = get_the_category()[0]->cat_ID;
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$the_query = new WP_Query( array(
    'post_type' => 'post',
    'post_status'=> 'publish',
    'posts_per_page' => 2,
    'cat' => $category_id,
    'numberposts' => 0,
    'order'    => 'ASC',
    'paged' => $paged
));

/**
 * get the parent categories
 */
$categories = get_categories();
foreach ($categories as &$category){
    if($category->category_parent !== 0)
        unset($category);
}
?>
<?php get_header('ru');?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="blog-page col-md-12">
                    <div class="col-md-3 col-sm-12 blog-left-menu">
                        <ul>
                            <?php foreach (get_categories() as $category) :?>
                                <li>
                                    <a
                                            href="<?php echo get_category_link($category) ;?>"
                                            class="<?php echo ($category_id === $category->cat_ID ? 'active' : '');?>"
                                    ><?php echo $category->cat_name ;?>
                                    </a>
                                </li>
                            <?php endforeach ;?>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-12 blog-right-menu">
                        <?php while ($the_query-> have_posts()) : $the_query->the_post(); ?>
                            <?php
                            $thumbnail = get_the_post_thumbnail_url($post->ID);
                            if ( !$thumbnail ) $thumbnail = site_url() . '/wp-content/themes/plaza/img/default_page_item.jpg';
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 shops">
                                <div class="blog-news">
                                    <div class="blog-right-menu-img" style="background-image: url(<?php echo $thumbnail ;?>)"></div>
                                    <div class="col-md-12">
                                        <a href="<?php echo get_permalink($post->ID) ;?>"><h2><?php the_title() ;?></h2></a>
                                        <p><?php echo $post->post_content ;?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata();?>
                    </div>
                </div>

                <div class="container breadcrumbs">
                    <div class="row">
                        <div id="pagi">
                            <?php echo get_the_posts_pagination([
                                'prev_text'    => __('« Предыдущая'),
                                'next_text'    => __('Следующая »'),
                                'screen_reader_text' => __( ' ' ),
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer('ru');?>