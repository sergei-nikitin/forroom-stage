<?php
/*
Template Name: О нас ua

*/

// … остальной код шаблона
?>

<?php get_header('ua'); ?>
 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps-ua' ); ?>

		<!-- Header -->

		<header class="header header_anim-about header_anim">
			<div class="header__inner nav-add-padding">
				<div class="header__body">
					<div class="header__body-wrap">
						<div class="header__title">
							<h2>forroom</h2>
							<h3>forroom</h3>
						</div>
						<p class="header__text">Перша ремонтно-будівельна компанія, що надає готові пакетні рішення ремонту з фіксованою ціною та термінами.</p>
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
						<p class="advantages__cart-subtitle">року</p>
						<p class="advantages__cart-text">на ринку ремонтно-будівельних послуг</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">130+</p>
						<p class="advantages__cart-subtitle">об'єктів</p>
						<p class="advantages__cart-text">успішно виконані та здані у строк</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">35+</p>
						<p class="advantages__cart-subtitle">фахівців</p>
						<p class="advantages__cart-text">високої кваліфікації працюють у компанії</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">5</p>
						<p class="advantages__cart-subtitle">років</p>
						<p class="advantages__cart-text">гарантії для кожного клієнта</p>
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
							<h2>Про компанію</h2>
							<h3>Про компанію</h3>
						</div>
						<p class="company__text">Компанія ForRoom займається ремонтними та дизайнерськими роботами з 2010 року. Ми допомагаємо втілити в реальність дизайн інтер'єру будь-якої складності, дотримуючись всіх термінів і фіксованої вартості. Кожен розроблений нами проект — унікальна пропозиція, виконана з усіма необхідними матеріалами, меблями та технікою.</p>
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
						<p class="company__text">Ми відкрили шоурум, щоб ви могли отримати грамотну консультацію фахівців і подивитись зразки будівельних та декоративних матеріалів. Відвідуючи шоурум, ви можете перевірити якість оздоблювальних матеріалів, гармонійно скомпонувати кольори і фактури, підібрати матеріали під стиль інтер'єру, а також випити чашечку чаю або кави.</p>
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
						<p class="director__text">Основна наша мета— вберегти кожного клієнта від нервів, заощадити його час і задовольнити всі його запити. Ми враховуємо все до дрібниць — від понравившихся вам матеріалів до темпу вашого життя, індивідуальних особливостей і навіть переваг всіх членів сім'ї. ForRoom за грамотний розподіл бюджету, точні терміни виконання та ваш комфорт.</p>
						<h4 class="director__title">Іван Кушніров</h4>
						<p class="director__about">Директор ремонтно-будівельної компанії «FORROOM»</p>
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
								<h4 class="command__cart-title">Іван Кушніров</h4>
								<p class="command__cart-position">Директор</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Иван Кушниров ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/stratila.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Стратіла Петро</h4>
								<p class="command__cart-position">Технічний директор</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Стратила Пётр ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/remenda.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ременда Петро</h4>
								<p class="command__cart-position">Керівник проектів</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Ременда Пётр ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/polishuk.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Поліщук Дмитро</h4>
								<p class="command__cart-position">Керівник проектів</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Полищук Дмитрий ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/ignatchenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Микола Ігнатченко</h4>
								<p class="command__cart-position">Інспектор проектів</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Николай Игнатченко ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/lazareva.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Юлія Лазарєва</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Юлия Лазарева ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/samoilov.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Самойлов Артем</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Самойлов Артем ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kovalenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Коваленко Антон</h4>
								<p class="command__cart-position">Керівник проектів</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Коваленко Антон ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
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
								<h4 class="command__cart-title">Григоренко Олександр</h4>
								<p class="command__cart-position">Керівник проектів</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Григоренко Александр ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kovaleva.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ковальова Ганна</h4>
								<p class="command__cart-position">Постачальник</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Ковалева Анна ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/martinuk.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Катерина Мартинюк</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Екатерина Мартынюк ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/gortopan.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Олександра Гортопан</h4>
								<p class="command__cart-position">Менеджер</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Александра Гортопан ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/buravikova.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Екатерина Буравікова</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Екатерина Буравикова ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/pojar.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Микола Пожар</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Николай Пожар ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/senich.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Анна Сеніч</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Анна Сенич ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/reush.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Наталія Реуш</h4>
								<p class="command__cart-position">Дизайнер</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Наталья Реуш ua" data-open-popup="call-popup" data-design-faq-analitic="design-faq">консультація</button>
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
    <?php echo get_template_part( 'template-parts/content', 'portfolio-ua' ); ?>

    <!-- вывод секции answ-your-questions -->
    <?php echo get_template_part( 'template-parts/content', 'answ-your-questions-ua' ); ?>

    <?php get_footer('ua'); ?>