	<!-- Doubt -->

		<section class="doubt">
			<div class="doubt__content">
				<div class="doubt__title">
					<h2>We will answer any questions</h2>
					<h3>contacts</h3>
				</div>
				<p class="doubt__text">Come and take a tour of the showroom, or speak to one of our experts. We know how to make your fit-out a stress-free experience.</p>
				<div class="doubt__inner">
					<form data-analitic="form-main" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="doubt__form ajax_form answ-questions">
           <input type="hidden" name="action" value="answer_your_questions">
            <input type="hidden" name="title" value="Форма главная подвал + о нас (ответим на вопросы) - EN">
						 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<div class="block-input block-input_white">
							<input required type="tel" name="phone" data-tel-input placeholder="+380 (__) ___ - __ - __"><!-- class="success error" -->
							<p class="block-input__text">Invalid number format</p>
						</div>
						<div class="doubt__form-btn">
							<button type="submit" class="btn btn_big-fill">request a call</button>
							<!-- <button type="submit" class="btn btn_big-fill" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form-main'})">request a call</button> -->
						</div>
					</form>
					<ul class="doubt__socials">
						<li><a href="http://t.me/ForRoomservice_bot"><span class="iconify" data-icon="la:telegram"></span></a></li>
						<li><a href="#"><span class="iconify" data-icon="la:viber"></span></a></li>
						<li><a href="#"><span class="iconify" data-icon="la:whatsapp"></span></a></li>
					</ul>
					<div class="doubt__info">
						<p class="doubt__info-text">MEGADOM shopping mall</p>
						<address class="doubt__info-address">135 Tolbukhina St.</address>
						<p class="doubt__info-time">Mon. - Fri. 10am – 10pm</p>
					</div>
				</div>
			</div>

			<div class="doubt__map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.0939098411404!2d30.728660415589932!3d46.42701817912411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6331d058fefa9%3A0xd314fe003772ef4a!2z0KTQvtGA0YDRg9C8IC0g0YDQtdC80L7QvdGC0L3Qvi3RgdGC0YDQvtC40YLQtdC70YzQvdCw0Y8g0LrQvtC80L_QsNC90LjRjw!5e0!3m2!1sru!2sua!4v1635787401257!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</section>