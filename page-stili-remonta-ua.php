
<?php
/*
Template Name: Стили ремонта ua

*/

// … остальной код шаблона
?>
<?php get_header('ua'); ?>
 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps-ua' ); ?>
	       <!-- вывод секции test -->
    <?php echo get_template_part( 'template-parts/content', 'test-ua' ); ?>

				<!-- Section Cover -->

<div class="section-cover section-cover_fourth">
  <span></span>
  <div class="section-cover__inner">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <span></span>
</div>

		<!-- Header -->

		<header class="header header_anim">
			<div class="header__cover">
				<span></span>
				<div class="header__cover-inner">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<span></span>
			</div>

<div class="section-cover section-cover_fifth">
	<span></span>
	<div class="section-cover__inner">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<span></span>
</div>

			<div class="header__inner nav-add-padding">
				<div class="header__lines">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="header__body">
					<div class="header__body-wrap">
						<div class="header__title">
							<h2>СТИЛІ</h2>
							<h3>СТИЛІ РЕМОНТУ</h3>
						</div>
						<p class="header__text">Виберіть один із 4-х стилів інтер'єру та отримайте профільний підбір матеріалів</p>
						<div class="header__btn">
							<a href="#stili" class="btn btn_big-fill">ВИБРАТИ СТИЛЬ</a>
						</div>
					</div>
				</div>

				<div class="header__anim-background">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/stili-remonta2.jpg" alt="2" class="ib_use">
							</div>

							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/stili-remonta1.jpg" alt="1" class="ib_use">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Menu -->
	
			<div class="menus">
				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="https://forroom.com.ua/packages/"><span class="menu__icon"><span class="iconify" data-icon="la:building"></span></span>ПАКЕТИ РЕМОНТУ</a></li>
						<li><a href="https://forroom.com.ua/vtorichka/"><span class="menu__icon"><span class="iconify" data-icon="la:tools"></span></span>ВТОРИННОГО ЖИТЛА</a></li>
						<li><a href="https://forroom.com.ua/arenda/"><span class="menu__icon"><span class="iconify" data-icon="la:handshake-solid"></span></span>ПІД ЗДАЧУ</a></li>
						<li><a href="https://forroom.com.ua/interior/"><span class="menu__icon"><span class="iconify" data-icon="la:bed"></span></span>ДИЗАЙН ІНТЕР'ЄРУ</a></li>
					</ul>
				</div>
	
				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="https://forroom.com.ua/packages/"><span class="menu__icon"><span class="iconify" data-icon="la:building"></span></span>ПАКЕТИ <br>РЕМОНТУ</a></li>
						<li><a href="https://forroom.com.ua/vtorichka/"><span class="menu__icon"><span class="iconify" data-icon="la:tools"></span></span>ВТОРИННОГО<br> ЖИТЛА</a></li>
						<li><a href="https://forroom.com.ua/arenda/"><span class="menu__icon"><span class="iconify" data-icon="la:handshake-solid"></span></span>ПІД<br> ЗДАЧУ</a></li>
						<li><a href="https://forroom.com.ua/interior/"><span class="menu__icon"><span class="iconify" data-icon="la:bed"></span></span>ДИЗАЙН<br> ІНТЕР'ЄРУ</a></li>
					</ul>
				</div>
			</div>
		</header>

		<!-- Stili -->

		<section class="stili stili_stili" id="stili">
			<div class="lines anim-item lines_two-space-between">
				<span></span>
				<span></span>
			</div>

			<div class="stili__inner">
				<div class="title anim-item">
					<h2 class="title__title">СТИЛІ РЕМОНТУ</h2>
					<span class="title__text">СТИЛІ РЕМОНТУ</span>
				</div>

				<div class="stili__slides anim-item" data-start-from="2">
					<div class="stili__slide">
						<div class="stili__slide-inner">
							<div class="stili__slide-wrap">
								<div class="stili__slide-content">
									<div class="stili__slide-img ib">
										<img src="<?php echo get_template_directory_uri() ?>/source/new-img/packages/stili-minim.jpg" alt="minimalizm" class="ib_use">
									</div>

									<div class="stili__slide-body">
										<p class="stili__slide-title">Мінімалізм/Функціоналізм</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Стримане висвітлення</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Прихована меблева фурнітура</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Рівні площини стін, стель та підлог</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Стеля без декоративних елементів</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Оздоблення стін - під натуральний камінь, дерево, декоративну штукатурку</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Простір мінімалізму естетичний і без зайвих деталей</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Білий колір стін, великі дзеркальні поверхні</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Минимализм/Функционализм ua" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">ВИБРАТИ ПАКЕТ</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>Мінімалізм</h2>
							<p>Мінімалізм</p>
						</div>
					</div>

					<div class="stili__slide">
						<div class="stili__slide-inner">
							<div class="stili__slide-wrap">
								<div class="stili__slide-content">
									<div class="stili__slide-img ib">
										<img src="<?php echo get_template_directory_uri() ?>/source/new-img/packages/stili-loft.jpg" alt="loft" class="ib_use">
									</div>

									<div class="stili__slide-body">
										<p class="stili__slide-title">Лофт/Бруталізм</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Бетонні стіни, груба штукатурка, необроблене дерево</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Жалюзі з дерева, підвісні світильники та плафони</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>ММ'які меблі у яскравому виконанні</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>В інтер'єрі присутні почуття міри та рівноваги</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Освітлення багаторівневе, застосовується бра, торшери у сучасному стилі</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Лофт/Брутализм ua" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">ВИБРАТИ ПАКЕТ</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>Лофт</h2>
							<p>Лофт</p>
						</div>
					</div>

					<div class="stili__slide">
						<div class="stili__slide-inner">
							<div class="stili__slide-wrap">
								<div class="stili__slide-content">
									<div class="stili__slide-img ib">
										<img src="<?php echo get_template_directory_uri() ?>/source/new-img/packages/stili-contemp.jpg" alt="1" class="ib_use">
									</div>

									<div class="stili__slide-body">
										<p class="stili__slide-title">Сучасний/Контемпорарі</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Мінімум перегородок і можливість використовувати одне приміщення під різні завдання</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Раціональне використання простору</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Використання меблів для зберігання речей</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Нейтральний фон стін та меблів</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Акцентні елементи</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Чітке зонування відкритого простору</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Освітлення зі скла та металу</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Современный/Контемпорари ua" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">ВИБРАТИ ПАКЕТ</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>Контемпорарі</h2>
							<p>Контемпорарі</p>
						</div>
					</div>

					<div class="stili__slide">
						<div class="stili__slide-inner">
							<div class="stili__slide-wrap">
								<div class="stili__slide-content">
									<div class="stili__slide-img ib">
										<img src="<?php echo get_template_directory_uri() ?>/source/new-img/packages/stili-eco.jpg" alt="echo" class="ib_use">
									</div>

									<div class="stili__slide-body">
										<p class="stili__slide-title">Скандинавський/Еко стиль</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Природні матеріали</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Меблі простої та правильної форми</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Стеля без декоративних елементів</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Підлоги — світле дерево</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Стіни - фарбування, декоративна штукатурка</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Велика кількість аксесуарів, декору та багато текстилю</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>В інтер'єрі широко використовуються живі рослини</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Меблі під натуральний колір дерева, ясен, дуб, тик, горіх</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Скандинавский/Эко стиль ua" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">ВИБРАТИ ПАКЕТ</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>скандинавський</h2>
							<p>скандинавський</p>
						</div>
					</div>

				
				</div>
			</div>
		</section>

		<!-- About -->

		<section class="about about_stili">
			<div class="lines anim-item lines_three-two-right-half">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="about__inner">
				<div class="about__content">
					<div class="about__body">
						<div class="about__title">
							<h2>FOUR ROOMS</h2>
							<h3>FOUR ROOMS</h3>
						</div>
						<p class="about__text">Це дизайнерський ремонт вашої квартири під ключ.</p>
						<p class="about__text">Кожен з наших пакетів ремонту можна вибрати у чотирьох представлених стилях: лофт, мінімалізм, скандинавський, сучасний.</p>
						<p class="about__text">Наші дизайнери підготували добірки шпалер, ламінату, освітлювальних приладів, дверей, поверхонь меблів та багато іншого. Всі матеріали — від провідних європейських виробників та найкращі у співвідношенні ціна-якість.</p>
						<p class="about__text">Нижче на 3D-візуалізаціях зображені приклади дизайнів інтер'єру, виконані з наших пакетних матеріалів, які можна замовити вже зараз!</p>
					</div>
				</div>

				<div class="about__image">
					<div class="about__image-body">
						<div class="about__image-wrap ib rellax">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/four-rooms.jpg" alt="four-rooms" class="ib_use">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Style -->

		<section class="style sections-animation-1">
			<div class="lines anim-item lines_three-two-right">
				<span></span>
				<span></span>
				<span></span>
			</div>

<div class="section-cover section-cover_first">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
</div>

			<div class="style__inner">
				<div class="title title_style anim-item">
					<h2 class="title__title">стиль</h2>
					<span class="title__text">ОБЕРИ СВІЙ СТИЛЬ</span>
				</div>
					<iframe style="width: 100%; height: 640px; border: none; max-width: 100%;" frameborder="0" allowfullscreen allow="xr-spatial-tracking; gyroscope; accelerometer" scrolling="no" src="https://kuula.co/share/collection/7qdxw?logo=1&info=1&fs=0&vr=0&sd=1&autorotate=0.16&thumbs=0&alpha=0.60&inst=0"></iframe>
				<!-- <iframe scrolling="no" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen="true" style="border: medium none; background-color: rgb(0, 0, 0); max-width: 100%; width: 100%;" src="https://kuula.co/share/collection/7Y2Gl?fs=1&amp;vr=0&amp;sd=1&amp;autorotate=-0.12&amp;autop=10&amp;thumbs=0&amp;inst=0&amp;info=1&amp;logo=1&amp;enablejs=1&amp;priority=1" data-gtm-yt-inspected-1_19="true" frameborder="0"></iframe> -->
			</div>
		</section>

		<!-- Order -->

		<section class="order order_stili sections-animation-2">
			<div class="lines anim-item lines_three-two-right-one-left">
				<span></span>
				<span></span>
				<span></span>
			</div>

<div class="section-cover section-cover_second">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
</div>

			<div class="order__inner">
				<div class="order__image ib">
					<img src="<?php echo get_template_directory_uri() ?>/source/new-img/stili-remonta-materials.jpg" alt="stili-remonta-materials" class="ib_use">
				</div>

				<div class="order__content">
					<div class="order__content-wrap">
						<div class="order__content-title">
							<h2>СТИЛІ</h2>
							<h3>ОТРИМАТИ ПІДБІР ФІНІШНИХ МАТЕРІАЛІВ</h3>
						</div>
						<p class="order__content-text">Матеріали підібрані відділом дизайну та постачання, найкращі за співвідношенням ціна-якість</p>
						<div class="order__list">
							<p class="order__list-title">Наші дизайнери підготували підбірку фінішних матеріалів у 4-х стилях:</p>
							<ul class="order__list-list">
								<li>лофт</li>
								<li>мінімалізм</li>
								<li>контемпорарі</li>
								<li>скандинавський</li>
							</ul>
						</div>
						<div class="order__content-btns">
							<a href="https://forroom.site/katalog" class="btn btn_big-fill">ПІДБІРКА МАТЕРІАЛІВ</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio -->

	       <!-- вывод секции portfolio -->
    <?php echo get_template_part( 'template-parts/content', 'portfolio-ua' ); ?>

 <!-- вывод секции desinger-section -->
    <?php echo get_template_part( 'template-parts/content', 'desinger-section-ua' ); ?>
		
		<?php get_footer('ua'); ?> 