	<!-- Footer -->

		<footer class="footer footer_stili">
			<div class="footer__top">
				<div class="footer__menus">
																		<?php wp_nav_menu( [
	'theme_location'  => 'footer_menu_left',
	'container'       => false,
	'menu_class'      => 'footer__menu',
	'menu_id'         => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'walker'          => new bootstrap_4_walker_nav_menu(),
] ); ?>
			
																		<?php wp_nav_menu( [
	'theme_location'  => 'footer_menu_right',
	'container'       => false,
	'menu_class'      => 'footer__menu',
	'menu_id'         => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'walker'          => new bootstrap_4_walker_nav_menu(),
] ); ?>
				</div>

				<a href="https://forroom.com.ua/ru/new-home/" class="footer__logo">
					<img src="<?php echo get_template_directory_uri() ?>/source/new-img/forroom-black.png" alt="ForFoom">
				</a>

				<div class="footer__info">
					<a href="tel:+380487955575" class="footer__phone"><span class="iconify" data-icon="ic:baseline-phone"></span> +38 (048) 795 55 75</a>
					<ul class="footer__social">
						<li><a href="https://instagram.com/forroom.com.ua?igshid=9gvn1yx7vmsc"><span class="iconify" data-icon="bx:bxl-instagram-alt"></span></a></li>
						<li><a href="https://facebook.com/forroom.com.ua/"><span class="iconify" data-icon="ic:baseline-facebook"></span></a></li>
						<li><a href="http://t.me/ForRoomservice_bot"><span class="iconify" data-icon="ic:baseline-telegram"></span></a></li>
						<li><a href="https://www.youtube.com/channel/UCw_ZIsS18izHhArD7vI2vNQ"><span class="iconify" data-icon="entypo-social:youtube-with-circle"></span></a></li>
					</ul>
				</div>
			</div>

			<div class="footer__bottom">
				<a href="#" class="footer__policy">Политика конфиденциальности</a>
				<p class="footer__copyright">© 2022 FORROOM. Все права защищены</p>
			</div>
		</footer>
	</div>

  <?php wp_footer(); ?>
</body>
</html>