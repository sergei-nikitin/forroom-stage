<?php
/*
Template Name: Оплата UA

*/

// … остальной код шаблона
?>

<?php get_header('ua'); ?>

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
							<h4 class="payment__cart-title">Підписання договору</h4>
							<p class="payment__cart-text">Після підписання договору ми створюємо особистий кабінет і призначаємо вам робочу групу. Ви оплачуєте перший етап ремонту в розмірі 10%, ініціюються підготовчі роботи на об'єкті та розпочинається робота над створенням дизайн-проєкту</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">40%</p>
							<h4 class="payment__cart-title">Чорнові роботи</h4>
							<p class="payment__cart-text">Після затвердження дизайн-проєкту та завершення підготовчих робіт на об'єкті ви оплачуєте другий етап ремонту в розмірі 40%. Ми приступаємо до всіх чорнових робіт</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">40%</p>
							<h4 class="payment__cart-title">Фінішні роботи</h4>
							<p class="payment__cart-text">Ви обираєте фінішні матеріали разом із дизайнером та оплачуєте третій етап у розмірі 40%. На цьому етапі здійснюється наклеювання шпалер, укладання ламінату та плитки, встановлення освітлювальних приладів, монтаж дверей, санфаянсу тощо</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">10%</p>
							<h4 class="payment__cart-title">Приймання об'єкту</h4>
							<p class="payment__cart-text">Ви приймаєте повністю готовий об'єкт і підписуєте акт прийняття-передання виконаних робіт, після чого оплачуєте 10% суми, що залишилася, і отримуєте гарантійний сертифікат на 5 років</p>
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
					<h2>КРЕДИТ</h2>
					<h3>КРЕДИТУВАННЯ</h3>
				</div>

				<p class="credit__text">Ви можете отримати кредит або взяти розстрочку на ремонт в одному з наших банків-партнерів</p>
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
				<p class="gift__text">Отримайте будь-який дизайн-проєкт у подарунок при замовленні будь-якого пакетного рішення!</p>
				<div class="gift__btn">
					<a href="https://forroom.com.ua/packages/" class="btn btn_big-fill">ВИБРАТИ ПАКЕТ РЕМОНТУ</a>
				</div>
			</div>

			<div class="gift__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/payment/gift.jpg" alt="gift" class="ib_use">
			</div>
		</section>

<?php get_footer('ua'); ?>