<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

   <?php wp_head(); ?>

	<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting.css" />
	<link rel="stylesheet" href="https://unpkg.com/splitting/dist/splitting-cells.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<meta name="format-detection" content="telephone=no">

	<meta name="description" content="">
	<meta name="keywords" content="">



	<!-- Favicon -->
</head>
<body>
	<!-- <sctipt type="text/javascript">
		 window.dataLayer.push({
          'event': "form-main"
        });
	</sctipt> -->




<style>
	.dropdown{
		position: relative;
		left:0;
		padding: 0;
		margin:0;
	}
	.dropdown a::after{
		display: none;
	}

	.dropdown:hover{
		overflow: visible;
	}
	.dropdown:hover .dropdown-menu{
		  top:65%;
			display: block;
			z-index: 100;
	}
	#lang_choice_1{
		background: transparent;
		color: #000;
	}
	.nav__menu{
		margin-bottom:0;
	}
	.nav__menus .nav__menu li{
		margin-right:0;
	}
	.burger__list{
		display: flex;
		flex-direction: column;
		align-items: flex-end;
	}
	.mob-lang{
		display: flex;
		justify-content: end;
		
	}
	.mob-lang select{
		margin-left: auto;
		margin-right:12px;
	}
	.mob-lang #lang_choice_1{
		color: #fff;
	}
	.burger__list .dropdown:hover .dropdown-menu{
		right: 0;
		position: static;
		background: transparent;
		border: none;
		transition: all 1s ease;
		text-align: end;
	}
	.burger__list .dropdown-item:hover{
	background: transparent;
	border-bottom: 1px solid #fff;
	}
	.burger__list	.dropdown-item{
      color: #fff;
		}
	.nav-remont{
		display: flex;
		align-items: center;
	}
	.nav-arrow{
		display: flex;
		align-items: center;
		margin-left: 8px;
		margin-top: 5px;
		transform: rotate(90deg);
	}

	.block-input{
		display:flex;
		flex-direction: column;

	}


		.iti-flag {background-image: url("<?php echo get_template_directory_uri() ?>/source/new-img/flags.png");}

		@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
			.iti-flag {background-image: url("<?php echo get_template_directory_uri() ?>/source/new-img/flags@2x.png");}
		}


	</style>
		<div class="wrapper">
		<!-- Nav -->

		<nav class="nav fixed-padding nav_menus anim-item" id="nav">
			<div class="nav__burger burger" id="nav-burger">
				<div class="nav-add-padding burger__bg"></div>
			
				<div class="nav-add-padding burger__menu">
					<div class="burger__menu-wrap">
													<?php wp_nav_menu( [
	'theme_location'  => 'header-mob-menu',
	'container'       => false,
	'menu_class'      => 'burger__list',
	'menu_id'         => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 4,
	'walker'          => new bootstrap_4_walker_nav_menu(),
] ); ?>

					<ul class="mob-lang" style=" margin-bottom: 0; background-color: transparent; padding: 0 38px; color: #fff">
<?php pll_the_languages( array('dropdown'=>1, 'hide_current'=>1) ); ?>
</ul>
					
						<div class="burger__info">
							<a href="tel:+380487955575" class="burger__phone"><span class="iconify" data-icon="ic:baseline-phone"></span> +38 (048) 795 55 75</a>
							<ul class="burger__social">
								<li><a href="https://instagram.com/forroom.com.ua?igshid=9gvn1yx7vmsc"><span class="iconify" data-icon="bx:bxl-instagram-alt"></span></a></li>
								<li><a href="https://facebook.com/forroom.com.ua/"><span class="iconify" data-icon="ic:baseline-facebook"></span></a></li>
								<li><a href="http://t.me/ForRoomservice_bot"><span class="iconify" data-icon="ic:baseline-telegram"></span></a></li>
								<li><a href="https://www.youtube.com/channel/UCw_ZIsS18izHhArD7vI2vNQ"><span class="iconify" data-icon="entypo-social:youtube-with-circle"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div  class="nav__body">
		

				<div class="nav__menus">
							<?php wp_nav_menu( [
	'theme_location'  => 'header-left',
	'container'       => false,
	'menu_class'      => 'nav__menu',
	'menu_id'         => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 4,
	'walker'          => new bootstrap_4_walker_nav_menu(),
] ); ?>

				<?php wp_nav_menu( [
	'theme_location'  => 'header-right',
	'container'       => false,
	'menu_class'      => 'nav__menu',
	'menu_id'         => false,
	'echo'            => true,
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => new bootstrap_4_walker_nav_menu(),
] ); ?>
			
				</div>

				<a href="https://www.dev8.website/" class="nav__logo">
					<img src="<?php echo get_template_directory_uri() ?>/source/new-img/forroom-black.png" alt="ForFoom">
				</a>			

				<div class="nav__btn">
					<span class="iconify" data-icon="la:bars"></span>
				</div>
				<div class="nav__close-btn">
					<span class="iconify" data-icon="ic:baseline-close"></span>
				</div>
			</div>
		</nav>