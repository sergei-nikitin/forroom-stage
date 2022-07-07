		<!-- Call Popup -->

		<div id="call-popup" class="base-popup popup">
			<div class="base-popup__body popup__body">
				<div class="base-popup__close popup__close">
					<span class="iconify" data-icon="ic:baseline-close"></span>
				</div>

				<div class="base-popup__inner">
					<form action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="base-popup__form ajax_form">
           <input type="hidden" name="action" value="cb_form">
           <input  id="form-title" type="hidden" name="title" value="Форма обратной связи EN">
					 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<h3 class="base-popup__title">Fill out the form and our manager will contact you to clarify all your questions</h3>
						<div class="base-popup__inputs">
							<label>
								<span>Contact details</span>
								<div class="block-input">
									<input data-tel-input  required type="tel" name="phone" class="base-popup__tel" placeholder="+380 (__) ___ - __ - __"><!-- class="success error" -->
									<p class="block-input__text">Invalid number format</p>
								</div>
							</label>
							<label>
								<span>Convenient form of communication</span>
								<div class="base-popup__select">
									<div class="block-select">
										<input class="block-select__hidden" type="hidden" name="communication" value="">
										<div class="block-select__nav">
											<p class="block-select__selected"></p>
											<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
										</div>
										<div class="block-select__list">
											<span data-value="Phone" data-selected="selected">Phone</span>
											<span data-value="Telegram">Telegram</span>
											<span data-value="WhatsApp">WhatsApp</span>
											<span data-value="Viber">Viber</span>
										</div>
									</div>
								</div>
							</label>
						</div>
							<input name="interest" type="hidden" class="hidden-input-actions">
						<button id="call-popup-btn" type="submit" class="btn btn_big-fill base-popup__btn">submit your application</button>
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
           <input  id="form-title" type="hidden" name="title" value="Выбор ЖК EN">
					 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<h3 class="base-popup__title">Fill out the form and our manager will contact you to clarify all your questions</h3>
						<div class="base-popup__inputs">
							<label>
								<span>Choose a layout</span>
								<div class="base-popup__select">
									<div class="block-select" data-placeholder="Layout">
										<input class="block-select__hidden" type="hidden" name="areacount" value="">
										<div class="block-select__nav">
											<p class="block-select__selected"></p>
											<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
										</div>
										<div class="block-select__list">
											<span value="1">1-room 30-40 sq.m.</span>
											<span value="1">1-room 40-50 sq.m.</span>
											<span value="3">2-room 50-60 sq.m.</span>
											<span value="4">2-room 60-70 sq.m.</span>
											<span value="4">3-room 60-80 sq.m.</span>
											<span value="6">4-room and more</span>
										</div>
									</div>
								</div>
							</label>
							<label>
								<span>Choose a repair package</span>
								<div class="base-popup__select">
									<div class="block-select" data-placeholder="Repair package">
										<input class="block-select__hidden" type="hidden" name="paket" value="">
										<div class="block-select__nav">
											<p class="block-select__selected"></p>
											<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
										</div>
										<div class="block-select__list">
											<span value="0">White Box $ 150/sq.m.</span>
											<span value="1">Basic $ 290/sq.m.</span>
											<span value="2">Optimal $ 390/sq.m.</span>
											<span value="3">Maximum $ 490/sq.m.</span>
											<span value="4">Individual from $ 150/sq.m.</span>
										</div>
									</div>
								</div>
							</label>
							<label>
								<span>Contact details</span>
								<div class="block-input">
									<input data-tel-input required type="tel" name="phone" class="base-popup__tel" placeholder="+380 (__) ___ - __ - __"><!-- class="success error" -->
									<p class="block-input__text">Invalid number format</p>
								</div>
							</label>
							<label>
								<span>Convenient form of communication</span>
								<div class="base-popup__select">
									<div class="block-select">
										<input class="block-select__hidden" type="hidden" name="communication" value="">
										<div class="block-select__nav">
											<p class="block-select__selected"></p>
											<span class="iconify" data-icon="ic:baseline-arrow-drop-down"></span>
										</div>
										<div class="block-select__list">
											<span data-value="Phone" data-selected="selected">Phone</span>
											<span data-value="Telegram">Telegram</span>
											<span data-value="WhatsApp">WhatsApp</span>
											<span data-value="Viber">Viber</span>
										</div>
									</div>
								</div>
							</label>
						</div>
							<input name="interest" type="hidden" class="hidden-input-actions">
						<button id="btn-popap-novostroy" type="submit" class="btn btn_big-fill base-popup__btn">submit your application</button>
					</form>
				</div>
			</div>
		</div>