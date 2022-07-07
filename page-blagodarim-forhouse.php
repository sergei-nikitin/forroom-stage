
<?php
/*
Template Name: Thanks ForHouse

*/

// … остальной код шаблона
?>
<?php get_header('main'); ?>
<!-- Thanks -->

<section class="thanks ib">
  <img src="<?php echo get_template_directory_uri() ?>/source/img/thanks.png" alt="thanks" class="ib_use">

  <div class="container">
    <a href="#" class="thanks__logo anim-item">
      <img src="<?php echo get_template_directory_uri() ?>/source/img/forroom-white-completely.png" alt="forroom">
    </a>
    <h2 class="thanks__title anim-item">Благодарим за обращение</h2>
    <p class="thanks__text anim-item">Мы с нетерпением ждём встречи с Вами!</p>
    <div class="thanks__btn anim-item">
      <a href="https://forroom.com.ua/" class="btn">Вернуться на главную</a>
    </div>
    <ul class="thanks__socials anim-item">
      <li><a href="https://facebook.com/forroom.com.ua/"><i class="fab fa-facebook"></i></a></li>
      <li><a href="https://instagram.com/forroom.com.ua/?igshid=9gvn1yx7vmsc"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div>
</section>
<?php get_footer('forhouse'); ?>