<?php
/*
Template Name: Пакет Базовый(new)

*/

// … остальной код шаблона
?>

<?php get_header(); ?>

    <!-- вывод секции popaps -->
    <?php echo get_template_part( 'template-parts/content', 'popaps' ); ?>

  

      <!-- Header -->

      <header class="header header_anim header_anim-package">
        <div class="header__inner nav-add-padding">
          <div class="header__body">
            <div class="header__body-wrap">
              <div class="header__title">
                <h2>базовый</h2>
                <h3>базовый </h3>
              </div>
              <p class="header__text">
              Пакет ремонта, который включает в себя все черновые работы и чистовые работы с отделочными материалами и дополнительные опции
              </p>
              <p class="header__price">290 $/кв.м</p>
              <div class="header__btn">
                <button type="button" class="btn btn_big-fill" data-stili-item="пакет базовый" data-open-popup="call-popup"
                  >заказать</button
                >
              </div>
            </div>
          </div>

          <div class="header__anim-background">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide ib">
                  <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/basik-bg.jpg" alt="1" class="ib_use" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

        <!-- Table -->

        <section class="table-package" data-active-column="2">
          <div class="table-package__left">
            <span>Максимальная предчистовая отделка</span>
            <span>Пакет Чертежей</span>
            <span>Подготовительные работы</span>
            <span>Черновые работы</span>
            <span>Электромонтажные работы</span>
            <span>Санфаянс</span>
            <span>Обои</span>
            <span>Двери</span>
            <span>Потолки</span>
            <span>Дизайнерские шторы</span>
            <span>Кухня под заказ</span>
            <span>Зеркало с led-подсветкой</span>
            <span>Электрический полотенцесушитель</span>
            <span>Бойлер</span>
            <span>Кондиционеры</span>
            <span>Телевизоры</span>
            <span>Холодильник</span>
            <span>Варочная поверхность</span>
            <span>Духовой шкаф</span>
            <span>Вытяжка</span>
            <span>Стиральная машина</span>
            <span>Спальный гарнитур</span>
          </div>

          <div class="table-package__wrap">
            <table class="table-package__table">
              <thead>
                <th><a href="https://forroom.com.ua/ru/white-box/">White box</a></th>
                <th><a href="https://forroom.com.ua/ru/paket-bazovyj/">Базовый</a></th>
                <th><a href="https://forroom.com.ua/ru/paket-optimalnyj/">Оптимальный</a></th>
                <th><a href="https://forroom.com.ua/ru/paket-maksimalnyj/">Максимальный</a></th>
              </thead>
              <tfoot>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"><span>$150</span> за м2</a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"><span>$290</span> за м2</a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"><span>$390</span> за м2</a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"><span>$490</span> за м2</a>
                  </td>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="https://forroom.com.ua/ru/white-box/"></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-bazovyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-optimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://forroom.com.ua/ru/white-box/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-bazovyj/"></a></td>
                  <td><a href="https://forroom.com.ua/ru/paket-optimalnyj/"></a></td>
                  <td>
                    <a href="https://forroom.com.ua/ru/paket-maksimalnyj/"
                      ><span class="iconify" data-icon="la:check-double"></span
                    ></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

      <!-- Package -->

      <section class="package">   
<!-- 1 -->
        <div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/1.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>Предчерновые</h2>
              <h3>Предчерновые работы</h3>
            </div>
            <div class="package__lists">
              <div class="package__list">
                <h4 class="package__list-title">Подготовительные работы</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж временного унитаза</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Оклейка дверей</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж временного электрощита</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подключение к инженерным сетям</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Разработка планировочного решения
</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План обмерный
</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План расстановки мебели
</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План расстановки сантехники</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План подшивки потолков</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План освещения по группам и выключателям
</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План расстановки электрофурнитуры</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План монтажа теплого пола</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >План напольного покрытия</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Развертки стен помещений</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подготовка рабочей документации</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Cбор цельного альбома рабочих чертежей и бюджета проекта</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- 2 -->
        <div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/2.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>черновые</h2>
              <h3>черновые работы</h3>
            </div>
            <div class="package__lists">
              <div class="package__list">
                <h4 class="package__list-title">Демонтажные работы (по необходимости)</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Разбивка не монолитных участков и простенков из газобетонного блока</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      > Упаковка, вынос, погрузка и вывоз мусора</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Возведение межкомнатных перегородок (по необходимости)</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Разметка пространства</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Заказ и завоз строительных материалов</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж временного унитаза</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж перегородок из газоблока с применением клея для приклейки газоблока с армировкой и «привязкой» рядности арматуры:</span
                    >
                    <ul class="package__sublist">
                      <li>
                        <span
                          >диаметром 8мм каждый 2 ряд кладки поверхности с устройством перемычек из арматуры </span
                        >
                      </li>
                      <li>
                        <span
                          >диаметром 12мм в месте дверных проёмов</span
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- 3 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/3.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>Электромонтаж</h2>
              <h3>Электромонтажные работы</h3>
            </div>
            <div class="package__lists">
              <div class="package__list">
                <h4 class="package__list-title">Установка подрозетников, сборка и монтаж силового щита</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж подрозетников на алебастр</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Устройство ниши под главный распределительный щит (ГРЩ) «Schneider/Hager»</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж вводного автомата и УЗО «Schneider»</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка реле напряжения «ЗУБР»</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка автоматики «Schneider/Hager» (по 1 автомату на каждую зону и силовой прибор)</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Прокладка кабельных трасс</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подготовка пола, потолка и стен для прокладки инженерных систем</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Штробление стен под подрозетники</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >3х4 мм для силовой группы</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >3х2,5 мм для розеточной группы</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >2х1, 3х1, 3х1,5 мм под осветительную и слаботочную группу</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >2х1, 3х1, 3х1,5 мм под осветительную и слаботочную группу</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж силовых разъёмов для варочной поверхности, духового шкафа</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж розеток и выключателей в каждом помещении</span>
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Освещение</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка светильников</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка влагозащищенных светильников в мокрых зонах</span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- 4 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/4.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>Малярные</h2>
              <h3>Малярные работы</h3>
            </div>
            <div class="package__lists">
              <div class="package__list">
                <h4 class="package__list-title">Штукатурка стен по маякам</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж маяков</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Грунтование и высококачественное отштукатуривание плоскости гипсовыми смесями «Knauf МP75»</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Отштукатуривание цементно-песчанными смесями с предварительной гидроизоляцией влажных зон</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Толщина штукатурного слоя не более 20мм</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Шпатлевание стен
</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Грунтование стен и финишное шпатлевание отштукатуренной плоскости гипсовыми смесями «Knauf Multi Finish» слоем не более 5мм с последующей финишной затиркой поверхности</span>
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Заливка подоконников и выравнивание откосов</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подливка и выравнивание подоконного простраства цементно-песчанными смесями</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Устройство откосов из ГКЛ и его финишное отшпатлевывание «Knauf Multi Finish» смесью</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Системы вентиляции и кондиционирования</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Прокладка фреоновых труб и отвод дренажа в канализационную систему и разводка электрики под внешний блок</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж трассы системы кондиционирования</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Устройство вентиляционного канала к месту кухонной вытяжки</span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- 5 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/5.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>Сантехника</h2>
              <h3>Сантехнические работы</h3>
            </div>
            <div class="package__lists">
              <div class="package__list">
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Разводка канализации к сантехприборам с применением труб серии НТ Ostendorf Kunststoffe(Германия)</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Разводка водоснабжения из полипропиленовых труб производства Wavin Ekoplastik и Koer (Чехия)</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж запорной арматуры Wavin (Голландия), до 7 шт на квартиру с 1 сантехническим узлом</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Устройство душевого поддона (кладка из кирпича)</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подвод холодной воды и канализации к месту установки стиральной машины и водонагревательного прибора</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка унитаза из каталога или монтаж инсталляции с навесным унитазом на выбор заказчика</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Упаковка труб в теплоизоляцию, а также изоляция стояков минеральной ватой</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка ревизионных люков</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Вентиляция и кондиционирование</span
                    >
                  </li>
                </ul>
              </div>
           
            </div>
          </div>
        </div>
<!-- 6 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/6.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>Полы</h2>
              <h3>черновая отделка пола</h3>
            </div>
            <div class="package__lists">
              <div class="package__list">
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подливка стяжек в местах демонтированных перегородок</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Вытягивание плоскости пола в один уровень в санузле</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Устройство гидроизоляции в мокрых зонах
 с использованием однокомпонентной гидроизоляции «Ceresit CR65»</span
                    >
                  </li>
            </ul>
              </div>
           </div>
          </div>
        </div>
<!-- 7 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/7.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>САНФаЯНС</h2>
              <h3>САНФаЯНС</h3>
            </div>
           <div class="package__lists">
              <div class="package__list">
                <h4 class="package__list-title">Инсталяция и унитаз</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Унитаз Volle (Испания)</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Инсталяция Grohe (Германия)</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж инсталяции и унитаза</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Комплект смесителей </h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подключение смесителей</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Смесители для душа/ванной</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Смеситель для рукомойника</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренды: Imprese (Чехия), Devit (Италия), Grohe, Kludy (Германия)</span
                    >
                  </li>
                </ul>
              </div>
          </div>
        </div>
</div>
<!-- 8 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/8.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>Освещение</h2>
              <h3>Освещение и электрофурнитура</h3>
            </div>
           <div class="package__lists">
              <div class="package__list">
                <h4 class="package__list-title">Люстры, бра, свесы, точечные светильники</h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж осветительных приборов из каталога</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренды: Blitz, Wonderlighe, Maytoni (Германия), Nowodworski (Польша), Eglo (Австрия), Feron, Biom (Китай)</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <h4 class="package__list-title">Розетки, выключатели/включатели </h4>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж розеток/выключиетей/включателей</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Schneider Electric серия Asfora (белый, кремовый, серебро, золото, черный) - Франция</span
                    >
                  </li>
                </ul>
              </div>
          </div>
        </div>
</div>
<!-- 9 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/9.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>ОБОи</h2>
              <h3>ОБОи</h3>
            </div>
           <div class="package__lists">
              <div class="package__list">
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подготовка стен к поклейке обоев</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Выравнивание поверхности</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Нанесение грунтовки Eskaro</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Поклейка обоев клеем Bostik SUPER</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренды: Rash, Marburg, AS Creation, Erismann (Германия), Dekens, Grandeco (Бельгия) на флизелиновой основе</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <div class="package__content-title">
              <h2>ПОТОЛОК</h2>
              <h3>НАТЯЖНОЙ ПОТОЛОК</h3>
            </div>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка алюминиевого стенового профиля</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Крепление закладных</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка подшторника скрытого монтажа</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка натяжного потолка из премиум полотна </span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж декоративной вставки по периметру потолка</span
                    >
                  </li>
                </ul>
              </div>
          </div>
        </div>
</div>
<!-- 10 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/10.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>ламинат</h2>
              <h3>ламинат</h3>
            </div>
           <div class="package__lists">
              <div class="package__list">
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Подготовка и грунтовка поверхности пола</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Укладка подложка под ламинат</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж ламината 32-33 класса с фаской и без</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренды: Agt (Турция), Classen, Rooms, My floor (Германия), My step (Польша)</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <div class="package__content-title">
              <h2>ДВЕРИ</h2>
              <h3>ДВЕРИ</h3>
            </div>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж дверной коробки</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж наличников и доборов</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж дверных ручек и петель</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Установка межкомнатных дверей</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренд: Art Door серии Art-Line (евробрус в ламинации, с четвертью)</span
                    >
                  </li>
                </ul>
              </div>
          </div>
        </div>
</div>
<!-- 11 -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/11.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
            <div class="package__content-title">
              <h2>ПЛИНТУС</h2>
              <h3>ПЛИНТУС</h3>
            </div>
           <div class="package__lists">
              <div class="package__list">
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Монтаж напольного плинтуса</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренды: Salag, Arbiton (Польша)</span
                    >
                  </li>
                </ul>
              </div>
              <div class="package__list">
                <div class="package__content-title">
              <h2>плитка</h2>
              <h3>плитка</h3>
            </div>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Укладка плитки на стены и пол в санузле </span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Облицовка поддона керамической плиткой</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Укладка плитки в коридоре</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Укладка плитки фартук кухни</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Укладка напольной плитки в рабочей зоне кухни</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Клей для плитки KREISEEL, затирка Kilto,Mapei</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Бренды: OPOCZNO, Cersanit, Zeus Ceramica (Польша) Golden Tile, Atem (Украина)</span
                    >
                  </li>
                </ul>
              </div>
          </div>
        </div>
</div>

<!-- last -->
<div class="package__inner">
          <div class="package__image">
            <div class="package__image-wrap ib">
              <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/designer.jpg" alt="package" class="ib_use" />
            </div>
          </div>

          <div class="package__content">
          <div class="package__list">
            <div class="package__content-title">
              <h2>услуги</h2>
              <h3>Сопутствующие услуги</h3>
            </div>
                <ul class="package__list-list">
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Менеджмент и контроль качества</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >К каждому объекту прикреплен: личный менеджер/ дизайнер/руководитель проекта</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Закупка материалов, хранение на складе и своевременная доставка</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Чистовая уборка при завершении работ
</span
                    >
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Контроль качества инженером технического надзора</span>
                  </li>
                  <li>
                    <span
                      ><span class="iconify" data-icon="la:check-double"></span
                      >Сопровождение и сдача всех этапов проведения работ технадзором</span>
                  </li>
                </ul>
          </div>
        </div>
</div>



 



      </section>

      <!-- Payment -->

      <section class="payment payment_package">
        <div class="title anim-item title_left">
          <h2 class="title__title">преимущества</h2>
          <span class="title__text">почему выбирают нас</span>
        </div>

        <div class="payment__content">
          <div class="payment__carts">
            <div class="payment__cart anim-item payment-sizer">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">01</p>
                <p class="payment__cart-text">
                 Фиксируем итоговую стоимость и сроки в договоре. Отсутствие скрытых расходов
                </p>
              </div>
            </div>

            <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">02</p>
                <p class="payment__cart-text">
              Осуществляем прямые закупки сертифицированных материалов напрямую от импортёров
                </p>
              </div>
            </div>

            <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">03</p>
                <p class="payment__cart-text">
                  Предоставляем доступ к онлайн кабинету для контроля и управления всеми процессами ремонта
                </p>
              </div>
            </div>

            <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">04</p>
                <p class="payment__cart-text">
              Возможность оплаты частями (10%/40%/40%/10%) — выплата последних 10% после окончания всех работ
                </p>
              </div>
            </div>

            <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">05</p>
                <p class="payment__cart-text">
                  Возвращаем 25 $ за каждый просроченный день
                </p>
              </div>
            </div>

            <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">06</p>
                <p class="payment__cart-text">
                 Современный шоурум с большим выбором финишных материалов
                </p>
              </div>
            </div>

            <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">07</p>
                <p class="payment__cart-text">
                 Интерактивный онлайн-каталог с дизайнерским подбором материалов
                </p>
              </div>
            </div>

    <div class="payment__cart anim-item">
              <div class="payment__cart-wrap">
                <p class="payment__cart-num">08</p>
                <p class="payment__cart-text">
                Выдаём гарантийный сертификат сроком на 5 лет
                </p>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Gift -->

      <section class="gift gift_reverse">
        <div class="gift__content">
          <p class="gift__text">
            Получите дизайн-проект в подарок при заказе любого пакетного
            решения!
          </p>
          <div class="gift__btn">
              <button type="button" data-stili-item="пакет Базовый" data-open-popup="call-popup" class="btn btn_big-fill">заказать пакет</button>
          </div>
        </div>

        <div class="gift__image ib">
          <img src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/pack-gift.jpg" alt="gift" class="ib_use" />
        </div>
      </section>

  	       <!-- вывод секции portfolio -->
    <?php echo get_template_part( 'template-parts/content', 'portfolio' ); ?>

      <!-- Order -->

      <section class="order order_package order_reverse">
        <div class="order__inner">
          <div class="order__image ib">
            <img
              src="<?php echo get_template_directory_uri() ?>/source/new-img/page-package/pack-styles.jpg"
              alt="stili-remonta-materials"
              class="ib_use"
            />
          </div>

          <div class="order__content">
            <div class="order__content-wrap">
              <div class="order__content-title">
                <h2>Стили</h2>
                <h3>Выберите дизайн своей квартиры</h3>
              </div>
              <div class="order__list">
                <p class="order__list-title">
                  Наши дизайнеры подготовили подбор финишных материалов в 4х
                  стилях:
                </p>
                <ul class="order__list-list">
                  <li>лофт</li>
                  <li>минимализм</li>
                  <li>контемпорари</li>
                  <li>скандинавский</li>
                </ul>
              </div>
              <div class="order__content-btns">
                <a href="https://forroom.com.ua/ru/stili-remonta/" class="btn btn_big-fill">подробнее о стилях</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <?php get_footer(); ?>

      
  </body>
</html>
