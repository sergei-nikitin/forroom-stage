<?php
/*
Template Name: Оплата

*/

// … остальной код шаблона
?>

<?php get_header(); ?>

<!-- Payment -->

		<section class="payment payment_show-carts nav-add-margin">
			<div class="title anim-item title_left">
				<h2 class="title__title">Оплата</h2>
				<span class="title__text">Оплата</span>
			</div>

			<div class="payment__content">
				<div class="payment__carts">
					<div class="payment__cart anim-item payment-sizer">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">10%</p>
							<h4 class="payment__cart-title">Подписание договора</h4>
							<p class="payment__cart-text">После подписания договора мы создаём вам личный кабинет и назначаем рабочую группу. Вы оплачиваете первый этап ремонта в размере 10% инициируются подготовительные работы на объекте и начинается работа над создание дизайн-проекта</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">40%</p>
							<h4 class="payment__cart-title">Черновые работы</h4>
							<p class="payment__cart-text">После утверждения дизайн-проекта и завершения подготовительных работ на объекте, вы оплачиваете второй этап ремонта в размере 40%. Мы приступаем ко всем черновым работам</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">40%</p>
							<h4 class="payment__cart-title">Финишные работы</h4>
							<p class="payment__cart-text">Вы выбираете финишные материалы совместно с дизайнером и оплачиваете третий этап в размере 40%. На этом этапе осуществляется поклейка обоев, укладка ламината и плитки, установка осветительных приборов, монтаж дверей, санфаянса и т.д.</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">10%</p>
							<h4 class="payment__cart-title">Приём объекта</h4>
							<p class="payment__cart-text">Вы принимаете полностью готовый объект и подписываете акт приёма-передачи выполненных работ, после чего оплачиваете оставшиеся 10% суммы и получаете гарантийный сертификат на 5 лет</p>
						</div>
					</div>

					
				
				</div>
			</div>
		</section>

		<!-- Credit -->

		<section class="credit">
			<div class="credit__image">
				<div class="credit__image-wrap ib">
					<img src="<?php echo get_template_directory_uri() ?>/source/new-img/payment/credit.jpg" alt="credit" class="ib_use">
				</div>
			</div>

			<div class="credit__content">
				<div class="credit__title">
					<h2>Кредит</h2>
					<h3>Кредитование</h3>
				</div>

				<p class="credit__text">Вы можете взять кредит или получить рассрочку на ремонт в одном из наших банков-партнёров</p>
				<p class="credit__price">до 400 000₴</p>
				<div class="credit__banks">
					<div class="credit__bank">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/payment/logo-bank1.jpg" alt="2">
					</div>
					<div class="credit__bank">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/payment/logo-bank2.jpg" alt="1">
					</div>
				</div>
			</div>
		</section>

		<!-- Gift -->

		<section class="gift">
			<div class="gift__content">
				<p class="gift__text">Получите дизайн-проект в подарок при заказе любого пакетного решения!</p>
				<div class="gift__btn">
					<a href="https://forroom.com.ua/ru/packages/" class="btn btn_big-fill">выбрать пакет ремонта</a>
				</div>
			</div>

			<div class="gift__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/payment/gift.jpg" alt="gift" class="ib_use">
			</div>
		</section>

<?php get_footer(); ?>