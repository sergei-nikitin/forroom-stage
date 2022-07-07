<?php
/*
Template Name: new-portfolio UA

*/

// … остальной код шаблона
?>

<?php get_header('ua'); ?>
	     
	<!-- Header -->

		<header class="header header_anim">
			<div class="header__cover">
				<span></span>
				<div class="header__cover-inner">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				<span></span>
			</div>

<div class="section-cover section-cover_third">
	<span></span>
	<div class="section-cover__inner">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<span></span>
</div>

			<div class="header__inner nav-add-padding">
				<div class="header__lines">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>

				<div class="header__body">
					<div class="header__body-wrap">
						<div class="header__title">
							<h2>ПОРТФОЛІО</h2>
							<h3>ПОРТФОЛІО</h3>
						</div>
					</div>
				</div>

				<div class="header__anim-background">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/portfolio-bg1.jpg" alt="2" class="ib_use">
							</div>

							<div class="swiper-slide ib">
								<img src="<?php echo get_template_directory_uri() ?>/source/new-img/portfolio-bg2.jpg" alt="1" class="ib_use">
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Works -->

		<section class="works">
			<!-- <div class="works__header ib">
				<img src="<?php echo get_template_directory_uri() ?>/source/new-img/portfolio-bg.jpg" alt="works" class="ib_use">
				<div class="works__title">
					<h2>ПОРТФОЛІО</h2>
					<h3>ПОРТФОЛІО</h3>
				</div>
			</div> -->

			<div class="block-tabs works__tabs">
				<div class="block-tabs__btns works__tabs-btns">
					<div class="block-tabs__btn works__tabs-btn">Всі роботи</div>
					<div class="block-tabs__btn works__tabs-btn">Дизайн</div>
					<div class="block-tabs__btn works__tabs-btn">Ремонт</div>
				</div>

				<div class="works__tabs-tabs">
					<div class="block-tabs__tab works__tab">
						<div class="works__carts">
                 <?php
                    // параметры по умолчанию
                    $my_posts = get_posts(array(
                        'numberposts' => -1,
                        'category' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'tag' => 'remont, design',
                    ));

                    foreach ($my_posts as $post) {
                        setup_postdata($post);

                        $tags = get_the_tags();
                        $tagString = '';

                        if ($tags && count($tags) > 0) {
                            foreach ($tags as $tag) {
                                $tagString .= ' type-'.$tag->slug;
                            }
                        }
                        ?>
                        		<div class="works__cart ib">
                      		<img src="<?php the_post_thumbnail_url(); ?>" alt="works" class="ib_use">
								<a href="<?php the_permalink(); ?>" class="works__cart-inner">
									<span class="works__cart-title"><?php the_field('название_жк'); ?></span>
									<span class="works__cart-subtitle"><?php the_title(); ?></span>
									<span class="works__cart-text"><?php the_field('пакет'); ?></span>
									<span class="works__cart-btn">
										<span class="btn btn_big-fill">ДЕТАЛЬНІШЕ</span>
									</span>
								</a>
                </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                    ?>
			
											
		</div>
	
		</div>

						<div class="works__tabs-tabs">
					<div class="block-tabs__tab works__tab">
						<div class="works__carts">
                 <?php
                    // параметры по умолчанию
                    $my_posts = get_posts(array(
                        'numberposts' => -1,
                        'category' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'tag' => 'remont',
                    ));

                    foreach ($my_posts as $post) {
                        setup_postdata($post);

                        $tags = get_the_tags();
                        $tagString = '';

                        if ($tags && count($tags) > 0) {
                            foreach ($tags as $tag) {
                                $tagString .= ' type-'.$tag->slug;
                            }
                        }
                        ?>
                        		<div class="works__cart ib">
                      		<img src="<?php the_post_thumbnail_url(); ?>" alt="works" class="ib_use">
								<a href="<?php the_permalink(); ?>" class="works__cart-inner">
									<span class="works__cart-title"><?php the_field('название_жк'); ?></span>
									<span class="works__cart-subtitle"><?php the_title(); ?></span>
									<span class="works__cart-text"><?php the_field('пакет'); ?></span>
									<span class="works__cart-btn">
										<span class="btn btn_big-fill">подробнее</span>
									</span>
								</a>
                </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                    ?>
		</div>
		</div>

						<div class="works__tabs-tabs">
					<div class="block-tabs__tab works__tab">
						<div class="works__carts">
                 <?php
                    // параметры по умолчанию
                    $my_posts = get_posts(array(
                        'numberposts' => -1,
                        'category' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'tag' => 'design',
                    ));

                    foreach ($my_posts as $post) {
                        setup_postdata($post);

                        $tags = get_the_tags();
                        $tagString = '';

                        if ($tags && count($tags) > 0) {
                            foreach ($tags as $tag) {
                                $tagString .= ' type-'.$tag->slug;
                            }
                        }
                        ?>
                        		<div class="works__cart ib">
                      		<img src="<?php the_post_thumbnail_url(); ?>" alt="works" class="ib_use">
								<a href="<?php the_permalink(); ?>" class="works__cart-inner">
									<span class="works__cart-title"><?php the_field('название_жк'); ?></span>
									<span class="works__cart-subtitle"><?php the_title(); ?></span>
									<span class="works__cart-text"><?php the_field('пакет'); ?></span>
									<span class="works__cart-btn">
										<span class="btn btn_big-fill">подробнее</span>
									</span>
								</a>
                </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                    ?>
		</div>
		</div>
               

						<div class="works__pagination">
						
							<!-- <div class="works__pagination-left works__pagination-btn">
								<span class="iconify" data-icon="la:chevron-left"></span>
							</div>
							<div class="works__pagination-numbers">
								<span class="active">1</span>
								<span>2</span>
								<span>3</span>
								<span>...</span>
								<span>24</span>
							</div>
							<div class="works__pagination-right works__pagination-btn">
								<span class="iconify" data-icon="la:chevron-right"></span>
							</div> -->
						</div>
					</div>
				

				</div>
			</div>

		</section>

        			<!-- Footer -->

<?php get_footer('ua'); ?>