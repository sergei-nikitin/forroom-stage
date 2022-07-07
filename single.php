<?php get_header('forroom'); ?>

<section class="header header_simple" id="header"
         style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forum.jpg');">
    <div class="header__content nav-add-padding">
        <div class="container">
            <h1 class="header__content-title">ПОРТфолио</h1>
        </div>
    </div>
</section>

<!-- Portfolio -->

<section class="portfolio portfolio_page">
    <div class="container">
        <div class="portfolio__btns">
            <div class="portfolio__btns">
                <p class="portfolio__btns-btn">Все</p>
                <p class="portfolio__btns-btn">Дизайн</p>
                <p class="portfolio__btns-btn">Ремонт</p>
            </div>
        </div>

        <div class="portfolio__tabs">
            <div class="portfolio__tab">
                <div class="portfolio__tab-wrap">

                    <?php
                    // параметры по умолчанию
                    $my_posts = get_posts(array(
                        'numberposts' => -1,
                        'category' => 0,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post_type' => 'post',
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
                        <a href="<?php the_permalink(); ?>" class="portfolio__cart <?= $tagString; ?>">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title"><?php the_title(); ?></p>
									</span>
								</span>
                        </a>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>

            <div class="portfolio__tab">
                <div class="portfolio__tab-wrap">
                    <a href="#" class="portfolio__cart">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forroom/portfolio/1.jpeg');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title">ЖК Таировские сады</p>
									</span>
								</span>
                    </a>

                    <a href="#" class="portfolio__cart">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forroom/portfolio/1.jpeg');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title">ЖК Таировские сады</p>
									</span>
								</span>
                    </a>

                    <a href="#" class="portfolio__cart">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forroom/portfolio/1.jpeg');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title">ЖК Таировские сады</p>
									</span>
								</span>
                    </a>
                </div>
            </div>

            <div class="portfolio__tab">
                <div class="portfolio__tab-wrap">
                    <a href="#" class="portfolio__cart">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forroom/portfolio/1.jpeg');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title">ЖК Таировские сады</p>
									</span>
								</span>
                    </a>

                    <a href="#" class="portfolio__cart">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forroom/portfolio/1.jpeg');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title">ЖК Таировские сады</p>
									</span>
								</span>
                    </a>

                    <a href="#" class="portfolio__cart">
								<span class="portfolio__cart-wrap"
                                      style="background-image: url('<?php echo get_template_directory_uri() ?>/source/img/forroom/portfolio/1.jpeg');">
									<span class="portfolio__cart-content">
										<p class="portfolio__cart-title">ЖК Таировские сады</p>
									</span>
								</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('forroom'); ?>