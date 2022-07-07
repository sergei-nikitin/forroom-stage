<?php
/*
Template Name: О нас

*/

// … остальной код шаблона
?>

<?php get_header(); ?>
 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps' ); ?>

		<!-- Header -->

		<header class="header header_anim-about header_anim ib">
			<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/bg.jpg" alt="1" class="ib_use">
			<div class="header__inner nav-add-padding">
				<div class="header__body">
					<div class="header__body-wrap">
						<div class="header__title">
							<h2>forroom</h2>
							<h3>forroom</h3>
						</div>
						<p class="header__text">Первая ремонтно-строительная компания предоставляющая готовые пакетные решения ремонта с фиксированной ценой и сроками</p>
					</div>
				</div>

				<div class="header__anim-background">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/bg.jpg" alt="1" class="ib_use">
							</div>

							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/bg.jpg" alt="2" class="ib_use">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Advantages -->

		<section class="advantages">
			<div class="lines anim-item lines_five-space-between">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="advantages__carts">
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">1,5</p>
						<p class="advantages__cart-subtitle">года</p>
						<p class="advantages__cart-text">на рынке ремонтно-строительных услуг</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">130+</p>
						<p class="advantages__cart-subtitle">объектов</p>
						<p class="advantages__cart-text">успешно выполнены и сданы в срок</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">35+</p>
						<p class="advantages__cart-subtitle">специалистов</p>
						<p class="advantages__cart-text">высокой квалификации работают в компании</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">5</p>
						<p class="advantages__cart-subtitle">лет</p>
						<p class="advantages__cart-text">гарантии для каждого клиента</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Company -->

		<section class="company">
			<div class="lines anim-item lines_about">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
</div>

			<div class="company__inner">
				<div class="company__cart">
					<div class="company__image">
						<div class="company__image-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/about.jpg" alt="company" class="ib_use">
						</div>
					</div>

					<div class="company__content">
						<div class="company__title">
							<h2>О компании</h2>
							<h3>О компании</h3>
						</div>
						<p class="company__text">Компания ForRoom занимается ремонтными и дизайнерскими работами с 2010 года. Мы помогаем воплотить в реальность дизайн интерьера любой сложности, соблюдая все сроки и фиксируемую стоимость. Каждый разработанный нами проект — уникальное предложение, выполненное со всеми необходимыми материалами, мебелью и техникой.</p>
					</div>
				</div>

				<div class="company__cart company__cart_reverse">
					<div class="company__slider">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/1.jpg" alt="1" class="ib_use">
								</div>
								<div class="swiper-slide ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/2.jpg" alt="2" class="ib_use">
								</div>
								<div class="swiper-slide ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/3.jpg" alt="3" class="ib_use">
								</div>
								<div class="swiper-slide ib">
									<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about/4.jpg" alt="4" class="ib_use">
								</div>
							</div>
						</div>
					</div>

					<div class="company__content">
						<div class="company__title">
							<h2>Шоурум</h2>
							<h3>Шоурум</h3>
						</div>
						<p class="company__text">Мы открыли шоурум, чтобы вы могли получить грамотную консультацию специалистов и посмотреть образцы строительных и декоративных материалов. Посещая шоурум, вы можете проверить качество отделочных материалов, гармонично скомпоновать цвета и фактуры, подобрать материалы под стиль интерьера, а также выпить чашечку чая или кофе.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Director -->

		<section class="director">
			<div class="lines_about-small lines anim-item">
				<span></span>
			</div>

			<div class="director__inner">
				<div class="director__image">
					<div class="director__image-wrap ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/director.jpg" alt="director" class="ib_use">
					</div>
				</div>

				<div class="director__content">
					<div class="director__content-wrap">
						<p class="director__text">Основная наша цель — уберечь каждого клиента от нервов, сэкономить его время и удовлетворить все его запросы. Мы учитываем все до мелочей — от понравившихся вам материалов до темпа вашей жизни, индивидуальных особенностей и даже предпочтений всех членов семьи. ForRoom за грамотное распределение бюджета, точные сроки исполнения и ваш комфорт.</p>
						<h4 class="director__title">Иван Кушниров</h4>
						<p class="director__about">Директор ремонтно-строительной компании «FORROOM»</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Command -->

		<section class="command">
			<div class="command__inner">
				<div class="title anim-item">
					<h2 class="title__title">команда</h2>
					<span class="title__text">команда</span>
				</div>
<!-- 1 -->
				<div class="command__carts">
					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kushnirov.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Иван Кушниров</h4>
								<p class="command__cart-position">Директор</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Иван Кушниров" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/stratila.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Стратила Пётр</h4>
								<p class="command__cart-position">Технический директор</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Стратила Пётр" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/remenda.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ременда Пётр</h4>
								<p class="command__cart-position">Руководитель проектов</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Ременда Пётр" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/polishuk.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Полищук Дмитрий</h4>
								<p class="command__cart-position">Руководитель проектов</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Полищук Дмитрий" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/ignatchenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Николай Игнатченко</h4>
								<p class="command__cart-position">Инспектор проектов</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Николай Игнатченко" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/lazareva.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Юлия Лазарева</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Юлия Лазарева" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/samoilov.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Самойлов Артём</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Самойлов Артем" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kovalenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Коваленко Антон</h4>
								<p class="command__cart-position">Руководитель проектов</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Коваленко Антон" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- 2 -->
<style>
	.hidden-comand{
		display: none;
		transform: translateY(-30%);
		transition: all .5s ease;
	}
	.activ-comand.hidden-comand{
		display: block;
		transform: translateY(0);
		transition: all .5s ease;
	}
</style>
<div class="hidden-comand">
			<div class="command__carts">
					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/grigorenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Григоренко Александр</h4>
								<p class="command__cart-position">Руководитель проектов</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Григоренко Александр" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kovaleva.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ковалева Анна</h4>
								<p class="command__cart-position">Снабженец</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Ковалева Анна" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/martinuk.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Екатерина Мартынюк</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Екатерина Мартынюк" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/gortopan.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Александра Гортопан</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Александра Гортопан" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/buravikova.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Екатерина Буравикова</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Екатерина Буравикова" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/pojar.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Николай Пожар</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Николай Пожар" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/senich.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Анна Сенич</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Анна Сенич" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/reush.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Наталья Реуш</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Наталья Реуш" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультация</button>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

				<div class="command__btn">
					<button type="button" class="btn btn_big-fill" onclick="document.querySelector('.hidden-comand').classList.toggle('activ-comand')">Вся команда</button>
				</div>
			</div>
		</section>

      <!-- вывод секции portfolio-->
    <?php echo get_template_part( 'template-parts/content', 'portfolio' ); ?>

    <!-- вывод секции answ-your-questions -->
    <?php echo get_template_part( 'template-parts/content', 'answ-your-questions' ); ?>

    <?php get_footer(); ?>