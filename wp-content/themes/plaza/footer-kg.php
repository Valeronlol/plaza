</div> <!-- #main-->

<footer class="<?php
    if (!empty(get_post_custom()['class'])){
        foreach (get_post_custom()['class'] as $class)
            echo "$class ";
    }
    ;?>">
    <?php if (is_front_page()) :?>
        <div id="bottom_menu">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu( array('menu' => 'bottom_menu_kg', 'menu_class' => 'kg-fix' )); ?>
                </div>
            </div>
        </div>
    <?php endif ;?>
    <div class="container">
        <div class="row">
            <div class="col-md-3  col-sm-12 footer-container">
                <a href="/">
                    <span class="footer-logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo.png)"></span>
                </a>
                <p>© Plaza 2017, Бардык укуктар корголгон</p>
            </div>
            <div class="col-md-3 col-sm-4 footer-container">
                <p>Контакты:</p>
                <span>+996 312  69-04-40</span><br>
                <a class="mailto" href="mailto:plaza2012@mail.ru">plaza2012@mail.ru</a>
            </div>
            <div class="col-md-3 col-sm-4 footer-container">
                <p>Адрес:</p>
                <span>Бишкек, <br> көчөсү Ибраимова 115</span>
            </div>
            <div class="col-md-3 col-sm-4 footer-container">
                <p>Биз социалдык тармактарда:</p>
                <span class="social-wrap">
					<a href="https://www.facebook.com/pages/Dordoi-Plaza/186015214787889" target="_blank">
						<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
					</a>
				</span>
                <span class="social-wrap">
					<a href="https://www.instagram.com/explore/locations/270833495/?hl=en" target="_blank">
						<i class="fa fa-2x fa-instagram" aria-hidden="true"></i>
					</a>
				</span>
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.min.css">
<script src="<?php echo get_template_directory_uri();?>/js/scripts.min.js"></script>
<?php if(!empty(get_post_custom()['google_maps'])) :?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjSljSaKWga3w6ilMtLUOaHDh067eby1U&callback=initMap"></script>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
