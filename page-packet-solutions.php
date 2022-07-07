<?php
/*
Template Name: Пакетные решения RU

*/

// … остальной код шаблона
?>

<?php get_header(); ?>

 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps' ); ?>

  <!-- вывод секции test -->
    <?php echo get_template_part( 'template-parts/content', 'test' ); ?>

		<!-- Header -->

		<header class="header header_anim">
			<div class="header__inner nav-add-padding">
				<div class="header__lines">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="section-cover section-cover_third">
					<span></span>
					<div class="section-cover__inner">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<span></span>
				</div>

				<div class="header__body">
					<div class="header__body-wrap">
						<div class="header__title">
							<h2>пакеты ремонта</h2>
							<h3>ремонт за 60 рабочих дней по фиксированной цене</h3>
						</div>
						<p class="header__text">Каждый пакет ремонта включает в себя все работы, материалы и процессы, такие как логистика, заказ материалов, вывоз строительного мусора и т.д.</p>
						<div class="header__btn">
							<a href="#pack" class="btn btn_big-fill">выбрать пакет ремонта</a>
						</div>
					</div>
				</div>

				<div class="header__anim-background">
					<div class="header__slider">
						<div class="header__slide">
							<div class="header__cover">
								<span><span><span></span></span></span>
								<div class="header__cover-inner">
									<span><span><span></span></span></span>
									<span><span><span></span></span></span>
									<span><span><span></span></span></span>
									<span><span><span></span></span></span>
								</div>
								<span><span><span></span></span></span>
							</div>
						</div>
						<div class="header__slide">
							<div class="header__cover hide">
								<span><span><span></span></span></span>
								<div class="header__cover-inner">
									<span><span><span></span></span></span>
									<span><span><span></span></span></span>
									<span><span><span></span></span></span>
									<span><span><span></span></span></span>
								</div>
								<span><span><span></span></span></span>
							</div>
						</div>
						<div class="header__slide">
							<div class="header__cover hide">
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg.jpg" alt="2" class="ib_use"></span></span></span>
								<div class="header__cover-inner">
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg.jpg" alt="2" class="ib_use"></span></span></span>
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg.jpg" alt="2" class="ib_use"></span></span></span>
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg.jpg" alt="2" class="ib_use"></span></span></span>
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg.jpg" alt="2" class="ib_use"></span></span></span>
								</div>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg.jpg" alt="2" class="ib_use"></span></span></span>
							</div>
						</div>
						<div class="header__slide">
							<div class="header__cover hide">
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg2.jpg" alt="1" class="ib_use"></span></span></span>
								<div class="header__cover-inner">
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg2.jpg" alt="1" class="ib_use"></span></span></span>
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg2.jpg" alt="1" class="ib_use"></span></span></span>
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg2.jpg" alt="1" class="ib_use"></span></span></span>
									<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg2.jpg" alt="1" class="ib_use"></span></span></span>
								</div>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/bg2.jpg" alt="1" class="ib_use"></span></span></span>
							</div>
						</div>
				
					</div>
				</div>
			</div>
		</header>

		<!-- Stili -->

		<section id="pack" class="stili stili_novostroi" id="stili">
			<div class="lines anim-item lines_two-space-between">
				<span></span>
				<span></span>
			</div>

			<div class="stili__inner">
				<div class="title anim-item">
					<h2 class="title__title">предложения</h2>
					<span class="title__text">Ценовые предложения</span>
				</div>

				<div class="stili__slides anim-item" data-start-from="1">
					<div class="stili__slide">
						<div class="stili__slide-inner">
							<div class="stili__slide-wrap">
								<div class="stili__slide-content">
									<div class="stili__slide-img ib">
										<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/2.jpg" alt="2" class="ib_use">
									</div>

									<div class="stili__slide-body">
										<p class="stili__slide-title">Базовый</p>
										<div class="stili__slide-list">
											<p class="stili__slide-subtitle">от<span>$290</span>за м2</p>
											<ul>
												<li><span class="iconify" data-icon="la:check"></span>Максимальная предчистовая отделка</li>
												<li><span class="iconify" data-icon="la:check"></span>Черновые работы с материалами</li>
												<li><span class="iconify" data-icon="la:check"></span>Черновые работы с материалами</li>
												<li><span class="iconify" data-icon="la:check"></span>Санфаянс</li>
												<li><span class="iconify" data-icon="la:check"></span>Черновые работы с материалами</li>
												<li><span class="iconify" data-icon="la:check"></span>Двери</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<a href="#" class="btn btn_big">Подробнее</a>
									<div data-disable-test-popup data-stili-item="Базовый" data-open-popup="call-popup" class="btn btn_big-fill">Заказать</div>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>базовый</h2>
							<p>базовый</p>
						</div>
					</div>

					<div class="stili__slide">
						<div class="stili__slide-inner">
							<div class="stili__slide-wrap">
								<div class="stili__slide-content">
									<div class="stili__slide-img ib">
										<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/4.jpg" alt="4" class="ib_use">
									</div>

									<div class="stili__slide-body">
										<p class="stili__slide-title">Максимальный</p>
										<div class="stili__slide-list">
											<p class="stili__slide-subtitle">от<span>$490</span>за м2</p>
											<ul>
												<li><span class="iconify" data-icon="la:check"></span>Максимальная предчистовая отделка</li>
												<li><span class="iconify" data-icon="la:check"></span>Двери</li>
												<li><span class="iconify" data-icon="la:check"></span>Натяжные потолки</li>
												<li><span class="iconify" data-icon="la:check"></span>Санфаянс</li>
												<li><span class="iconify" data-icon="la:check"></span>Кухня под заказ</li>
												<li><span class="iconify" data-icon="la:check"></span>Дизайнерские шторы</li>
												<li><span class="iconify" data-icon="la:check"></span>Кондиционеры</li>
												<li><span class="iconify" data-icon="la:check"></span>Телевизоры</li>
												<li><span class="iconify" data-icon="la:check"></span>Холодильник</li>
												<li><span class="iconify" data-icon="la:check"></span>Варочная поверхность</li>
												<li><span class="iconify" data-icon="la:check"></span>Дополнительные опции</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<a href="#" class="btn btn_big">Подробнее</a>
									<div data-disable-test-popup data-stili-item="Максимальный" data-open-popup="call-popup" class="btn btn_big-fill">Заказать</div>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>Максимальный</h2>
							<p>Максимальный</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Offers -->

		<!-- <section class="offers offers_novostroi">
			<div class="lines anim-item lines_two-space-between">
				<span></span>
				<span></span>
			</div>

			<div class="offers__inner">
				<div class="title anim-item">
					<h2 class="title__title">предложения</h2>
					<span class="title__text">Ценовые предложения</span>
				</div>
				<div class="offers__slides anim-item" data-start-from="1">
					<div class="offers__slides-slider swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide offers__slide">
								<div class="offers__slide-name">
									<h2>Базовий</h2>
								</div>

								<div class="offers__slide-inner">
									<div class="offers__slide-wrap">
										<div class="offers__slide-content">
											<div class="offers__slide-img ib">
												<img src="img/packages/1.jpg" alt="1" class="ib_use">
											</div>
		
											<div class="offers__slide-body">
												<p class="offers__slide-title">Базовий</p>
												<div class="offers__slide-list">
													<p class="offers__slide-subtitle"><span>$150</span>за м2</p>
													<ul>
														<li><span class="iconify" data-icon="la:check"></span>Чорнові роботи та матеріали</li>
														<li><span class="iconify" data-icon="la:check"></span>Сантехніка</li>
														<li><span class="iconify" data-icon="la:check"></span>Натяжні стелі</li>
														<li><span class="iconify" data-icon="la:check"></span>Двері</li>
														<li><span class="iconify" data-icon="la:check"></span>Шпалери</li>
														<li><span class="iconify" data-icon="la:check"></span>Ламінат та плитка</li>
														<li><span class="iconify" data-icon="la:check"></span>Освітлювальні прилади</li>
													</ul>
												</div>
											</div>
										</div>
		
										<div class="offers__slide-btns">
											<a href="#" class="btn btn_big">детальніше</a>
											<div data-disable-test-popup data-stili-item="White Box" data-open-popup="call-popup" class="btn btn_big-fill">замовити</div>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide offers__slide">
								<div class="offers__slide-name">
									<h2>Максимальный</h2>
								</div>

								<div class="offers__slide-inner">
									<div class="offers__slide-wrap">
										<div class="offers__slide-content">
											<div class="offers__slide-img ib">
												<img src="img/packages/1.jpg" alt="1" class="ib_use">
											</div>
		
											<div class="offers__slide-body">
												<p class="offers__slide-title">Максимальный</p>
												<div class="offers__slide-list">
													<p class="offers__slide-subtitle">от<span>$490</span>за м2</p>
													<ul>
														<li><span class="iconify" data-icon="la:check"></span>Максимальная предчистовая отделка</li>
														<li><span class="iconify" data-icon="la:check"></span>Двери</li>
														<li><span class="iconify" data-icon="la:check"></span>Натяжные потолки</li>
														<li><span class="iconify" data-icon="la:check"></span>Санфаянс</li>
														<li><span class="iconify" data-icon="la:check"></span>Кухня под заказ</li>
														<li><span class="iconify" data-icon="la:check"></span>Дизайнерские шторы</li>
														<li><span class="iconify" data-icon="la:check"></span>Кондиционеры</li>
														<li><span class="iconify" data-icon="la:check"></span>Телевизоры</li>
														<li><span class="iconify" data-icon="la:check"></span>Холодильник</li>
														<li><span class="iconify" data-icon="la:check"></span>Варочная поверхность</li>
														<li><span class="iconify" data-icon="la:check"></span>Дополнительные опции</li>
													</ul>
												</div>
											</div>
										</div>
		
										<div class="offers__slide-btns">
											<a href="#" class="btn btn_big">детальніше</a>
											<div data-disable-test-popup data-stili-item="White Box" data-open-popup="call-popup" class="btn btn_big-fill">замовити</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="offers__slides-btns">
							<span>
								<div class="offers__slides-btn offers__slides-btn_prev swiper-button-prev"><span class="iconify" data-icon="la:chevron-left"></span></div>
								<div class="offers__slides-btn offers__slides-btn_next swiper-button-next"><span class="iconify" data-icon="la:chevron-right"></span></div>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<!-- Visual -->

		<section class="visual" data-start-position="50%">
			<div class="lines anim-item lines_two-space-between-half">
				<span></span>
				<span></span>
			</div>

			<div class="visual__inner">
				<div class="title anim-item">
					<h2 class="title__title">сравнение</h2>
					<span class="title__text">визуальное сравнение</span>
				</div>

				<div class="visual__title">
					<p>“базовый” и “максимальный”</p>
				</div>

				<div class="visual__compare">
					<div class="visual__compare-bottom">
						<div class="visual__img ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/visual/1.jpg" alt="1" class="ib_use">
						</div>
						<div class="visual__img ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/visual/2.jpg" alt="2" class="ib_use">
						</div>
						<div class="visual__img ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/visual/3.jpg" alt="3" class="ib_use">
						</div>
					</div>
					<div class="visual__line">
						<div class="visual__line-inner">
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="visual__compare-top">
						<div class="visual__compare-wrap">
							<div class="visual__img ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/visual/4.jpg" alt="4" class="ib_use">
							</div>
							<div class="visual__img ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/visual/5.jpg" alt="5" class="ib_use">
							</div>
							<div class="visual__img ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/visual/6.jpg" alt="6" class="ib_use">
							</div>
						</div>
					</div>
				</div>

				<div class="visual__text">
					<p>Потяните за ползунок для визуального сравнения пакетов</p>
				</div>
			</div>
		</section>

		<!-- About -->

		<section class="about about_task about_task-visual about_task-reverse">
			<div class="lines anim-item lines_repair">
				<span></span>
				<span></span>
			</div>

			<div class="about__inner">
				<div class="about__content">
					<div class="about__body">
						<div class="about__body-inner">
							<div class="about__title">
								<h2>предложение</h2>
								<h3>уникальное предложение</h3>
							</div>
							<p class="about__text">Мы разработали на сегодняшний день уникальное предложение по ремонту квартир для сдачи в аренду.p>
							<p class="about__text">В данном пакете использованы доступные материалы в сегодняшних реалиях и хорошо зарекомендовавшие себя за время многолетнего использования.</p>
						</div>
					</div>
				</div>

				<div class="about__image">
					<div class="about__image-body">
						<div class="about__image-wrap rellax ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/11.jpg" alt="vtorichka_about" class="ib_use">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Description -->

		<section class="description">
			<div class="lines anim-item lines_repair">
				<span></span>
				<span></span>
			</div>

			<div class="description__inner">
				<div class="description__cart">
					<div class="description__content">
						<p>Квартира выполнена преимущественно в скандинавском стиле. Такой интерьер легкий в применении, а также приятен для проживания, практичен в использовании, поскольку сочетаются природные материалы, элементы живой природы и натуральные цвета.</p>
						<p>Мебель только простой и правильной формы. Для украшения интерьера подойдет искусственная трава, камни, аксессуары из цвета натурального дерева, различные виды декора.</p>
					</div>

					<div class="description__image">
						<div class="description__image-body">
							<div class="description__image-wrap rellax ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/12.jpg" alt="1" class="ib_use">
							</div>
						</div>
					</div>
				</div>

				<div class="description__cart description__cart_reverse">
					<div class="description__content">
						<p>Основа концепции – простота, присутствие белого цвета, светлое дерево, ненасыщенные (грязные) акцентные цвета. Используя в интерьере несколько цветов и материалов, добились единого образа и стилистики квартиры.</p>
						<p>Доминирующий цвет квартиры – теплые оттенки серого, на фоне которых хорошо выделяются белые пятна декора и фасадов мебели, дверей и плинтуса. Акцентным и ключевым цветом выбран в качестве примера – приглушенный терракотовый. В зависимости от преимущества, можно видоизменять цвет, сочетая его с основанием и другими отделочными материалами.</p>
					</div>

					<div class="description__image">
						<div class="description__image-body">
							<div class="description__image-wrap rellax ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/13.jpg" alt="1" class="ib_use">
							</div>
						</div>
					</div>
				</div>

				<div class="description__cart">
					<div class="description__content">
						<p>Хотя стилистика помещения относится к современным направлениям, некоторые предметы могут быть в ретро-стилистике.</p>
						<p>Выбор позиций по наполнению интерьера был ориентирован как на надежные, хорошо зарекомендовавшие себя на рынке модели, а также учитывая их практичность в быту. Удобно, функционально, современно, просто, доступно, уютно, и главное с душой-принцип дизайна в скандинавском стиле для вашей квартиры. Всё возможно! Жить со вкусом за приемлемое предложение.</p>
					</div>

					<div class="description__image">
						<div class="description__image-body">
							<div class="description__image-wrap rellax ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/14.jpg" alt="1" class="ib_use">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Order -->

		<section class="order order_repair order_packages order_reverse">
			<div class="lines anim-item lines_repair-half">
				<span></span>
				<span></span>
			</div>

			<div class="order__inner">
				<div class="order__image ib">
					<img src="<?php echo get_template_directory_uri() ?>/source/new-img/solutions/15.jpg" alt="stili-remonta-materials" class="ib_use">
				</div>

				<div class="order__content">
					<div class="order__content-wrap">
						<div class="order__content-title">
							<h2>проект</h2>
							<h3>Закажи этот проект под ключ за <span>380$</span></h3>
						</div>
						<div class="order__content-btns">
              <div data-disable-test-popup data-stili-item="готовые пакетные решения" data-open-popup="call-popup" class="btn btn_big-fill" data-form-paket-analitic="form-paket">Заказать</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Payment -->

		<section class="payment payment_repair">
			<div class="title anim-item title_left">
				<h2 class="title__title">преимущества</h2>
				<span class="title__text">спочему выбирают нас</span>
			</div>

			<div class="payment__content">
				<div class="payment__carts">
					<div class="payment__cart anim-item payment-sizer">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">01</p>
							<p class="payment__cart-text">Фиксируем итоговую стоимость и сроки договора. Отсутствие скрытых расходов</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">02</p>
							<p class="payment__cart-text">Осуществляем прямые закупки сертифицированных материалов непосредственно от импортеров</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">03</p>
							<p class="payment__cart-text">Предоставляем доступ к онлайн-кабинету для контроля и управления всеми ремонтными процессами.</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">04</p>
							<p class="payment__cart-text">Возможность оплаты частями (10%/40%/40%/10%) – выплата последних 10% после окончания всех работ</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">05</p>
							<p class="payment__cart-text">Повертаємо 25$ за кожен прострочений день</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">06</p>
							<p class="payment__cart-text">Современный шоурум с большим выбором отделочных материалов</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">07</p>
							<p class="payment__cart-text">Інтерактивний онлайн-каталог із дизайнерським підбором матеріалів</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">08</p>
							<p class="payment__cart-text">Выдаем гарантийный сертификат сроком на 5 лет</p>
						</div>
					</div>
				</div>
			</div>
		</section>

     <!-- вывод секции portfolio -->
    <?php echo get_template_part( 'template-parts/content', 'portfolio' ); ?>

 <!-- вывод секции desinger-section -->
    <?php echo get_template_part( 'template-parts/content', 'desinger-section' ); ?>

<?php get_footer(); ?>

	