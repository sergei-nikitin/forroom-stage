<?php
/*
Template Name: О нас EN

*/

// … остальной код шаблона
?>

<?php get_header('en'); ?>

 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps-en' ); ?>

		<!-- Header -->

		<header class="header header_anim-about header_anim">
			<div class="header__inner nav-add-padding">
				<div class="header__body">
					<div class="header__body-wrap">
						<div class="header__title">
							<h2>forroom</h2>
							<h3>forroom</h3>
						</div>
						<p class="header__text">The first repair and construction company providing ready-made package repair solutions with a fixed price and terms</p>
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
						<p class="advantages__cart-subtitle">years</p>
						<p class="advantages__cart-text">in the market of repair and construction services</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">130+</p>
						<p class="advantages__cart-subtitle">objects</p>
						<p class="advantages__cart-text">successfully completed and delivered on time</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">35+</p>
						<p class="advantages__cart-subtitle">specialists</p>
						<p class="advantages__cart-text">highly qualified work in the company</p>
					</div>
				</div>
				<div class="advantages__cart">
					<div class="advantages__cart-wrap">
						<p class="advantages__cart-title">5</p>
						<p class="advantages__cart-subtitle">years</p>
						<p class="advantages__cart-text">guarantees for each client</p>
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
							<h2>company</h2>
							<h3>About company</h3>
						</div>
						<p class="company__text">ForRoom has been engaged in repair and design work since 2010. We help to bring interior design of any complexity into reality, observing all deadlines and a fixed cost. Each project developed by us is a unique offer, made with all the necessary materials, furniture and appliances.</p>
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
							<h2> Showroom</h2>
							<h3>Showroom</h3>
						</div>
						<p class="company__text">We have opened a showroom so that you can get competent advice from specialists and see samples of building and decorative materials. When visiting the showroom, you can check the quality of finishing materials, harmoniously combine colors and textures, choose materials for the style of the interior, and also have a cup of tea or coffee.</p>
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
						<p class="director__text">Our main goal is to save each client from nerves, save his time and satisfy all his requests. We take into account every detail - from the materials you like to the pace of your life, individual characteristics and even the preferences of all family members. ForRoom for competent budget distribution, exact deadlines and your comfort.</p>
						<h4 class="director__title">Ivan Kushnirov</h4>
						<p class="director__about">Director of a repair and construction company «FORROOM»</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Command -->

		<section class="command">
			<div class="command__inner">
				<div class="title anim-item">
					<h2 class="title__title">command</h2>
					<span class="title__text">command</span>
				</div>
<!-- 1 -->
				<div class="command__carts">
					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kushnirov.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ivan Kushnirov</h4>
								<p class="command__cart-position">Director</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Иван Кушниров en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/stratila.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Stratila Peter</h4>
								<p class="command__cart-position">Technical Director</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Стратила Пётр en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/remenda.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Remenda Peter</h4>
								<p class="command__cart-position">Project manager</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Ременда Пётр en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/polishuk.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Polishchuk Dmitry</h4>
								<p class="command__cart-position">Project manager</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Полищук Дмитрий en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/ignatchenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Nikolay Ignatchenko</h4>
								<p class="command__cart-position">Project Inspector</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Николай Игнатченко en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/lazareva.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Julia Lazareva</h4>
								<p class="command__cart-position">Manager</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Юлия Лазарева en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/samoilov.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Samoilov Artyom</h4>
								<p class="command__cart-position">Manager</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Самойлов Артем en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kovalenko.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Kovalenko Anton</h4>
								<p class="command__cart-position">Project manager</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Коваленко Антон en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
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
								<h4 class="command__cart-title">Grigorenko Alexander</h4>
								<p class="command__cart-position">Project manager</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Григоренко Александр en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/kovaleva.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Kovaleva Anna</h4>
								<p class="command__cart-position">Supplier</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Ковалева Анна en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/martinuk.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ekaterina Martynyuk</h4>
								<p class="command__cart-position">Manager</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Екатерина Мартынюк en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/gortopan.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Alexandra Gortopan</h4>
								<p class="command__cart-position">Manager</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Александра Гортопан en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/buravikova.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Ekaterina Buravikova</h4>
								<p class="command__cart-position">Designer</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Екатерина Буравикова en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/pojar.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Nikolai Fire</h4>
								<p class="command__cart-position">Designer</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Николай Пожар en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/senich.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Anna Senich</h4>
								<p class="command__cart-position">Designer</p>
								<div class="command__cart-btn">
										<button type="button" class="btn btn_big-fill" data-stili-item="Анна Сенич en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>

					<div class="command__cart">
						<div class="command__cart-wrap ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/staff/reush.jpg" alt="team" class="ib_use">

							<div class="command__cart-content">
								<h4 class="command__cart-title">Natalia Reush</h4>
								<p class="command__cart-position">Designer</p>
								<div class="command__cart-btn">
									<button type="button" class="btn btn_big-fill" data-stili-item="Наталья Реуш en" data-open-popup="call-popup" data-design-faq-analitic="design-faq">consultation</button>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

				<div class="command__btn">
					<button type="button" class="btn btn_big-fill" onclick="document.querySelector('.hidden-comand').classList.toggle('activ-comand')">All team</button>
				</div>
			</div>
		</section>

      <!-- вывод секции portfolio-->
    <?php echo get_template_part( 'template-parts/content', 'portfolio-en' ); ?>

    <!-- вывод секции answ-your-questions -->
    <?php echo get_template_part( 'template-parts/content', 'answ-your-questions-en' ); ?>

    <?php get_footer('en'); ?>