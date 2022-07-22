	<!-- Doubt -->

		<section class="doubt">
			<div class="doubt__content">
				<div class="doubt__title">
					<h2>ответим на вопросы</h2>
					<h3>контакты</h3>
				</div>
				<p class="doubt__text">Приходите на экскурсию в шоу-рум или проконсультируйтесь с нашим экспертом. Мы знаем, как сделать ремонт приятной заботой без стрессов.</p>
				<div class="doubt__inner">
					<form data-analitic="form-main" data-id="form-footer-main" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="doubt__form ajax_form answ-questions">
           <input type="hidden" name="action" value="answer_your_questions">
                        <input type="hidden" name="title" value="Форма главная подвал + о нас (ответим на вопросы)">
						 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">						
						<div class="block-input block-input_white">
								<input id="intl-tel" type="tel" name="phone" />
								<span id="valid-msg" class="hide"></span>
								<span id="error-msg" class="hide"></span>
							<!-- <input required type="tel" name="phone" data-tel-input placeholder="+380 (__) ___ - __ - __" maxlength="20"
          minlength="8"> -->
					<!-- class="success error" -->
							<p class="block-input__text">Неверный формат номера</p>
						</div>
					
						<div class="doubt__form-btn">
							<button type="submit" class="btn btn_big-fill btn-submit">обратная связь</button>
							<!-- <button type="submit" class="btn btn_big-fill" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form-main'})">обратная связь</button> -->
						</div>

					</form>
					<ul class="doubt__socials">
						<li><a href="http://t.me/ForRoomservice_bot"><span class="iconify" data-icon="la:telegram"></span></a></li>
						<li><a href="#"><span class="iconify" data-icon="la:viber"></span></a></li>
						<li><a href="#"><span class="iconify" data-icon="la:whatsapp"></span></a></li>
					</ul>
					<div class="doubt__info">
						<p class="doubt__info-text">ТРЦ “МЕГАДОМ”</p>
						<address class="doubt__info-address">ул. Толбухина 135</address>
						<p class="doubt__info-time">Пн-Пт 10:00 – 20:00</p>
					</div>
				</div>
			</div>

			<div class="doubt__map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.0939098411404!2d30.728660415589932!3d46.42701817912411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6331d058fefa9%3A0xd314fe003772ef4a!2z0KTQvtGA0YDRg9C8IC0g0YDQtdC80L7QvdGC0L3Qvi3RgdGC0YDQvtC40YLQtdC70YzQvdCw0Y8g0LrQvtC80L_QsNC90LjRjw!5e0!3m2!1sru!2sua!4v1635787401257!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</section>