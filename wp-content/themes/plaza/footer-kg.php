<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Plaza
 */

?>

<div id="bottom_menu">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="#">Магазин</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Планы</a></li>
            </ul>
        </div>
    </div>
</div>

</div> <!-- #main-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-container">
                <a href="#">
                    <span class="footer-logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo.png)"></span>
                </a>
                <p>© Plaza 2017, Бардык укуктар корголгон</p>
            </div>
            <div class="col-md-3 footer-container">
                <p>Контакты:</p>
                <span>+996 312  69-04-40</span><br>
                <span>plaza2012@mail.ru</span>
            </div>
            <div class="col-md-3 footer-container">
                <p>Адрес:</p>
                <span>Бишкек, ул. Ибраимова 115</span>
            </div>
            <div class="col-md-3 footer-container">
                <p>Мы в соц сетях:</p>
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
