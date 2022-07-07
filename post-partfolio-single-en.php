<?php
/*
Template Name: Шаблон открытого Портфолио EN
Template Post Type: post
*/

// … остальной код шаблона
?>

<?php get_header('en'); ?>

 <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps-en' ); ?>

		<!-- Project -->

		<section class="project nav-add-padding">
			<div class="project__header"> 
                  <?php
                    $prev_post = get_previous_post(true);
                    if ( ! empty( $prev_post ) ): ?>
                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="project__header-btn project__header-left">
					 <span class="iconify" data-icon="la:chevron-left"></span> 
                     </a>
                    <?php endif; ?>
				<p class="project__header-text"><?php the_title(); ?></p>
                 <?php
                    $next_post = get_next_post(true);
                    if ( ! empty( $next_post ) ): ?>
                    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="project__header-btn project__header-right">
                    <span class="iconify" data-icon="la:chevron-right"></span>
                       </a>
                    <?php endif; ?>
			</div>

              <?php $allContent =  str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', get_the_content() ));
                    //var_dump($allContent);

                    preg_match('/<h2>(.*?)<\/h2>/s', $allContent, $matches);
                    $title = $matches[1];

                    preg_match('/<h3>(.*?)<\/h3>/s', $allContent, $matches);
                    $headerContent = $matches[0];

                    preg_match('/<p>(.*?)<\/p>/s', $allContent, $matches);
                    $content = $matches[0];

                    preg_match_all('~<a(.*?)href="([^"]+)"(.*?)>~', $content, $imageArray);
                    ?>

			<div class="project__carts" data-widths="2, 5, 8" data-heights="1, 2, 4, 5, 8, 10">
                    <?php

                    $imageArray = $imageArray[2];
                    $currentItem = 0;
				
					foreach($imageArray as $imageItem)
					{
                        // echo($imageArray.tag);
						echo('<a href="' . $imageItem. '" class="project__cart project-item project-sizer">
                            <span class="project__cart-wrap ib" style="background-image: url("' . $imageItem . '");">
                            	<img src="' . $imageItem . '" alt="image ' . ($currentItem + 1) . '" class="ib_use">
                            </span>
                            </a>');
						$currentItem++;
					}
					

                    ?>


                    <?php str_replace('<p>', '', str_replace('</p>', '', str_replace('<br>', '', $content))); ?>
			</div>
		</section>

      <?php
if( has_tag( 'remont' ) ) 
	      
   echo get_template_part( 'template-parts/content', 'slide-packages-en' ); 
    
?>
                    <?php
if( has_tag( 'design' ) )
	 echo get_template_part( 'template-parts/content', 'slide-design-en' ); 
?>
<?php get_footer('en'); ?>