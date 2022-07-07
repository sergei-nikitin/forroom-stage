		<!-- Call Popup -->

		<div id="call-popup" class="base-popup popup">
			<div class="base-popup__body popup__body">
				<div class="base-popup__close popup__close">
					<span class="iconify" data-icon="ic:baseline-close"></span>
				</div>

				<div class="base-popup__inner">
					<form action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="base-popup__form ajax_form">
           <input type="hidden" name="action" value="cb_form">
           <input id="form-title" type="hidden" name="title" value="Форма обратной связи">
           <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<h3 class="base-popup__title">Заполните форму, и наш менеджер свяжется с вами для уточнения всех интересующих вас вопросов</h3>
						<div class="base-popup__inputs">
							<label>
								<span>Контактные данные</span>
								<div class="block-input">
									<input data-tel-input required type="tel" name="phone" class="base-popup__tel" placeholder="+380 (__) ___ - __ - __"><!-- class="success error" -->
									<p class="block-input__text">Неверный формат номера</p>
								</div>
							</label>
							<label>
								<span>Удобный вид связи</span>
								<div class="base-popup__select">
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
								</div>
							</label>
						</div>
							<input name="interest" type="hidden" class="hidden-input-actions">
						<button id="call-popup-btn" type="submit" class="btn btn_big-fill base-popup__btn">оставить заявку</button>
					</form>
				</div>
			</div>
		</div>

		<!-- Сonfirm Popup -->

		<div id="confirm-popup" class="base-popup popup">
			<div class="base-popup__body popup__body">
				<div class="base-popup__close popup__close">
					<span class="iconify" data-icon="ic:baseline-close"></span>
				</div>

				<div class="base-popup__inner">
					<form action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="base-popup__form ajax_form">
           <input type="hidden" name="action" value="jk_form">
           <input  id="form-title" type="hidden" name="title" value="Выбор ЖК новострой">
												 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<h3 class="base-popup__title">Заполните форму, и наш менеджер свяжется с вами для уточнения всех интересующих вас вопросов</h3>
						<div class="base-popup__inputs">
							<label>
								<span>Выберите планировку</span>
								<div class="base-popup__select">
									<div class="block-select" data-placeholder="Планировка">
										<input class="block-select__hidden" type="hidden" name="areacount" value="">
										<div class="block-select__nav">
											<p class="block-select__selected"></p>
											<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
										</div>
										<div class="block-select__list">
											<span value="1">1-комн. 30-40 кв.м.</span>
											<span value="1">1-комн. 40-50 кв.м.</span>
											<span value="3">2-комн. 50-60 кв.м.</span>
											<span value="4">2-комн. 60-70 кв.м.</span>
											<span value="4">3-комн. 60-80 кв.м.</span>
											<span value="6">4-комн и больше</span>
										</div>
									</div>
								</div>
							</label>
							<label>
								<span>Выбери пакет ремонта</span>
								<div class="base-popup__select">
									<div class="block-select" data-placeholder="Пакет ремонта">
										<input class="block-select__hidden" type="hidden" name="paket" value="">
										<div class="block-select__nav">
											<p class="block-select__selected"></p>
											<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
										</div>
										<div class="block-select__list">
											<span value="0">White Box $ 150/кв.м.</span>
											<span value="1">Базовый $ 290/кв.м.</span>
											<span value="2">Оптимальный $ 390/кв.м.</span>
											<span value="3">Максимальный $ 490/кв.м.</span>
											<span value="4">Индивидуальный от $ 150/кв.м.</span>
										</div>
									</div>
								</div>
							</label>
							<label>
								<span>Контактные данные</span>
								<div class="block-input">
									<input data-tel-input required type="tel" name="phone" class="base-popup__tel" placeholder="+380 (__) ___ - __ - __"><!-- class="success error" -->
									<p class="block-input__text">Неверный формат номера</p>
								</div>
							</label>
							<label>
								<span>Удобный вид связи</span>
								<div class="base-popup__select">
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
								</div>
							</label>
						</div>
							<input name="interest" type="hidden" class="hidden-input-actions">
						<button id="btn-popap-novostroy" type="submit" class="btn btn_big-fill base-popup__btn">оставить заявку</button>
					</form>
				</div>
			</div>
		</div>