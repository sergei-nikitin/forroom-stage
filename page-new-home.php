<?php
/*
Template Name: new-home

*/

// … остальной код шаблона
?>

<?php get_header(); ?>
	      
	       <!-- вывод секции test -->
    <?php echo get_template_part( 'template-parts/content', 'test' ); ?>

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
							<h2>forroom</h2>
							<h3>ГОТОВЫЕ ПАКЕТЫ РЕМОНТА по ФИКСИРОВАННой цене
за 60 рабочих дней</h3>
						</div>
					
							<div class="header__btn">
							<a href="https://forroom.com.ua/ru/ru/packages/#stili" class="btn btn_big-fill">выбрать пакет ремонта</a>
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
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG2.jpg" alt="2" class="ib_use"></span></span></span>
								<div class="header__cover-inner">
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG2.jpg" alt="2" class="ib_use"></span></span></span>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG2.jpg" alt="2" class="ib_use"></span></span></span>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG2.jpg" alt="2" class="ib_use"></span></span></span>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG2.jpg" alt="2" class="ib_use"></span></span></span>
								</div>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG2.jpg" alt="2" class="ib_use"></span></span></span>
							</div>
						</div>
						<div class="header__slide">
							<div class="header__cover hide">
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG1.jpg" alt="1" class="ib_use"></span></span></span>
								<div class="header__cover-inner">
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG1.jpg" alt="1" class="ib_use"></span></span></span>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG1.jpg" alt="1" class="ib_use"></span></span></span>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG1.jpg" alt="1" class="ib_use"></span></span></span>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG1.jpg" alt="1" class="ib_use"></span></span></span>
								</div>
								<span><span><span class="ib"><img src="<?php echo get_template_directory_uri() ?>/source/new-img/header-images-main/BG1.jpg" alt="1" class="ib_use"></span></span></span>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Menu -->
<!-- 	
			<div class="menus menus_home">
				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="#"><span class="iconify" data-icon="ion:folder-open-outline"></span> пакеты ремонта</a></li>
						<li><a href="#"><span class="iconify" data-icon="ion:bed-outline"></span> вторичного жилья</a></li>
						<li><a href="#"><span class="iconify" data-icon="ion:key-outline"></span> под сдачу</a></li>
						<li><a href="#"><span class="iconify" data-icon="ion:color-palette-outline"></span> дизайн интерьера</a></li>
					</ul>
				</div>

				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="#"><span class="iconify" data-icon="ion:folder-open-outline"></span> пакеты ремонта</a></li>
						<li><a href="#"><span class="iconify" data-icon="ion:bed-outline"></span> вторичного жилья</a></li>
						<li><a href="#"><span class="iconify" data-icon="ion:key-outline"></span> ремонт под сдачу</a></li>
						<li><a href="#"><span class="iconify" data-icon="ion:color-palette-outline"></span> дизайн интерьера</a></li>
					</ul>
				</div>
			</div> -->
		</header>

			<!-- Repairs -->

		<section class="repairs">
			<div class="lines anim-item lines_three-space-between">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="repairs__scroll">
				<div class="repairs__images">
					<div class="repairs__img">
						<div class="repairs__image ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs1.jpg" alt="1" class="ib_use">
						</div>
					</div>
					<div class="repairs__img">
						<div class="repairs__image ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs2.jpg" alt="2" class="ib_use">
						</div>
					</div>
					<div class="repairs__img">
						<div class="repairs__image ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs3.jpg" alt="3" class="ib_use">
						</div>
					</div>
					<div class="repairs__img">
						<div class="repairs__image ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs4.jpg" alt="4" class="ib_use">
						</div>
					</div>
					<div class="repairs__img">
						<div class="repairs__image ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs5.jpg" alt="5" class="ib_use">
						</div>
					</div>
				</div>

				<div class="repairs__contents">
					<div class="repairs__carts">
						<div class="repairs__inner">
							<div class="repairs__content">
								<div class="repairs__wrap">
									<div class="repairs__body">
										<div class="repairs__body-inner">
											<div class="repairs__title">
												<h2>пакеты</h2>
												<h3>готовые пакеты ремонта</h3>
											</div>
											<p class="repairs__text">Это уникальное предложение с фиксированной ценой и сроками по комплексному ремонту квартир от компании ForRoom.</p>
											<p class="repairs__text">Каждый пакет ремонта включает в себя все работы, материалы и процессы, такие как логистика, заказ материалов, вывоз строительного мусора и пр.</p>
											<div class="repairs__btn">
												<a href="https://forroom.com.ua/ru/packages/" class="btn btn_big">выбрать пакет услуг</a>
											</div>
										</div>

<div class="repairs__picture">
	<div class="repairs__picture-wrap ib">
		<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs6.jpg" alt="1" class="ib_use">
	</div>
</div>
									</div>
								</div>
							</div>
						</div>
						<div class="repairs__inner">
							<div class="repairs__content">
								<div class="repairs__wrap">
									<div class="repairs__body">
										<div class="repairs__body-inner">
											<div class="repairs__title">
												<h2>дизайн</h2>
												<h3>Дизайн интерьера</h3>
											</div>
											<p class="repairs__text">Дизайн проект от компании FORROOM - это сочетание стиля и индивидуальности. Мы всегда в курсе модных тенденций, и стараемся, в первую очередь, отразить ваш внутренний мир сквозь призму интерьера вашей квартиры, через личный опыт наших дизайнеров.</p>
											<p class="repairs__text">Каждый проект продуман до мельчайших нюансов и основан на ваших предпочтениях, особенностях, ритма жизни и привычках. Результат — по-настоящему индивидуальный интерьер, отражающий Вашу личность.</p>
											<div class="repairs__btn">
												<a href="https://forroom.com.ua/ru/interior/" class="btn btn_big">заказать проект</a>
											</div>
										</div>

<div class="repairs__picture">
	<div class="repairs__picture-wrap ib">
		<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs7.jpg" alt="1" class="ib_use">
	</div>
</div>
									</div>
								</div>
							</div>
						</div>
						<div class="repairs__inner">
							<div class="repairs__content">
								<div class="repairs__wrap">
									<div class="repairs__body">
										<div class="repairs__body-inner">
											<div class="repairs__title">
												<h2>в новострое</h2>
												<h3>Ремонт в новострое</h3>
											</div>
											<p class="repairs__text">Купили квартиру в новом доме? Поздравляем! Самое время задуматься о качественном и стильном ремонте.</p>
											<p class="repairs__text">Компания FORROOM возьмёт весь комплекс задач по ремонту вашей квартиры на себя и выполнит полный цикл работ в вашей квартире от создания дизайн проекта до финальной уборки вашей квартиры.</p>
											<div class="repairs__btn">
												<a href="https://forroom.com.ua/ru/new-buildings/" class="btn btn_big">подробнее</a>
											</div>
										</div>

<div class="repairs__picture">
	<div class="repairs__picture-wrap ib">
		<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs8.jpg" alt="1" class="ib_use">
	</div>
</div>
									</div>
								</div>
							</div>
						</div>
						<div class="repairs__inner">
							<div class="repairs__content">
								<div class="repairs__wrap">
									<div class="repairs__body">
										<div class="repairs__body-inner">
											<div class="repairs__title">
												<h2>кейс №1</h2>
												<h3>Ремонт вторичного жилья 
	</h3>
											</div>
											<p class="repairs__text">Клиент обратился к нам с чёткой задачей: хороший ремонт, чтобы старая квартира заиграла по-новому.</p>
											<p class="repairs__text"> 
	С учётом всех особенностей планировки и расположения квартиры, мы решили поэкспериментировать и предложить клиенту стиль лофт — удобное и практичное решение, которое хорошо играет с другими стилями…</p>
											<div class="repairs__btn">
												<a href="https://forroom.com.ua/ru/vtorichka/" class="btn btn_big">подробнее</a>
											</div>
										</div>

<div class="repairs__picture">
	<div class="repairs__picture-wrap ib">
		<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs9.jpg" alt="1" class="ib_use">
	</div>
</div>
									</div>
								</div>
							</div>
						</div>
						<div class="repairs__inner">
							<div class="repairs__content">
								<div class="repairs__wrap">
									<div class="repairs__body">
										<div class="repairs__body-inner">
											<div class="repairs__title">
												<h2>кейс №2</h2>
												<h3>Ремонт под сдачу в аренду</h3>
											</div>
											<p class="repairs__text">Сдача квартиры в аренду — это отличная инвестиция для желающих получать стабильный доход на долгосрочной основе.</p>
											<p class="repairs__text">Клиент пришёл к нам с чёткой задачей — сделать ремонт для долгосрочной аренды в ЖК Элегия Парк. 
	Главное требование — создать комфортное и современное жильё, на которое есть спрос, за адекватную стоимость и без потери качества…</p>
											<div class="repairs__btn">
												<a href="https://forroom.com.ua/ru/arenda/" class="btn btn_big">подробнее</a>
											</div>
										</div>

										<div class="repairs__picture">
											<div class="repairs__picture-wrap ib">
												<img src="<?php echo get_template_directory_uri() ?>/source/new-img/main-repairs/repairs10.jpg" alt="1" class="ib_use">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Order -->

		<section class="order">
			<div class="order__inner">
				<div class="order__image ib">
					<!-- <iframe width="100%" min-height="100%" style="width: 100%; min-height: 100%; border: none; max-width: 100%;" frameborder="0" allowfullscreen allow="xr-spatial-tracking; gyroscope; accelerometer" scrolling="no" src="https://kuula.co/share/collection/7qdxw?logo=1&info=1&fs=0&vr=0&sd=1&autorotate=0.16&thumbs=0&alpha=0.60&inst=0"></iframe> -->
					<img src="<?php echo get_template_directory_uri() ?>/source/new-img/stili-remonta-materials.jpg" alt="stili-remonta-materials" class="ib_use">
				</div>

				<div class="order__content">
					<div class="order__content-wrap">
						<div class="order__content-title">
							<h2>Стили</h2>
							<h3>Получить подбор финишных материалов</h3>
						</div>
						<p class="order__content-text">Финишные материалы подобраны совместно отделом дизайна и снабжения, лучшие по соотношению цена-качество</p>
						<div class="order__list">
							<p class="order__list-title">Наши дизайнеры подготовили подбор финишных материалов в 4х стилях:</p>
							<ul class="order__list-list">
								<li>лофт</li>
								<li>минимализм</li>
								<li>контемпорари</li>
								<li>скандинавский</li>
							</ul>
						</div>
						<div class="order__content-btns">
							<a href="https://forroom.com.ua/ru/stili-remonta/" class="btn btn_big-fill">подробнее о стилях</a>
							<a href="https://forroom.site/katalog" target="_blank" class="btn btn_big">подборка материалов</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	       <!-- вывод секции portfolio -->
    <?php echo get_template_part( 'template-parts/content', 'portfolio' ); ?>
	       <!-- вывод секции answ-your-questions -->
    <?php echo get_template_part( 'template-parts/content', 'answ-your-questions' ); ?>

	

			<!-- Footer -->

<?php get_footer(); ?>