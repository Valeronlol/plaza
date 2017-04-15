</div> <!-- #main-->

<footer class="<?php
if (!empty(get_post_custom()['class'])){
    foreach (get_post_custom()['class'] as $class)
        echo "$class ";
}
;?>">
    <div id="bottom_menu">
        <div class="container">
            <div class="row">
                <?php wp_nav_menu( array('menu' => 'bottom_menu_en' )); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3  col-sm-12 footer-container">
                <a href="#">
                    <span class="footer-logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo.png)"></span>
                </a>
                <p>© Plaza 2017, All rights reserved</p>
            </div>
            <div class="col-md-3 col-sm-4 footer-container">
                <p>Contacts:</p>
                <span>+996 312  69-04-40</span><br>
                <a class="mailto" href="mailto:plaza2012@mail.ru">plaza2012@mail.ru</a>
            </div>
            <div class="col-md-3 col-sm-4 footer-container">
                <p>Adres:</p>
                <span>Bishkek, <br> Ibraimova street 115</span>
            </div>
            <div class="col-md-3 col-sm-4 footer-container">
                <p>Social networks:</p>
                <span class="social-wrap">
					<a href="#">
						<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
					</a>
				</span>
                <span class="social-wrap">
					<a href="#">
						<i class="fa fa-2x fa-instagram" aria-hidden="true"></i>
					</a>
				</span>
            </div>
        </div>
    </div>
</footer>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.min.css">
<script src="<?php echo get_template_directory_uri();?>/js/scripts.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
