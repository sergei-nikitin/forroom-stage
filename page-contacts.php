<?php
/*
Template Name: Контакты

*/

// … остальной код шаблона
?>

<?php get_header(); ?>

 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps' ); ?>

		<!-- Contacts -->

		<section class="contacts nav-add-padding">
			<div class="contacts__content">
				<div class="contacts__title">
					<h2>контакты</h2>
					<h3>контакты</h3>
				</div>

				<div class="block-tabs contacts__tabs">
					<div class="block-tabs__btns contacts__tabs-btns">
						<div class="block-tabs__btn contacts__tabs-btn" data-city-item="Одесса">Одесса</div>
						<div class="block-tabs__btn contacts__tabs-btn" data-city-item="Львов">Львов</div>
						<!-- <div class="block-tabs__btn contacts__tabs-btn" data-city-item="Киев">Киев</div> -->
					</div>

					<div class="contacts__tabs-tabs">
						<div class="block-tabs__tab contacts__tab">
							<div class="contacts__tab-wrap">
								<ul class="contacts__tab-list">
									<li>
										<span class="iconify" data-icon="la:phone"></span>
										<p><a href="tel:+380487955575">+38 (048) 795 55 75</a></p> 
									</li>
									<li>
										<span class="iconify" data-icon="la:map-marker-alt"></span>
										<p>ТРЦ «МЕГАДОМ», ул. Толбухина 135</p> 
									</li>
									<li>
										<span class="iconify" data-icon="la:clock-solid"></span>
										<p>Пн-Пт 10:00 – 20:00</p> 
									</li>
								</ul>
							</div>
						</div>

						<div class="block-tabs__tab contacts__tab">
							<div class="contacts__tab-wrap">
								<ul class="contacts__tab-list">
									<li>
										<span class="iconify" data-icon="la:phone"></span>
										<p><a href="tel:+380487955575">+38 (098) 318 35 79</a></p> 
									</li>
									<li>
										<span class="iconify" data-icon="la:map-marker-alt"></span>
										<p>Львов, ул. Профессора Буйко, 27</p>
									</li>
									<li>
										<span class="iconify" data-icon="la:clock-solid"></span>
										<p>Пн-Пт 10:00 – 20:00</p> 
									</li>
								</ul>
							</div>
						</div>

						<!-- <div class="block-tabs__tab contacts__tab">
							<div class="contacts__tab-wrap">
								<ul class="contacts__tab-list">
									<li>
										<span class="iconify" data-icon="la:phone"></span>
										<p><a href="tel:+380487955575">+38 (048) 795 55 75</a></p> 
									</li>
									<li>
										<span class="iconify" data-icon="la:map-marker-alt"></span>
										<p>ТРЦ «МЕГАДОМ», ул. Толбухина 135</p>
									</li>
									<li>
										<span class="iconify" data-icon="la:clock-solid"></span>
										<p>Пн-Пт 10:00 – 20:00</p> 
									</li>
									<li>
										<span class="iconify" data-icon="la:clock-solid"></span>
										<p>Пн-Пт 10:00 – 20:00</p> 
									</li>
									<li>
										<span class="iconify" data-icon="la:clock-solid"></span>
										<p>Пн-Пт 10:00 – 20:00</p> 
									</li>
								</ul>
							</div>
						</div> -->
					</div>
				</div>

				<div class="contacts__btn">
					<div id="btn-contacts" data-disable-test-popup data-open-popup="call-popup" class="btn btn_big-fill">обратная связь</div>
				</div>
			</div>

			<div class="contacts__maps">
				<div class="contacts__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.0939098411404!2d30.728660415589932!3d46.42701817912411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6331d058fefa9%3A0xd314fe003772ef4a!2z0KTQvtGA0YDRg9C8IC0g0YDQtdC80L7QvdGC0L3Qvi3RgdGC0YDQvtC40YLQtdC70YzQvdCw0Y8g0LrQvtC80L_QsNC90LjRjw!5e0!3m2!1sru!2sua!4v1635787401257!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="contacts__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2574.6862560875093!2d24.030033115813033!3d49.81076584112962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae7efbe2e849f%3A0xacd8a0b0cc1c31d5!2z0YPQuy4g0J_RgNC-0YTQtdGB0YHQvtGA0LAg0JHRg9C50LrQviwgMjcsINCb0YzQstC-0LIsINCb0YzQstC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwgNzkwMzQ!5e0!3m2!1sru!2sua!4v1644489025824!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<!-- <div class="contacts__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.0939098411404!2d30.728660415589932!3d46.42701817912411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6331d058fefa9%3A0xd314fe003772ef4a!2z0KTQvtGA0YDRg9C8IC0g0YDQtdC80L7QvdGC0L3Qvi3RgdGC0YDQvtC40YLQtdC70YzQvdCw0Y8g0LrQvtC80L_QsNC90LjRjw!5e0!3m2!1sru!2sua!4v1635787401257!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div> -->
			</div>
		</section>

<?php get_footer(); ?>