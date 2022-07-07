<?php
/*
Template Name: Оплата EN

*/

// … остальной код шаблона
?>

<?php get_header('en'); ?>

<!-- Payment -->

		<section class="payment payment_show-carts nav-add-margin">
			<div class="title anim-item title_left">
				<h2 class="title__title">Payment</h2>
				<span class="title__text">Payment</span>
			</div>

			<div class="payment__content">
				<div class="payment__carts">
					<div class="payment__cart anim-item payment-sizer">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">10%</p>
							<h4 class="payment__cart-title">Signing the contract</h4>
							<p class="payment__cart-text">After signing the contract, we create a personal account for you and assign you a working team. You pay 10% for the first stage of fit-out, the preparatory work on site is initiated and work begins on the design project.</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">40%</p>
							<h4 class="payment__cart-title">Rough-in works</h4>
							<p class="payment__cart-text">After the approval of the design project and the completion of preparatory work on site, you pay for the second phase of repair in the amount of 40%. We proceed with all roughing-up works</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">40%</p>
							<h4 class="payment__cart-title">Finishing work</h4>
							<p class="payment__cart-text">You choose the finishing materials together with the designer and pay for the third stage at a rate of 40%. This stage includes wallpapering, installation of laminate, tiles, lighting, doors, sanitary ware, etc.</p>
						</div>
					</div>

					<div class="payment__cart anim-item">
						<div class="payment__cart-wrap">
							<p class="payment__cart-num">10%</p>
							<h4 class="payment__cart-title">Acceptance of the project</h4>
							<p class="payment__cart-text">You accept the completed site and sign the acceptance act, after which you pay the remaining 10% of the price and get a warranty certificate for 5 years</p>
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
					<h2>Credit</h2>
					<h3>Credit</h3>
				</div>

				<p class="credit__text">You can take credit or use an instalment payment to pay for your fit-out in one of our partner banks</p>
				<p class="credit__price">Up to 400 000₴</p>
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
				<p class="gift__text">Get a free design project when you order any package!</p>
				<div class="gift__btn">
					<a href="https://forroom.com.ua/en/packages/" class="btn btn_big-fill">choose a fit-out package</a>
				</div>
			</div>

			<div class="gift__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/payment/gift.jpg" alt="gift" class="ib_use">
			</div>
		</section>

<?php get_footer('en'); ?>