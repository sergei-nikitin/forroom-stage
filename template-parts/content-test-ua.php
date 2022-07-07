
		<!-- Test Popup -->

		<div id="test-popup" data-max-show-count="1" data-seconds-between-showings="300" class="test-popup popup">
			<form data-analitic="test-final" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="test-popup__body popup__body ajax_form">
      <input type="hidden" name="action" value="test_popup">
      <input type="hidden" name="title" value="Пройти тест (Финал) - UA">
			 <input id="page-url" type="hidden" name="page-url" value="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
				<div class="test-popup__slide">
					<div class="test-popup__content">
					<div class="test-popup__inner">
						<div class="test-popup__title">
							<!-- <h2>пройди тест</h2> -->
							<h3>Дайте відповідь всього на 8 питань і отримай подарунок</h3>
						</div>

						<div class="test-popup__steps">
							<span>01</span>
							<div class="test-popup__dots"></div>
						</div>

						<div class="test-popup__questions">
							<h4>Ремонт якого об'єкту вас цікавить?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="object" value="Новостройка">
									<span>Новобудова</span>
								</label>
								<label>
									<input type="radio" name="object" value="Вторичное жильё">
									<span>Вторинне житло</span>
								</label>
								<label>
									<input type="radio" name="object" value="Дома старше 30 лет">
									<span>Будинки старші 30 років</span>
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
							<h4>Вкажіть загальну площу</h4>
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
									<span>Понад 100 кв.м.</span>
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
							<h4>У вас є готовий дизайн-проєкт?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="design" value="Да">
									<span>Так</span>
								</label>
								<label>
									<input type="radio" name="design" value="Нет">
									<span>Ні</span>
								</label>
								<label>
									<input type="radio" name="design" value="Планирую заказать">
									<span>Планую замовити</span>
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
							<h4>Матеріали якої цінової категорії вас цікавлять?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="materials" value="Эконом">
									<span>Економ</span>
								</label>
								<label>
									<input type="radio" name="materials" value="Стандарт">
									<span>Стандарт</span>
								</label>
								<label>
									<input type="radio" name="materials" value="Премиум">
									<span>Преміум</span>
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
							<h4>Коли плануєте розпочати роботи?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="start" value="Срочно">
									<span>Терміново</span>
								</label>
								<label>
									<input type="radio" name="start" value="В этом месяце">
									<span>Цього місяця</span>
								</label>
								<label>
									<input type="radio" name="start" value="Через месяц-два">
									<span>Через місяць-два</span>
								</label>
								<label>
									<input type="radio" name="start" value="Пока прицениваюсь">
									<span>Поки прицінююсь</span>
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
							<h4>Який варіант вам більш підходить?</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="price" value="Хочу сделать и забыть">
									<span>Хочу зробити та забути</span>
								</label>
								<label>
									<input type="radio" name="price" value="Подешевле и побыстрее">
									<span>Подешевше і швидше</span>
								</label>
								<label>
									<input type="radio" name="price" value="Золотая середина, цена-качество">
									<span>Золота середина, ціна-якість</span>
								</label>
								<label>
									<input type="radio" name="price" value="Важны сроки выполнения">
									<span>Важливі терміни виконання</span>
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
							<h4>Виберіть подарунок</h4>
							<div class="test-popup__list">
								<label>
									<input type="radio" name="present" value="Дизайн-проект">
									<span>Дизайн-проєкт</span>
								</label>
								<label>
									<input type="radio" name="present" value="Скидка $3/кв.м.">
									<span>Знижка $3/кв.</span>
								</label>
								<label>
									<input type="radio" name="present" value="Подогрев пола в ванну">
									<span>Підігрів підлоги у ванну</span>
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
							<h4>Ми закріпимо ваш подарунок за вказаним номером, а також надішлемо попередній розрахунок вартості ремонту.</h4>
							<div class="test-popup__form">
								<label>
									<div class="block-input">
										<input type="tel" name="phone" data-tel-input data-test-input  placeholder="+380 (__) ___ - __ - __" required><!-- class="success error" -->
										<p class="block-input__text">Неправильний формат номера</p>
									</div>
								</label>
								<label>
									<span>Зручний спосіб зв'язку</span>
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
							<button type="submit" class="test-popup__submit btn btn_big-fill">Отримати подарунок</button>
							<!-- <button type="submit" class="test-popup__submit btn btn_big-fill" onclick="window.dataLayer = window.dataLayer || []; window.dataLayer.push({'event': 'test-final'})">Отримати подарунок</button> -->
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
						<h3 class="test-popup__subtitle">Ви успішно пройшли тест і одержали подарунок</h3>
						<p class="test-popup__text">Подарунок закріплений за номером телефону і дійсний протягом 30 днів</p>

						<div class="test-popup__btns test-popup__btns_final">
							<a href="https://www.forroom.com.ua/" class="btn btn_big-fill test-popup__home">На головну</a>
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