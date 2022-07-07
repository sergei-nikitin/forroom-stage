	<!-- Designer -->

		<section class="designer">
			<div class="designer__content">
				<div class="designer__title">
					<h2>designer</h2>
					<h3>Free designer's visit</h3>
				</div>
				<div class="designer__content-body">
					<div class="designer__list">
						<p class="designer__list-text">A designer will come to your site to help you:</p>
						<ul class="designer__list-list">
							<li><span class="iconify" data-icon="la:check"></span><p>Choose materials and equipment</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Advise you about the type of work and their order</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Guide you in cost and terms</p></li>
							<li><span class="iconify" data-icon="la:check"></span><p>Take precise measurements</p></li>
						</ul>
					</div>
					<form data-analitic-designer="form-footer" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="designer__form ajax_form">
					 <input type="hidden" name="action" value="answer_your_questions">
           <input type="hidden" name="title" value="Форма обратной связи (Выезд дизайнера) - EN">
					 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
						<label>
							<div class="block-input">
								<input required type="tel" name="phone" data-tel-input placeholder="+380 (__) ___ - __ - __">
								<p class="block-input__text">Invalid number format</p>
							</div>
						</label>
						<label>
							<span>Choose the best way to contact you</span>
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
						</label>
						<button type="submit" class="btn btn_big">submit a request</button>
						<!-- <button type="submit" class="btn btn_big" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'form-footer'})">submit a request</button> -->
					</form>
				</div>
			</div>

			<div class="designer__image ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/designer.jpg" alt="designer" class="ib_use">
				<div class="designer__image-info">
					<p class="designer__image-name">Pojar Nikolay</p>
					<p class="designer__image-position">Designer</p>
				</div>
			</div>
		</section>