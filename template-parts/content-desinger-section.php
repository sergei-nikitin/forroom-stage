	<!-- Designer -->

		<section class="designer">
			<div class="designer__content">
				<div class="designer__title">
					<h2>дизайнер</h2>
					<h3>бесплатный Выезд дизайнера</h3>
				</div>
				<div class="designer__content-body">
					<div class="designer__list">
						<p class="designer__list-text">К вам на объект приедет дизайнер, который поможет вам:</p>
						<ul class="designer__list-list">
							<li><span class="iconify" data-icon="la:check"></span><p>Выбрать материалы и оборудование</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Проконсультирует по видам работ и их очерёдности</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Сориентирует по стоимости и срокам</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Сделать точный замер</p></li>
						</ul>
					</div>
					<form data-analitic-designer="form-footer" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="designer__form ajax_form">
					
					 <input type="hidden" name="action" value="answer_your_questions">
           <input type="hidden" name="title" value="Форма обратной связи (Выезд дизайнера)">
					 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<label>
							<div class="block-input">
								<input id="intl-tel" type="tel" name="phone" />
								<span id="valid-msg" class="hide"></span>
								<span id="error-msg" class="hide"></span>
								<!-- <input required type="tel" name="phone" data-tel-input placeholder="+380 (__) ___ - __ - __" maxlength="20"
          minlength="8"> -->
								<p class="block-input__text">Неверный формат номера</p>
							</div>
						</label>
						<label>
							<span>Выберите удобный способ связи</span>
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
					
						<button  type="submit" class="btn btn_big btn-submit">подать заявку</button>
						<!-- <button type="submit" class="btn btn_big" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form-footer'})">подать заявку</button> -->
					</form>
				</div>
			</div>

			<div class="designer__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/designer.jpg" alt="designer" class="ib_use">
				<div class="designer__image-info">
					<p class="designer__image-name">Пожар Николай</p>
					<p class="designer__image-position">Дизайнер</p>
				</div>
			</div>
		</section>