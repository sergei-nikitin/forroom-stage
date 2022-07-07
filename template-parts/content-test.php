
		<!-- Test Popup -->

		<div id="test-popup" data-max-show-count="1" data-seconds-between-showings="300" class="test-popup popup">
			<form data-analitic="test-final" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="test-popup__body popup__body ajax_form">
      <input type="hidden" name="action" value="test_popup">
       <input type="hidden" name="title" value="Пройти тест (финал)">
			 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>пройди тест</h2> -->
							<h3>Ответь всего на 8 вопросов и получи подарок</h3>
						</div>

						<div class="test-popup__steps">
							<span>01</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Ремонт какого объекта вас интересует?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="object" value="Новостройка">
									<span>Новостройка</span>
								</label>
								<label>
									<input type="radio" name="object" value="Вторичное жильё">
									<span>Вторичное жильё</span>
								</label>
								<label>
									<input type="radio" name="object" value="Дома старше 30 лет">
									<span>Дома старше 30 лет</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>Укажите общую площадь</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="area" value="30-45 кв.м.">
									<span>30-45 кв.м.</span>
								</label>
								<label>
									<input type="radio" name="area" value="45-60 кв.м.">
									<span>45-60 кв.м.</span>
								</label>
								<label>
									<input type="radio" name="area" value="60-75 кв.м.">
									<span>60-75 кв.м.</span>
								</label>
								<label>
									<input type="radio" name="area" value="75-100 кв.м.">
									<span>75-100 кв.м.</span>
								</label>
								<label>
									<input type="radio" name="area" value="Более 100 кв.м.">
									<span>Более 100 кв.м.</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>У вас есть готовый дизайн-проект?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="design" value="Да">
									<span>Да</span>
								</label>
								<label>
									<input type="radio" name="design" value="Нет">
									<span>Нет</span>
								</label>
								<label>
									<input type="radio" name="design" value="Планирую заказать">
									<span>Планирую заказать</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>Материалы какой ценовой категории вас интересуют?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="materials" value="Эконом">
									<span>Эконом</span>
								</label>
								<label>
									<input type="radio" name="materials" value="Стандарт">
									<span>Стандарт</span>
								</label>
								<label>
									<input type="radio" name="materials" value="Премиум">
									<span>Премиум</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>Когда планируете начать работы?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="start" value="Срочно">
									<span>Срочно</span>
								</label>
								<label>
									<input type="radio" name="start" value="В этом месяце">
									<span>В этом месяце</span>
								</label>
								<label>
									<input type="radio" name="start" value="Через месяц-два">
									<span>Через месяц-два</span>
								</label>
								<label>
									<input type="radio" name="start" value="Пока прицениваюсь">
									<span>Пока прицениваюсь</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>Какой вариант для вас предпочтителен?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="price" value="Хочу сделать и забыть">
									<span>Хочу сделать и забыть</span>
								</label>
								<label>
									<input type="radio" name="price" value="Подешевле и побыстрее">
									<span>Подешевле и побыстрее</span>
								</label>
								<label>
									<input type="radio" name="price" value="Золотая середина, цена-качество">
									<span>Золотая середина, цена-качество</span>
								</label>
								<label>
									<input type="radio" name="price" value="Важны сроки выполнения">
									<span>Важны сроки выполнения</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>Выберите подарок</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="present" value="Дизайн-проект">
									<span>Дизайн-проект</span>
								</label>
								<label>
									<input type="radio" name="present" value="Скидка $3/кв.м.">
									<span>Скидка $3/кв.м.</span>
								</label>
								<label>
									<input type="radio" name="present" value="Подогрев пола в ванну">
									<span>Подогрев пола в ванну</span>
								</label>
							</div>
						</div>

						<div class="test-popup__btn">
							<div class="btn btn_big test-popup__prev">назад</div>
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
							<h4>Мы закрепим ваш подарок за указанным номером, а так же отправим предварительный расчёт стоимости ремонта</h4>
							<div class="test-popup__form">
								<label>
									<div class="block-input">
										<input type="tel" name="phone" data-tel-input required placeholder="+380 (__) ___ - __ - __" maxlength="20"
          minlength="8"><!-- class="success error" -->
										<p class="block-input__text">Неверный формат номера</p>
									</div>
								</label>
								<label>
									<span>Удобный вид связи</span>
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
							</div>
						</div>

						<div class="test-popup__btns">
						
							<button type="submit" class="test-popup__submit btn btn_big-fill">Получить подарок</button>
							<!-- <button type="submit" class="test-popup__submit btn btn_big-fill" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'test-final'})">Получить подарок</button> -->
							<div class="btn btn_big test-popup__prev">назад</div>
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
						<h3 class="test-popup__subtitle">вы успешно прошли тест и получили подарок</h3>
						<p class="test-popup__text">Подарок закреплен за вашим номером телефона и действителен в течении 30 дней</p>

						<div class="test-popup__btns test-popup__btns_final">
							<a href="https://www.forroom.com.ua/ru/new-home" class="btn btn_big-fill test-popup__home">на главную</a>
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