<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


// подключить стили и скрипты
add_action('wp_enqueue_scripts', 'forroom_scripts');

function forroom_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_style('main', get_stylesheet_uri());

    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array('styles'));
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), '1.0.0', true);
   
    if (is_page_template(array('page-packet-solutions.php'))) {
        wp_enqueue_script('swiper8', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), true);
        wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-lg-sections', get_template_directory_uri().'/source/js-redesign/lightgallery-sections.js', array(), true);
        wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), true);
          wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('about-slider', get_template_directory_uri().'/source/js-redesign/about-slider.js', array(), true);
        wp_enqueue_script('offers-slider', get_template_directory_uri().'/source/js-redesign/offers-slider.js', array(),  true);
        wp_enqueue_script('visual-section', get_template_directory_uri().'/source/js-redesign/visual-section.js', array(), true);
        wp_enqueue_script('payment-scripts', get_template_directory_uri().'/source/js-redesign/payment-section.js', array(), true);   
        wp_enqueue_script('unique-section', get_template_directory_uri().'/source/js-redesign/unique-section.js', array('swiper8'), '1.0.0', true); 
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), true);  
    }
    if (is_page_template(array('page-about.php', 'page-about-ua.php', 'page-about-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('rellaxt', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('command-section', get_template_directory_uri().'/source/js-redesign/command-section.js', array(), '1.0.0',
        true);
        wp_enqueue_script('company-slider', get_template_directory_uri().'/source/js-redesign/company-slider.js', array(), '1.0.0',
        true);
        
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template(array('page-test-portfolio.php', 'page-new-portfolio.php', 'page-new-portfolio-ua.php', 'page-new-portfolio-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
        wp_enqueue_script('swiper-next', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('works-section', get_template_directory_uri().'/source/js-redesign/works-section.js', array(), '1.0.0',
        true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template( array('page-vtorichka.php','page-vtorichka-ua.php', 'page-vtorichka-en.php', 'page-arenda.php', 'page-arenda-ua.php', 'page-arenda-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
        wp_enqueue_script('swiper-next', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '1.0.0', true);
        wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-lightgallery', get_template_directory_uri().'/source/js-redesign/lightgallery.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-thumbnail', get_template_directory_uri().'/source/js-redesign/lg-thumbnail.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-fullscreen', get_template_directory_uri().'/source/js-redesign/lg-fullscreen.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-sections', get_template_directory_uri().'/source/js-redesign/lightgallery-sections.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-repair-section', get_template_directory_uri().'/source/js-redesign/repair-section.js', array(), '1.0.0',
        true);
         wp_enqueue_script('about-slider', get_template_directory_uri().'/source/js-redesign/about-slider.js', array(), '1.0.0',
        true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template( array('page-interior.php', 'page-interior-ua.php', 'page-interior-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
         wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
         wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        // wp_enqueue_script('repair-scripts', get_template_directory_uri().'/source/js-redesign/repair-section.js', array(), '1.0.0',
        // true);
        wp_enqueue_script('payment-scripts', get_template_directory_uri().'/source/js-redesign/payment-section.js', array(), '1.0.0',
        true);
         wp_enqueue_script('team-scripts', get_template_directory_uri().'/source/js-redesign/team-section.js', array(), '1.0.0',
        true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template(array('page-packages.php', 'page-packages-ua.php', 'page-packages-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
         wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
         wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('works-section', get_template_directory_uri().'/source/js-redesign/works-section.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('repair-scripts', get_template_directory_uri().'/source/js-redesign/repair-section.js', array(), '1.0.0',
        true);
        wp_enqueue_script('payment-scripts', get_template_directory_uri().'/source/js-redesign/payment-section.js', array(), '1.0.0',
        true);
        wp_enqueue_script('animation-js', get_template_directory_uri().'/source/js-redesign/sections-animation.js', array(), '1.0.0',
        true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template(array('page-payment.php', 'page-payment-ua.php', 'page-payment-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
            wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('payment-scripts', get_template_directory_uri().'/source/js-redesign/payment-section.js', array(), '1.0.0',
        true);
        
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template(array('page-contacts.php', 'page-contacts-ua.php', 'page-contacts-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
            wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('contacts-scripts', get_template_directory_uri().'/source/js-redesign/contacts-section.js', array(), '1.0.0',
        true);
        
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        
    }
    if (is_page_template(array('page-new-home.php', 'page-new-home-ua.php', 'page-new-home-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
            wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-repair-section', get_template_directory_uri().'/source/js-redesign/repair-section.js', array(), '1.0.0',
        true);
        //  wp_enqueue_script('animation-js', get_template_directory_uri().'/source/js-redesign/sections-animation.js', array(), '1.0.0',
        // true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);
        wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
        
    }
    if(is_page_template(array('page-new-buildings.php', 'page-new-buildings-ua.php', 'page-new-buildings-en.php'))){
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');
          wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
          wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
           wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
            wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
            wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
        //     wp_enqueue_script('choose-section', get_template_directory_uri().'/source/js-redesign/choose-section.js', array(), '1.0.0',
        // true);
         wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);  
    }
    if (is_page_template(array('page-white-box-new.php', 'page-white-box-new-ua.php', 'page-white-box-new-en.php', 'page-basik.php', 'page-basik-ua.php', 'page-basik-en.php', 'page-pack-optimal.php', 'page-pack-optimal-ua.php', 'page-pack-optimal-en.php',  'page-max.php', 'page-max-ua.php', 'page-max-en.php'))) {
     wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
     wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

        wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
        wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('rellaxt', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
        wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        wp_enqueue_script('payment-scripts', get_template_directory_uri().'/source/js-redesign/payment-section.js', array(), '1.0.0',
        true);
        wp_enqueue_script('table-package', get_template_directory_uri().'/source/js-redesign/table-package.js', array(), '1.0.0',
        true);
    }
    if (is_page_template(array('page-stili-remonta.php', 'page-stili-remonta-ua.php', 'page-stili-remonta-en.php'))) {
         wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

        wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true); 
        wp_enqueue_script('iconfy', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
        wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
         wp_enqueue_script('header-animation', get_template_directory_uri().'/source/js-redesign/header-animation.js', array(), '1.0.0',
        true);
         wp_enqueue_script('sections-animation', get_template_directory_uri().'/source/js-redesign/sections-animation.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-ajax', get_template_directory_uri().'/source/js-redesign/ajax-form.js', array(), '1.0.0',
        true);  
      }
    
    if (is_page_template(array('post-patrfolio-single.php', 'post-patrfolio-single-ua.php', 'post-patrfolio-single-en.php')))
    {
        wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');
         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
         wp_enqueue_script('mansory', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-lightgallery', get_template_directory_uri().'/source/js-redesign/lightgallery.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-thumbnail', get_template_directory_uri().'/source/js-redesign/lg-thumbnail.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-fullscreen', get_template_directory_uri().'/source/js-redesign/lg-fullscreen.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), 
        true);
         wp_enqueue_script('new-projects-section', get_template_directory_uri().'/source/js-redesign/projects-section.js', array(), '1.0.0',
        true);
   }
        wp_enqueue_style('btstrp', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array('main'), '1.0.1');

         wp_enqueue_style('new-styles', get_template_directory_uri().'/css/main_2.css', array('main'), '1.0.1');

         wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js', array(), '1.0.0', true);
         wp_enqueue_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', array(), '1.0.0', true);
         wp_enqueue_script('mansory', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '1.0.0', true);
         wp_enqueue_script('new-inputmask', get_template_directory_uri().'/source/js-redesign/inputmask.min.js', array(), '1.0.0',
        true);
         wp_enqueue_script('new-lightgallery', get_template_directory_uri().'/source/js-redesign/lightgallery.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-thumbnail', get_template_directory_uri().'/source/js-redesign/lg-thumbnail.min.js', array(), '1.0.0',
        true);
        wp_enqueue_script('new-lg-fullscreen', get_template_directory_uri().'/source/js-redesign/lg-fullscreen.min.js', array(), '1.0.0',
        true);
        //  wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', array(), true);
         wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        true);
        //  wp_enqueue_script('new-script', get_template_directory_uri().'/source/js-redesign/script.js', array(), '1.0.0',
        // true);
         wp_enqueue_script('new-projects-section', get_template_directory_uri().'/source/js-redesign/projects-section.js', array(), '1.0.0',
        true);
    wp_enqueue_script('imask', 'https://unpkg.com/imask', array(), '1.0.0', true);
    wp_enqueue_script('myinputmask', get_template_directory_uri().'/source/js-redesign/myInputMask.js', array(), '1.0.0', true);


     wp_enqueue_style('inl', get_template_directory_uri().'/css/intlTelInput.css', array('new-styles'));
     wp_enqueue_style('demo', get_template_directory_uri().'/css/demo.css', array('new-styles'));
     wp_enqueue_script('IntelTelInput', get_template_directory_uri().'/source/input-js/intlTelInput.js', array());
     wp_enqueue_script('utilsIntelTelInput', get_template_directory_uri().'/source/input-js/utils.js', array());
    wp_enqueue_script('intelScript', get_template_directory_uri().'/source/js-redesign/intlScript.js', array(), '1.0.0', true);
   
}

// регистрируем несколько облаастей меню

function For_Room_menus() {
 // собираем несколько зон(областей) меню
    // $locations = array(
    //     'header' => __( 'Header Menu', 'For_Room' ),
	// 	'footer' => __( 'Footer Menu', 'For_Room' ),
    // );
      $locations = array(
        'header-left' => __( 'Header Menu-left', 'For_Room' ),
        'header-right' => __( 'Header Menu-right', 'For_Room' ),
        'header-mob-menu' => __( 'Header Mob-menu', 'For_Room' ),
		'footer_menu_mob' => __( 'Footer Mob-menu', 'For_Room' ),
		'footer_menu_left' => __( 'Footer Menu-left', 'For_Room' ),
		'footer_menu_right' => __( 'Footer Menu-right', 'For_Room' ),
    );
//  регистрируем области меню кот лежат в $locations
    register_nav_menus( $locations );
}
//  хук-событие
add_action( 'init', 'For_Room_menus' );
// добывим клвсс к пунктам меню

class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
        
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
    $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }
        
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
    
}

// отправка форм
// тест
add_action( 'wp_ajax_test_popup', 'send_form_test_popup' );
add_action( 'wp_ajax_nopriv_test_popup', 'send_form_test_popup' );
function send_form_test_popup() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # подставляем email администратора
        // $mail_to = array('sales@forroom.com.ua', 'Nikitin_S@i.ua', 'porison32@gmail.com');
        $mail_to = array('Nikitin_S@i.ua');
        // $mail_to = get_option( 'admin_email' );

        # сбор данные с формыphone = trim($_POST["phone"]);
        $url = trim($_POST["page-url"]);
        $object = trim($_POST["object"]);
        $area = trim($_POST["area"]);
        $design = trim($_POST["design"]);
        $materials = trim($_POST["materials"]);
        $start = trim($_POST["start"]);
        $price = trim($_POST["price"]);
        $present = trim($_POST["present"]);
        $phone = trim($_POST["phone"]);
        // $name = trim($_POST["name"]);
        $title = trim($_POST["title"]);
        $communication = trim($_POST["communication"]);

       

        // if ( empty($name) OR empty($phone)) {
        if (empty($phone) || str_contains($phone, '_')) {
        // if (empty($phone) || $phone === '+380 (__) ___-__-__') {
            # отправляем ошибку  400 (bad request).
            http_response_code(400);
            echo "Заполните все обязательные поля.";
            exit;
        }

        # содержимое письма
        $subject = 'Заявка с сайта: ' . get_bloginfo('name');

        $content = "<b>Форма:</b> $title<br/>";
        $content .= "<b>Страница:</b> $url<br/>";
        $content .= "<b>Телефон:</b> $phone<br/>";
        $content .= "<b>Вид объекта:</b> $object<br/>";
        $content .= "<b>Площадь:</b>  $area<br/>";
        $content .= "<b>Наличие дизайна:</b> $design<br/>";
        $content .= "<b>Материалы:</b>  $materials<br/>";
        $content .= "<b>Сроки:</b> $start<br/>";
        $content .= "<b>Выбрал подарок:<b>  $present<br/>";
        $content .= "<b>Способ связи:</b>  $communication";

        # заголовок письма.
        // $headers = "From: WordPress <for_test@all-inagency.com.ua>";
        $headers = "From: ForRoom <server@forroom.com.ua>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $success = wp_mail($mail_to, $subject, $content, $headers);

        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Спасибо! Ваше сообщение отправлено.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Упс! Чтото пошло не так, мы не смогли отправить ваше сообщение.";
        }

        // Send message in telegram
        // тест группа
          $token = "1839099219:AAFnmS03sKc-U6cXkAG6qwK1eeisJ6ueA_U"; 
          $chat_id = "-1001480805154";

        // данные форрума
        // $token = "1629398782:AAEL0eWezmcP8th4Wr1VNoiU5PZ-lz29Jg0";
        // $chat_id = "-1001411420928";
        $sitename = "ForRoom";


        $arr = array(
            'Заказ с сайта: ' => $sitename,
            'Форма: ' => $title,
            'Страница: ' => $url,
            'Телефон: ' => $phone,
            'Вид объекта: '=> $object,
            'Площадь: ' => $area,
            'Наличие дизайна: ' => $design,
            'Материалы: ' => $materials,
            'Сроки: ' => $start,
            'Выбрал подарок: ' => $present,
            'Способ связи: ' => $communication
        );


        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };


        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Не получилось отправить попробуйте позже.";
    }

    // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвраащает функция
    wp_die();
}
// ответим на вопросы + выезд дизайнера (статичная форма в подвале)
add_action( 'wp_ajax_answer_your_questions', 'send_form_answer_your_questions' );
add_action( 'wp_ajax_nopriv_answer_your_questions', 'send_form_answer_your_questions' );
function send_form_answer_your_questions() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # подставляем email администратора
        // $mail_to = array('sales@forroom.com.ua', 'Nikitin_S@i.ua', 'porison32@gmail.com');
        $mail_to = array('Nikitin_S@i.ua');
        // $mail_to = get_option( 'admin_email' );

        # сбор данных с формы
        $url = trim($_POST["page-url"]);
        $phone = trim($_POST["phone"]);
        $title = trim($_POST["title"]);
        $communication = trim($_POST["communication"]);

        $ucl = preg_match('/[A-Z]/', $phone); 
        $lcl = preg_match('/[a-z]/', $phone); 

        if (empty($phone) || str_contains($phone, '_') || $ucl || $lcl) {
        // if (empty($phone) || $phone === '+380 (__) ___-__-__') {
            # отправляем ошибку  400 (bad request).
            http_response_code(400);
            echo "Заполните все обязательные поля.";
            exit;
        }

        # содержимое письма
        $subject = 'Заявка с сайта: ' . get_bloginfo('name');
        $content = "<b>Форма:</b> $title<br/>";
        $content .= "<b>Страница:</b> $url<br/>";
        $content .= "<b>Телефон:</b> $phone<br/>";
        $content .= "<b>Способ связи:</b>  $communication";

        # заголовок письма.
        // $headers = "From: WordPress <for_test@all-inagency.com.ua>";
        $headers = "From: ForRoom <server@forroom.com.ua>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $success = wp_mail($mail_to, $subject, $content, $headers);

        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Спасибо! Ваше сообщение отправлено.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Упс! Чтото пошло не так, мы не смогли отправить ваше сообщение.";
        }

        // Send message in telegram
        // Test group telegram
          $token = "1839099219:AAFnmS03sKc-U6cXkAG6qwK1eeisJ6ueA_U"; 
          $chat_id = "-1001480805154"; 
        //   forroom
        // $token = "1629398782:AAEL0eWezmcP8th4Wr1VNoiU5PZ-lz29Jg0";
        // $chat_id = "-1001411420928"; 
          $sitename = "ForRoom";


        $arr = array(
            'Заказ с сайта: ' => $sitename,
            'Форма:' => $title,
            'Страница:' => $url,
            'Телефон: ' => $phone,
            'Способ связи: ' => $communication
        );


        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };


        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Не получилось отправить попробуйте позже.";
    }

    // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвраащает функция
    wp_die();
}
// форма обратной связи ПОПАП
add_action( 'wp_ajax_cb_form', 'cb_form_popup' );
add_action( 'wp_ajax_nopriv_cb_form', 'cb_form_popup' );
function cb_form_popup() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # подставляем email администратора
        // $mail_to = array('sales@forroom.com.ua', 'Nikitin_S@i.ua', 'porison32@gmail.com');
        $mail_to = array('Nikitin_S@i.ua');
        // $mail_to = get_option( 'admin_email' );

        # сбор данные с формыphone = trim($_POST["phone"]);
        $url = trim($_POST["page-url"]);
        $interest = trim($_POST["interest"]);
        $phone = trim($_POST["phone"]);
        $title = trim($_POST["title"]);
        $communication = trim($_POST["communication"]);

       
        $ucl = preg_match('/[A-Z]/', $phone); 
        $lcl = preg_match('/[a-z]/', $phone); 
        // if ( empty($name) OR empty($phone)) {
        // if (empty($phone) || $phone === '+380 (__) ___-__-__') {
             if (empty($phone) || str_contains($phone, '_') || $ucl || $lcl) {
            # отправляем ошибку  400 (bad request).
            http_response_code(400);
            echo "Заполните все обязательные поля.";
            exit;
        }

        # содержимое письма
        $subject = 'Заявка с сайта: ' . get_bloginfo('name');

        $content = "<b>Форма:</b> $title<br/>";
        $content .= "<b>Страница:</b> $url<br/>";
        $content .= "<b>Интересует:</b> $interest<br/>";
        $content .= "<b>Телефон:</b> $phone<br/>";
        $content .= "<b>Способ связи:</b>  $communication";

        # заголовок письма.
        // $headers = "From: WordPress <for_test@all-inagency.com.ua>";
        $headers = "From: ForRoom <server@forroom.com.ua>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $success = wp_mail($mail_to, $subject, $content, $headers);

        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Спасибо! Ваше сообщение отправлено.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Упс! Чтото пошло не так, мы не смогли отправить ваше сообщение.";
        }

        // Send message in telegram
         // Test group telegram
           $token = "1839099219:AAFnmS03sKc-U6cXkAG6qwK1eeisJ6ueA_U"; 
           $chat_id = "-1001480805154";
        // $token = "1629398782:AAEL0eWezmcP8th4Wr1VNoiU5PZ-lz29Jg0";
        // $chat_id = "-1001411420928";
          $sitename = "ForRoom";


        $arr = array(
            'Заказ с сайта: ' => $sitename,
            'Форма:' => $title,
            'Страница:' => $url,
            'Интересует:' => $interest,
            'Телефон: ' => $phone,
            'Способ связи: ' => $communication
        );


        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };


        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Не получилось отправить попробуйте позже.";
    }

    // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвраащает функция
    wp_die();
}
// форма обратной связи ПОПАП ВЫБОР ЖК
add_action( 'wp_ajax_jk_form', 'send_jk_form_popup' );
add_action( 'wp_ajax_nopriv_jk_form', 'send_jk_form_popup' );
function send_jk_form_popup() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # подставляем email администратора
        // $mail_to = array('sales@forroom.com.ua', 'Nikitin_S@i.ua', 'porison32@gmail.com');
        $mail_to = array('Nikitin_S@i.ua');

        # сбор данные с формыphone = trim($_POST["phone"]);
        $url = trim($_POST["page-url"]);
        $interest = trim($_POST["interest"]);
        $areacount = trim($_POST["areacount"]);
        $paket = trim($_POST["paket"]);
        $phone = trim($_POST["phone"]);
        $title = trim($_POST["title"]);
        $communication = trim($_POST["communication"]);


        $ucl = preg_match('/[A-Z]/', $phone); 
        $lcl = preg_match('/[a-z]/', $phone); 
        // if ( empty($name) OR empty($phone)) {
        // if (empty($phone) || $phone === '+380 (__) ___-__-__') {
             if (empty($phone) || str_contains($phone, '_') || $ucl || $lcl) {
            # отправляем ошибку  400 (bad request).
            http_response_code(400);
            echo "Заполните все обязательные поля.";
            exit;
        }

        # содержимое письма
        $subject = 'Заявка с сайта: ' . get_bloginfo('name');

        $content = "<b>Форма:</b> $title<br/>";
        $content .= "<b>Страница:</b> $url<br/>";
        $content .= "<b>Интересует:</b> $interest<br/>";
        $content .= "<b>Телефон:</b> $phone<br/>";
        $content .= "<b>Площадь:</b>  $areacount<br/>";
        $content .= "<b>Пакет:<b>  $paket<br/>";
        $content .= "<b>Способ связи:</b>  $communication";

        # заголовок письма.
        // $headers = "From: WordPress <for_test@all-inagency.com.ua>";
        $headers = "From: ForRoom <server@forroom.com.ua>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $success = wp_mail($mail_to, $subject, $content, $headers);

        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Спасибо! Ваше сообщение отправлено.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Упс! Чтото пошло не так, мы не смогли отправить ваше сообщение.";
        }

        // Send message in telegram
         // Test group telegram
           $token = "1839099219:AAFnmS03sKc-U6cXkAG6qwK1eeisJ6ueA_U"; 
           $chat_id = "-1001480805154";
        // $token = "1629398782:AAEL0eWezmcP8th4Wr1VNoiU5PZ-lz29Jg0";
        // $chat_id = "-1001411420928";
          $sitename = "ForRoom";


        $arr = array(
            'Заказ с сайта: ' => $sitename,
            'Форма:' => $title,
            'Страница:' => $url,
            'Интересует:' => $interest,
            'Телефон: ' => $phone,
            'Площадь: ' =>  $areacount,
            'Пакет: ' => $paket,
            'Способ связи: ' => $communication
        );


        foreach($arr as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };


        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Не получилось отправить попробуйте позже.";
    }

    // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвраащает функция
    wp_die();
}


