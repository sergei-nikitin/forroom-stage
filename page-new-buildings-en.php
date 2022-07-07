<?php
/*
Template Name: Новостройки EN

*/

// … остальной код шаблона
?>

<?php get_header('en'); ?>
 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps-en' ); ?>
	       <!-- вывод секции test -->
    <?php echo get_template_part( 'template-parts/content', 'test-en' ); ?>

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
							<h2>NEW BUILDING</h2>
							<h3>FIT-OUT IN A NEW BUILDING</h3>
						</div>
						<p class="header__text">Choose a complete fit-out package in your residential complex, specify the floor plan and get a complete offer</p>
						<div class="header__btn">
							<a href="#building" class="btn btn_big-fill">choose a new building</a>
						</div>
					</div>
				</div>

				<div class="header__anim-background">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/novostroi.jpg" alt="1" class="ib_use">
							</div>

							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/novostroi-2.jpg" alt="2" class="ib_use">
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Menu -->
	
			<div class="menus">
				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="https://forroom.com.ua/en/packages/"><span class="menu__icon"><span class="iconify" data-icon="ion:folder-open-outline"></span></span>fit-out packages</a></li>
						<li><a href="https://forroom.com.ua/en/vtorichka/"><span class="menu__icon"><span class="iconify" data-icon="ion:bed-outline"></span></span>secondary housing</a></li>
						<li><a href="https://forroom.com.ua/en/arenda/"><span class="menu__icon"><span class="iconify" data-icon="ion:key-outline"></span></span>for rent</a></li>
						<li><a href="https://forroom.com.ua/en/interior/"><span class="menu__icon"><span class="iconify" data-icon="ion:color-palette-outline"></span></span>interior design</a></li>
					</ul>
				</div>

				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="https://forroom.com.ua/en/packages/"><span class="menu__icon"><span class="iconify" data-icon="ion:folder-open-outline"></span></span>fit-out packages</a></li>
						<li><a href="https://forroom.com.ua/en/vtorichka/"><span class="menu__icon"><span class="iconify" data-icon="ion:bed-outline"></span></span>secondary housing</a></li>
						<li><a href="https://forroom.com.ua/en/arenda/"><span class="menu__icon"><span class="iconify" data-icon="ion:key-outline"></span></span>for rent</a></li>
						<li><a href="https://forroom.com.ua/en/interior/"><span class="menu__icon"><span class="iconify" data-icon="ion:color-palette-outline"></span></span>interior design</a></li>
					</ul>
				</div>
			</div>
		</header>

	       <!-- вывод секции слайд с пакетами ремонта -->
    <?php echo get_template_part( 'template-parts/content', 'slide-packages-en' ); ?>

		<!-- About -->

		<section class="about about_novostroi">
			<div class="lines anim-item lines_two-space-between">
				<span></span>
				<span></span>
			</div>

			<div class="about__inner">
				<div class="about__content">
					<div class="about__body">
						<div class="about__title">
							<h2>No hassle</h2>
							<h3>Start living in your new flat without any hassle</h3>
						</div>
						<p class="about__text">After buying a flat, a no less responsible stage follows - creating a modern, comfortable and attractive interior. Fit-out from scratch in a new building has its own specific features. Observing them, you will get a result that will surpass all expectations.</p>
						<p class="about__text">ForRoom company will undertake full cycle of works which will transform your living space into perfection due to the quality of work, transparency of all processes and absolute attention to every detail. You get a flat that is fully prepared for comfortable living!</p>
						<p class="about__text">A nice bonus: ordering turnkey fit-out you get a design project for free!</p>
					</div>
				</div>

				<div class="about__image">
					<div class="about__image-body">
						<div class="about__image-wrap ib rellax">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img/about_novostroi.jpg" alt="about_novostroi" class="ib_use">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Choose -->

		<section id="building" class="choose">
			<div class="lines anim-item lines_two-space-between">
				<span></span>
				<span></span>
			</div>

			<div class="choose__content">
				<div class="choose__inner">
					<div class="choose__wrap">
						<div class="choose__image">
							<div class="choose__image-body">
								<div class="choose__image-wrap ib rellax">
									<img src="<?php echo get_template_directory_uri() ?>/source/new-img/choose.jpg" alt="choose" class="ib_use">
								</div>
							</div>
						</div>

						<div class="choose__scroll">
							<div class="choose__scroll-inner">
								<div class="choose__scroll-title">
									<h2>Select RC</h2>
									<h3>Select your residential complex</h3>
								</div>

								<div class="choose__carts">
									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/card-novostroi.jpg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Kandinsky Odessa Residence</span>
											<span data-choose-item="ЖК Kandinsky Odessa Residence EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/altair.jpg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Altair 3</span>
											<span data-choose-item="ЖК Альтаир 3 EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/chet-sezona.jpeg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC 4 seasons</span>
											<span data-choose-item="ЖК 4 Сезона EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/olimpiiskiy.jpeg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Olympic</span>
											<span data-choose-item="ЖК Олимпийский EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/prohorovskij.jpg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Prokhorovsky</span>
											<span data-choose-item="ЖК Прохоровский EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/sky-siti.jpeg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Sky City</span>
											<span data-choose-item="ЖК Sky City EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/realpark.jpg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Real Park</span>
											<span data-choose-item="ЖК Real Park EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>

									<div class="choose__cart">
										<div class="choose__cart-wrap ib">
											<img src="<?php echo get_template_directory_uri() ?>/source/new-img/cards-novostroi/morsimfon.jpg" alt="card-novostroi" class="ib_use">
											<span class="choose__cart-title">RC Sea Symphony</span>
											<span data-choose-item="ЖК Морская Симфония EN" data-disable-test-popup data-open-popup="confirm-popup" class="choose__cart-btn btn btn_big-fill">choose</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="choose__body">
							<div class="choose__body-wrap">
								<div class="choose__body-content">
									<h4 class="choose__title">Enter the name of your residential complex and we will offer you a personal repair solution</h4>
									<form action="#" class="choose__form">
										<div class="block-input block-input_white">
											<input type="text" placeholder="Ваш ЖК">
											<p class="block-input__text">Mistake</p>
										</div>
										<button data-choose-input data-open-popup="confirm-popup" class="btn btn_big-fill choose__btn" type="button">choose RC</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




	       <!-- вывод секции portfolio -->
    <?php echo get_template_part( 'template-parts/content', 'portfolio-en' ); ?>
	       <!-- вывод секции answ-your-questions -->
    <?php echo get_template_part( 'template-parts/content', 'answ-your-questions-en' ); ?>

	

			<!-- Footer -->

<?php get_footer('en'); ?>    