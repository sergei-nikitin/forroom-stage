	<!-- Designer -->

		<section class="designer">
			<div class="designer__content">
				<div class="designer__title">
					<h2>дизайнер</h2>
					<h3>БЕЗОПЛАТНИЙ ВИЇЗД ДИЗАЙНЕРА</h3>
				</div>
				<div class="designer__content-body">
					<div class="designer__list">
						<p class="designer__list-text">До вас на об'єкт приїде дизайнер, який допоможе вам:</p>
						<ul class="designer__list-list">
							<li><span class="iconify" data-icon="la:check"></span><p>Вибрати матеріали та обладнання</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Проконсультує за видами робіт та їх черговістю</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Зорієнтує за вартістю та термінами</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Зробити точний замір</p></li>
						</ul>
					</div>
					<form data-analitic-designer="form-footer" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="designer__form ajax_form">
					 <input type="hidden" name="action" value="answer_your_questions">
           <input type="hidden" name="title" value="Форма обратной связи (Выезд дизайнера) - UA">
					 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<label>
							<div class="block-input">
								<input type="tel" name="phone" data-tel-input placeholder="+380 (__) ___ - __ - __" required>
								<p class="block-input__text">Неверный формат номера</p>
							</div>
						</label>
						<label>
							<span>Вибрати зручний спосіб зв'язку</span>
							<div class="block-select">
									<input class="block-select__hidden" type="hidden" name="communication" value="">
								<div class="block-select__nav">
									<p class="block-select__selected"></p>
									<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
								</div>
								<div class="block-select__list">
									<span data-value="Phone" data-selected="selected">Телефон</span>
									<span data-value="Telegram">Telegram</span>
									<span data-value="WhatsApp">WhatsApp</span>
									<span data-value="Viber">Viber</span>
								</div>
							</div>
						</label>
						<button type="submit" class="btn btn_big">ПОДАТИ ЗАЯВУ</button>
						<!-- <button type="submit" class="btn btn_big" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form-footer'})">ПОДАТИ ЗАЯВУ</button> -->
					</form>
				</div>
			</div>

			<div class="designer__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/designer.jpg" alt="designer" class="ib_use">
				<div class="designer__image-info">
					<p class="designer__image-name">Пожар Микола</p>
					<p class="designer__image-position">Дизайнер</p>
				</div>
			</div>
		</section>