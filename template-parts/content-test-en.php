
		<!-- Test Popup -->

		<div id="test-popup" data-max-show-count="1" data-seconds-between-showings="300" class="test-popup popup">
			<form data-analitic="test-final" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="test-popup__body popup__body ajax_form">
      <input type="hidden" name="action" value="test_popup">
       <input type="hidden" name="title" value="Пройти тест (Финал) - EN">
			 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>пройди тест</h2> -->
							<h3>Answer just 8 questions and get a gift</h3>
						</div>

						<div class="test-popup__steps">
							<span>01</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Which property are you interested to fit out?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="object" value="Новостройка">
									<span>New building</span>
								</label>
								<label>
									<input type="radio" name="object" value="Вторичное жильё">
									<span>Second housing</span>
								</label>
								<label>
									<input type="radio" name="object" value="Дома старше 30 лет">
									<span>Homes older than 30 years</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/test-popup/1.jpg" alt="1" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>общая площадь</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>02</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Specify total floor area</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="area" value="30-45 кв.м.">
									<span>30-45 m²</span>
								</label>
								<label>
									<input type="radio" name="area" value="45-60 кв.м.">
									<span>45-60 m²</span>
								</label>
								<label>
									<input type="radio" name="area" value="60-75 кв.м.">
									<span>60-75 m²</span>
								</label>
								<label>
									<input type="radio" name="area" value="75-100 кв.м.">
									<span>75-100 m²</span>
								</label>
								<label>
									<input type="radio" name="area" value="Более 100 кв.м.">
									<span>Over 100 m²</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
							<img src="<?php echo get_template_directory_uri() ?>/source/new-img//test-popup/2.jpg" alt="2" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>дизайн-проект</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>03</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Do you have a complete design project?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="design" value="Да">
									<span>Yes</span>
								</label>
								<label>
									<input type="radio" name="design" value="Нет">
									<span>No</span>
								</label>
								<label>
									<input type="radio" name="design" value="Планирую заказать">
									<span>I plan to order</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img//test-popup/3.jpg" alt="3" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>материалы</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>04</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>What price range of materials are you interested in?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="materials" value="Эконом">
									<span>Economy</span>
								</label>
								<label>
									<input type="radio" name="materials" value="Стандарт">
									<span>Standard</span>
								</label>
								<label>
									<input type="radio" name="materials" value="Премиум">
									<span>Premium</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img//test-popup/4.jpg" alt="4" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>старт работ</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>05</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>When do you want to start work?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="start" value="Срочно">
									<span>Urgent</span>
								</label>
								<label>
									<input type="radio" name="start" value="В этом месяце">
									<span>This month</span>
								</label>
								<label>
									<input type="radio" name="start" value="Через месяц-два">
									<span>In a month or two</span>
								</label>
								<label>
									<input type="radio" name="start" value="Пока прицениваюсь">
									<span>I'm just estimating</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/test-popup/5.jpg" alt="5" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>цена-качество</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>06</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Which is your preferred option?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="price" value="Хочу сделать и забыть">
									<span>I want to get it done and left behind</span>
								</label>
								<label>
									<input type="radio" name="price" value="Подешевле и побыстрее">
									<span>Cheaper and quicker</span>
								</label>
								<label>
									<input type="radio" name="price" value="Золотая середина, цена-качество">
									<span>Price-performance-wise</span>
								</label>
								<label>
									<input type="radio" name="price" value="Важны сроки выполнения">
									<span>Deadlines are important</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/test-popup/6.jpg" alt="6" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>подарок</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>07</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Choose your gift</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="present" value="Дизайн-проект">
									<span>Design project</span>
								</label>
								<label>
									<input type="radio" name="present" value="Скидка $3/кв.м.">
									<span>Discount $3/m2</span>
								</label>
								<label>
									<input type="radio" name="present" value="Подогрев пола в ванну">
									<span>Underfloor heating for bathroom</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/test-popup/7.jpg" alt="7" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide test-popup__slide_contacts">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>контакты</h2> -->
						</div>

						<div class="test-popup__steps">
							<span>08</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions test-popup__questions_contacts">
							<h4>We will assign your gift to the indicated number as well as send you an estimate for the cost of fit-out</h4>
							<div class="test-popup__form">
								<label>
									<div class="block-input">
										<input type="tel" name="phone" data-tel-input required placeholder="+380 (__) ___ - __ - __"><!-- class="success error" -->
										<p class="block-input__text">Неверный формат номера</p>
									</div>
								</label>
								<label>
									<span>Convenient form of communication</span>
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
							</div>
						</div>

						<div class="test-popup__btns">
							<button type="submit" class="test-popup__submit btn btn_big-fill">Get a gift</button>
							<!-- <button type="submit" class="test-popup__submit btn btn_big-fill" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'test-final'})">Get a gift</button> -->
							<div class="btn btn_big test-popup__prev">back</div>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/test-popup/8.jpg" alt="8" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>

				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<!-- <h2 class="test-popup__head">поздравляем</h2> -->
						<h3 class="test-popup__subtitle">you have successfully passed the test and received your gift</h3>
						<p class="test-popup__text">The gift is associated to your phone number and is valid for 30 days</p>

						<div class="test-popup__btns test-popup__btns_final">
							<a href="https://www.forroom.com.ua/en/new-home/" class="btn btn_big-fill test-popup__home">Home</a>
						</div>
					</div>
					</div>

					<div class="test-popup__image ib">
						<img src="<?php echo get_template_directory_uri() ?>/source/new-img/test-popup/9.jpg" alt="9" class="ib_use">
						<div class="test-popup__close popup__close">
							<span class="iconify" data-icon="ic:baseline-close"></span>
						</div>
					</div>
				</div>
			</form>
		</div>