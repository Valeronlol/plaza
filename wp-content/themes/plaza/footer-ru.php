</div> <!-- #main-->

<footer>

    <div id="bottom_menu">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <a href="#">
                            <img class="bottom-menu-svg" src="<?php echo TEMP_URI;?>img/svg/bag.svg"/>
                            <span>Магазин</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="bottom-menu-svg sales" src="<?php echo TEMP_URI;?>img/svg/tag.svg"/>
                            <span>Акции</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="bottom-menu-svg" src="<?php echo TEMP_URI;?>img/svg/clipboard-with-a-list.svg"/>
                            <span>Услуги</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="bottom-menu-svg" src="<?php echo TEMP_URI;?>img/svg/speech-bubble.svg"/>
                            <span>Новости</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="bottom-menu-svg" src="<?php echo TEMP_URI;?>img/svg/plan.svg"/>
                            <span>Планы</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-container">
                <a href="#">
                    <span class="footer-logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo.png)"></span>
                </a>
                <p>© Plaza 2017, Все права защищены</p>
            </div>
            <div class="col-md-3 footer-container">
                <p>Контакты:</p>
                <span>+996 312  69-04-40</span><br>
                <a class="mailto" href="mailto:plaza2012@mail.ru">plaza2012@mail.ru</a>
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
