<?php
/*
Template Name: Виды ремонтов

*/

// … остальной код шаблона
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
	<title>ForRoom - Виды ремонтов</title>
	<!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/main.css"> -->
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">

	<meta name="format-detection" content="telephone=no">

	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicon -->
</head>
<body>

	<div class="wrapper">
		<!-- Nav -->

		<nav class="nav fixed-padding nav_menus anim-item" id="nav">
			<div class="nav__body">
				<a href="tel:+380487955575" class="nav__phone">
					<span class="iconify" data-icon="ic:baseline-phone"></span>
				</a>

				<ul class="nav__menu">
					<li><a href="#">Ремонт</a></li>
					<li><a href="#">Дизайн</a></li>
					<li><a href="#">Стили</a></li>
				</ul>

				<a href="#" class="nav__logo">
					<img src="<?php echo get_template_directory_uri() ?>/source/img/forroom-black.png" alt="ForFoom">
				</a>

				<ul class="nav__menu">
					<li><a href="#">Стоимость</a></li>
					<li><a href="#">Рассрочка</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>

				<div class="nav__burger">
					<div class="nav__burger-btn">
						<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
					</div>
					<ul class="nav__burger-list">
						<li><a href="#">Ремонт</a></li>
						<li><a href="#">Дизайн</a></li>
						<li><a href="#">Стили</a></li>
						<li><a href="#">Стоимость</a></li>
						<li><a href="#">Рассрочка</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header -->

		<header class="header nav-add-padding header_repair">
			<div class="lines anim-item lines_two-left lines_to-bottom">
				<span></span>
				<span></span>
			</div>

			<div class="header__inner anim-item">
				<div class="header__body">
					<div class="header__body-wrap">
					<h1 class="header__title" data-splitting><span class="red">процесс,</span> который приятно удивляет</h1>
						<p class="header__text">Здесь каждый аспект ремонта доведён до совершенства, чтобы вы переживали только позитивные эмоции</p>
						<div class="header__btn">
							<a href="#" class="btn btn_big-fill">Посмотреть идеи</a>
						</div>
					</div>
				</div>
			
				<div class="header__image">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/img/header-images/1.jpg" alt="1" class="ib_use">
							</div>

							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/img/header-images/2.jpg" alt="2" class="ib_use">
							</div>

							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/img/header-images/3.jpg" alt="3" class="ib_use">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Newbuild -->

		<section class="newbuild">
			<div class="lines anim-item lines_two-left lines_one-center">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="newbuild__inner">
				<div class="newbuild__content">
					<div class="newbuild__body">
						<div class="newbuild__body-wrap">
						<h2 class="newbuild__title anim-item" data-splitting>Ремонт квартиры <span class="red">в новострое</span></h2>
							<p class="newbuild__text">Планируете покупку квартиры в новострое? Если это не первая покупка, то вы наверняка, уже знаете, что и как в ней должно быть.</p>
							<p class="newbuild__text">А если нет — не проблема! Наши дизайнеры помогут не упустить ни одной важной мелочи в организации эргономики пространства и дизайне интерьера</p>
							<div class="newbuild__btn">
								<a href="#" class="btn btn_big-fill">подробнее</a>
							</div>
						</div>
						<div class="newbuild__img ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/img/newbuild_small.jpg" alt="newbuild_small" class="ib_use">
						</div>
					</div>
				</div>

				<div class="newbuild__image ib">
					<img src="<?php echo get_template_directory_uri() ?>/source/img/newbuild.jpg" alt="newbuild" class="ib_use">
				</div>
			</div>
		</section>

		<!-- Order -->

		<section class="order order_main">
			<div class="order__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/img/order.jpg" alt="order" class="ib_use">
			</div>

			<div class="order__content anim-item">
				<div class="order__content-wrap">
					<h3 class="order__title splitting-2" data-splitting>Сэкономьте $1000, заказав ремонт под ключ в Forroom до 25 декабря 2021</h3>
					<p class="order__text splitting-2" data-splitting>Ответьте на 7 уточняющих вопросов, чтобы получить подарок</p>
					<div class="order__btn">
						<a href="#" class="btn btn_big-fill">получить подарок</a>
					</div>
					<div class="order__online">
						<div class="order__online-icon">
							<lottie-player class="lottie-player" src="https://assets10.lottiefiles.com/packages/lf20_1cdhYi.json" speed="1" loop autoplay></lottie-player>
						</div>
						<p class="order__online-text">Следите за ходом ремонта онлайн и управляйте процессом через сервис «Личный кабинет», с любой точки мира 24/7</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Repairs -->

		<section class="repairs">
			<div class="lines anim-item lines_three-space-between">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="repairs__inner swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide repairs__cart">
						<div class="repairs__cart-inner">
							<div class="repairs__cart-img">
								<div class="repairs__cart-image ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/img/repairs/1.jpg" alt="1" class="ib_use">
								</div>
							</div>

							<div class="repairs__cart-content">
								<div class="repairs__cart-wrap">
								<h3 class="repairs__cart-title" data-splitting>Ремонт <span class="red">вторичного жилья</span></h3>

									<p class="repairs__cart-text">Если квартира не в новострое, это вовсе не означает, что она не может быть современной и уютной! Мы поможем спланировать пространство небольшой квартиры с максимальным комфортом.</p>
									<p class="repairs__cart-text">Реконструируя вторичку с нами, вы повысите её ценность и создадите уютное и функциональное пространство, которое купят с удовольствием.</p>
									<div class="repairs__cart-btn">
										<a href="#" class="btn btn_big-fill">консультация</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide repairs__cart">
						<div class="repairs__cart-inner">
							<div class="repairs__cart-img">
								<div class="repairs__cart-image ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/img/repairs/2.jpg" alt="2" class="ib_use">
								</div>
							</div>

							<div class="repairs__cart-content">
								<div class="repairs__cart-wrap">
								<h3 class="repairs__cart-title" data-splitting>Ремонт квартиры для <span class="red">сдачи в аренду</span></h3>

									<p class="repairs__cart-text">Когда нужен аккуратный, но «неубиваемый» ремонт для небольшой квартиры, чтобы возврат инвестиций был максимально быстрым.</p>
									<p class="repairs__cart-text">Обновим отделку, добавим стиля и подберём мебель. </p>
									<p class="repairs__cart-text">Результат — уютная квартира, в которой уборка занимает 30 минут!</p>
									<p class="repairs__cart-text">Ремонт займёт не больше 60 дней, вам нужно только рассказать о своих предпочтениях и перестать беспокоиться</p>
									<div class="repairs__cart-btn">
										<a href="#" class="btn btn_big-fill">подробнее</a>
									</div>
									<div class="repairs__advice">
										<div class="repairs__advice-icon">
											<lottie-player class="lottie-player" src="https://assets4.lottiefiles.com/temporary_files/vrPYY1.json" speed="1" loop autoplay></lottie-player>
										</div>
										<p class="repairs__advice-text">Сэкономьте до 20% на стоимости материалов. Осуществляем закупки сертифицированных материалов напрямую с заводов производителей. </p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide repairs__cart">
						<div class="repairs__cart-inner">
							<div class="repairs__cart-img">
								<div class="repairs__cart-image ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/img/repairs/3.jpg" alt="3" class="ib_use">
								</div>
							</div>

							<div class="repairs__cart-content">
								<div class="repairs__cart-wrap">
								<h3 class="repairs__cart-title" data-splitting>Эргономика пространства и <span class="red">дизайн</span></h3>
									<p class="repairs__cart-text">Это наше главное преимущество и ваша выгода! Интерьер квартиры дополняет ваш внутренний мир и помогает добиться идеальной гармонии. Вас будет окружать обстановка, которая радует глаз каждой деталью.</p>
									<p class="repairs__cart-text">Закажите авторский дизайн с учётом ваших вкусов и предпочтений и получите дизайн-проект в подарок</p>
									<div class="repairs__cart-btn">
										<a href="#" class="btn btn_big-fill">заказать проект</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Ideas -->

		<section class="ideas">
			<div class="lines anim-item lines_three-space-between">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="ideas__inner">
				<div class="ideas__content anim-item">
					<div class="ideas__body">
						<p class="ideas__text">Стоимость и качество материалов подберём не только по стилям, но и под ваш бюджет. Оплата поэтапно и никаких сюрпризов!</p>
						<p class="ideas__text">Познакомьтесь с примерами ремонтов и их стоимостью.</p>
						<div class="ideas__btn">
							<a href="#" class="btn btn_big-fill">Посмотреть идеи</a>
						</div>
					</div>
				</div>
			
				<div class="ideas__image ib">
					<img src="<?php echo get_template_directory_uri() ?>/source/img/ideas.jpg" alt="ideas" class="ib_use">
				</div>
			</div>
		</section>

		<!-- Order -->

		<section class="order order_half">
			<div class="order__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/img/order_2.jpg" alt="order_2" class="ib_use">
			</div>

			<div class="order__content anim-item">
				<div class="order__content-wrap">
				<h3 class="order__title" data-splitting>Современные стили ремонта, которые могут <span class="red">вам понравиться</span></h3>
<p class="order__text splitting-2" data-splitting>Наши дизайнеры сделали подборки материалов под ваш вкус в разных стилях.</p>
					<div class="order__btn">
						<a href="#" class="btn btn_big-fill">Посмотреть услуги</a>
					</div>
					<div class="order__online">
						<div class="order__online-icon">
							<lottie-player class="lottie-player" src="https://assets5.lottiefiles.com/packages/lf20_srwniiih.json" speed="1" loop autoplay></lottie-player>
						</div>
						<p class="order__online-text">Финишные материалы, на ваш вкус, подобраны совместно отделом дизайна и снабжения, лучшие по соотношению цена-качество</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Opportunities -->

		<section class="opportunities">
			<div class="opportunities__block opportunities__block_payment">
				<div class="lines anim-item lines_three-space-between">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="opportunities__block-inner">
					<div class="opportunities__wrap">
						<div class="opportunities__content anim-item">
						<h3 class="opportunities__title anim-item" data-splitting>Оплата <span class="red">частями</span></h3>

							<p class="opportunities__text">Получите до 400 000 тысяч финансирования вашего ремонта от банков-партнёров под 0% годовых</p>
							<div class="opportunities__btn">
								<a href="#" class="btn btn_big-fill">Посмотреть услуги</a>
							</div>
						</div>

						<div class="opportunities__img anim-item">
							<div class="opportunities__image ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/img/opportunities/1.jpg" alt="1" class="ib_use">
							</div>
						</div>
					</div>

					<div class="opportunities__advice">
						<div class="opportunities__advice-wrap">
							<div class="opportunities__advice-icon">
								<lottie-player class="lottie-player" src="https://assets6.lottiefiles.com/packages/lf20_bfe5cspj.json" speed="1" loop autoplay></lottie-player>
							</div>
							<p class="opportunities__advice-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
						</div>
					</div>

					<div class="opportunities__tabs">
						<div class="opportunities__tab anim-item">
							<div class="opportunities__tab-nav">
								<p class="opportunities__tab-title">Банки партнёры</p>
								<span class="iconify" data-icon="ic:baseline-plus"></span>
							</div>

							<div class="opportunities__tab-content">
								<p class="opportunities__tab-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
								<p class="opportunities__tab-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
							</div>
						</div>

						<div class="opportunities__tab anim-item">
							<div class="opportunities__tab-nav">
								<p class="opportunities__tab-title">финансовые программы</p>
								<span class="iconify" data-icon="ic:baseline-plus"></span>
							</div>

							<div class="opportunities__tab-content">
								<p class="opportunities__tab-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
								<p class="opportunities__tab-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="opportunities__block opportunities__block_willbe">
				<div class="lines anim-item lines_four-space-between">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="lines anim-item lines_one-left">
					<span></span>
				</div>

				<div class="opportunities__block-inner">
					<div class="opportunities__wrap">
						<div class="opportunities__img anim-item">
							<div class="opportunities__image ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/img/opportunities/2.jpg" alt="2" class="ib_use">
							</div>
						</div>

						<div class="opportunities__content anim-item">
						<h3 class="opportunities__title anim-item" data-splitting>Как все <span class="red">будет</span></h3>
							<p class="opportunities__text">Наша главная цель - обеспечить понятный процесс и комфорт для людей, которым приходится перевернуть все c ног на голову, чтобы получить пространство своей мечты.</p>
							<p class="opportunities__text">Мы считаем, что ремонт может идти по графику, быть действительно комфортным и оставлять только приятные воспоминания, а не страшные истории.</p>
							<p class="opportunities__text">Нажмите, чтобы увидеть, как все будет</p>
						</div>
					</div>

					<div class="opportunities__tabs">
						<div class="opportunities__tab anim-item">
							<div class="opportunities__tab-nav">
								<p class="opportunities__tab-title">финансовые программы</p>
								<span class="iconify" data-icon="ic:baseline-plus"></span>
							</div>

							<div class="opportunities__tab-content">
								<p class="opportunities__tab-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
								<p class="opportunities__tab-text">Вы знаете итоговую стоимость до начала работ и застрахованы от непредвиденных расходов. В случае нарушения сроков, за каждый день просрочки вернём 25 $.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Doubt -->

		<section class="doubt">
			<div class="doubt__content anim-item">
				<h3 class="doubt__title anim-item" data-splitting><span class="red">Остались</span> сомнения?</h3>
				<p class="doubt__text splitting-2" data-splitting>Просто приходите на экскурсию в шоу-рум или расскажите о них эксперту Forroom. Мы знаем, как сделать ремонт приятной заботой без стрессов.</p>
				<form data-id="forroom-form" action="#" class="doubt__form">
					<div class="doubt__form-input">
						<input type="tel" id="doubt-form-phone" placeholder="+380 () ___ -  - __"><!-- class="success error" -->
						<p>Неверный формат номера</p>
					</div>
					<div class="doubt__form-btn">
						<button type="submit" class="btn btn_big-fill">обратная связь</button>
					</div>
				</form>
				<p class="doubt__online">Мы на связи: Пн-Пт 10:00 – 20:00</p>
			</div>

			<div class="doubt__map ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/img/map.jpg" alt="map" class="ib_use">
			</div>
		</section>

		<!-- Footer -->

		<footer class="footer footer_stili">
			<div class="footer__top anim-item">
				<div class="footer__socials">
					<ul class="footer__social">
						<li><a href="#"><span class="iconify" data-icon="bx:bxl-instagram-alt"></span></a></li>
						<li><a href="#"><span class="iconify" data-icon="ic:baseline-facebook"></span></a></li>
						<li><a href="#"><span class="iconify" data-icon="ic:baseline-telegram"></span></a></li>
					</ul>
					<ul class="footer__social">
						<li><a href="tel:+380487955575"><span class="iconify" data-icon="ic:baseline-phone"></span> +38 (048) 795 55 75</a></li>
					</ul>
				</div>

				<a href="#" class="footer__logo">
					<img src="<?php echo get_template_directory_uri() ?>/source/img/forroom-black.png" alt="ForFoom">
				</a>

				<ul class="footer__menu">
					<li><a href="#">Ремонт</a></li>
					<li><a href="#">Дизайн</a></li>
					<li><a href="#">Стили</a></li>
					<li><a href="#">Стоимость</a></li>
					<li><a href="#">Рассрочка</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>

			<div class="footer__bottom anim-item">
				<a href="#" class="footer__policy">Политика конфиденциальности</a>
				<p class="footer__copyright">© 2021 FORROOM. Все права защищены</p>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/inputmask.min.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/repair.js"></script> -->
</body>
</html>