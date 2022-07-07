<?php
/*
Template Name: new-portfolio

*/

// … остальной код шаблона
?>
<?php get_header(); ?>
<?php
if ( have_posts() ){
	while ( have_posts() ){
		the_post();
		// код вывода
	}
} else {
	echo wpautop( 'Постов для вывода не найдено.' );
}
?>
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
										<span class="btn btn_big-fill">подробнее</span>
									</span>
								</a>



                </div>
								<!-- <?php the_posts_pagination(); ?> -->
                        <?php
												the_posts_pagination();
                    }

                    wp_reset_postdata(); // сброс
                    ?>



		<!-- Works -->

		<section class="works">

	

		</section>

        			<!-- Footer -->

<?php get_footer(); ?>