
<?php
/*
Template Name: Стили ремонта EN

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
							<h2>Styles</h2>
							<h3>Interior styles</h3>
						</div>
						<p class="header__text">Choose from 4 interior styles and get a professional selection of materials</p>
						<div class="header__btn">
							<a href="#stili" class="btn btn_big-fill">choose a style</a>
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
						<li><a href="https://forroom.com.ua/en/new-buildings/"><span class="menu__icon"><span class="iconify" data-icon="la:building"></span></span>new building</a></li>
						<li><a href="https://forroom.com.ua/en/vtorichka/"><span class="menu__icon"><span class="iconify" data-icon="la:tools"></span></span>for secondary housing</a></li>
						<li><a href="https://forroom.com.ua/en/arenda/"><span class="menu__icon"><span class="iconify" data-icon="la:handshake-solid"></span></span>for rent</a></li>
						<li><a href="https://forroom.com.ua/en/interior/"><span class="menu__icon"><span class="iconify" data-icon="la:bed"></span></span>interior design</a></li>
					</ul>
				</div>
	
				<div class="menu">
					<ul class="menu__wrap">
						<li><a href="https://forroom.com.ua/en/new-buildings/"><span class="menu__icon"><span class="iconify" data-icon="la:building"></span></span> new  <br>building</a></li>
						<li><a href="https://forroom.com.ua/en/vtorichka/"><span class="menu__icon"><span class="iconify" data-icon="la:tools"></span></span>for <br>secondary housing</a></li>
						<li><a href="https://forroom.com.ua/en/arenda/"><span class="menu__icon"><span class="iconify" data-icon="la:handshake-solid"></span></span>for rent</a></li>
						<li><a href="https://forroom.com.ua/en/interior/"><span class="menu__icon"><span class="iconify" data-icon="la:bed"></span></span>interior<br> design</a></li>
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
					<h2 class="title__title">styles</h2>
					<span class="title__text">Interior styles</span>
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
										<p class="stili__slide-title">Minimalism/Functionalism</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Discreet lighting</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Hidden furniture fittings</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Smooth surfaces of walls, ceilings and floors</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Ceilings without decorative elements</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Wall finishing - natural stone, wood, decorative plaster</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Minimalist spaces are always aesthetically pleasing and not crowded with unnecessary details</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>White walls, big mirror surfaces, hidden furniture fittings are widely used</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Минимализм/Функционализм EN" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">choose a package</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>minimalism</h2>
							<p>minimalism</p>
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
										<p class="stili__slide-title">Loft/Brutalism</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Concrete walls, rough plaster, exposed wood.</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Wooden shutters, pendant lights and lamps.</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Upholstered furniture in bright colours.</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>A sense of proportion and balance in the interior</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Multilevel lighting, wall lamps, modern style floor lamps.</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Лофт/Брутализм EN" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">choose a package</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>loft</h2>
							<p>loft</p>
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
										<p class="stili__slide-title">Modern/Contemporary</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Minimum of partitions and possibility to use the same room for different purposes</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Economical use of space</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Use of furniture for storage</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Neutral wall and furniture backgrounds</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Accent elements</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Clear zoning of the open space</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Glass and metal lighting</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Современный/Контемпорари EN" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">choose a package</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>Contemporary</h2>
							<p>Contemporary</p>
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
										<p class="stili__slide-title">Scandinavian/Eco Style</p>
										<div class="stili__slide-list">
											<ul>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Natural materials</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Simple and regular shaped furniture</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Ceiling without decorations</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Floors - light wood</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Walls - painted, decorative plaster</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Lots of accessories, decor and lots of textiles</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Live plants are widely used in the interior</li>
												<li><span class="iconify" data-icon="la:chevron-right"></span>Furniture in natural wood colour, ash, oak, teak, walnut</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="stili__slide-btns">
									<button data-stili-item="Скандинавский/Эко стиль EN" data-open-popup="call-popup" type="button" class="btn btn_big" data-stili-remonta-analitic="form-stili">choose a package</button>
								</div>
							</div>
						</div>

						<div class="stili__slide-name">
							<h2>Scandinavian</h2>
							<p>Scandinavian</p>
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
						<p class="about__text">This is a turnkey fit-out of your flat.</p>
						<p class="about__text">Each of our design packages can be chosen in the four styles presented: loft, minimalism, Scandinavian, contemporary.</p>
						<p class="about__text">Our designers have prepared a selection of wallpaper, laminate flooring, lighting, doors, furniture surfaces and much more. All materials come from leading European manufacturers and are the best in terms of price/quality ratio.</p>
						<p class="about__text">The 3D visualisations below show examples of interior designs in our interior design packages that you can order now!</p>
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
					<h2 class="title__title">Style</h2>
					<span class="title__text">Choose your style</span>
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
							<h2>styles</h2>
							<h3>Get choice of finish materials</h3>
						</div>
						<p class="order__content-text">Materials are chosen in cooperation with our design and logistics department, the best on price/quality ratio.</p>
						<div class="order__list">
							<p class="order__list-title">Our designers have prepared a selection of finish materials in 4 styles:</p>
							<ul class="order__list-list">
								<li>Loft</li>
								<li>Minimalism</li>
								<li>Contemporary</li>
								<li>Scandinavian</li>
							</ul>
						</div>
						<div class="order__content-btns">
							<a href="https://forroom.site/katalog" class="btn btn_big-fill">selection of materials</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio -->

	       <!-- вывод секции portfolio -->
    <?php echo get_template_part( 'template-parts/content', 'portfolio-en' ); ?>

 <!-- вывод секции desinger-section -->
    <?php echo get_template_part( 'template-parts/content', 'desinger-section-en' ); ?>
		
		<?php get_footer('en'); ?> 