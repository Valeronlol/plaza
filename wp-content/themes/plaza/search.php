<?php
get_header(getPlazaLocale());

$the_query = new WP_Query([
    's' => get_search_query()
]);

if ( $the_query->have_posts() ) {
    _e("<h2 style='font-weight:bold;color:#000;margin-top: 100'>Search Results for: ".get_query_var('s')."</h2>");
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
    }
    }else{
    ?>

    <div class="alert alert-info">
    <?php
        switch (getPlazaLocale()){
            case('en'): echo '<h2 style=\'font-weight:bold;color:#000\'>Nothing Found</h2><p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>'; break;
            case('kg'): echo '<p><h2 style=\'font-weight:bold;color:#000\'>Эч нерсе табылган жок</h2>Кечиресиз, бирок эч нерсе издөө критерийлерине дал келген жок. Сураныч, Башка ачкыч сөздөрү менен кайта аракет.</p>'; break;
            case('ru'): echo '<p><h2 style=\'font-weight:bold;color:#000\'>По вашему запросу ничего не найдено</h2>Увы, ничего не найдено, попробуйте поискать по другим ключевым словам.</p>'; break;
        }
    ;?>
    </div>
<?php } ?>

<?php get_footer(getPlazaLocale()); ?>