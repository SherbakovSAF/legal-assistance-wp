<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<div class="header-title">
     <h1 class="text-title">Юридический полис ILC — быстрое решение сложных вопросов 24/7</h1>
     <p class="text-p-title">Ваша личная команда профессиональных юристов, которая всегда под рукой. А также доступ к бонусам партнерской программы — доход до $260 с каждого полиса, купленного по вашему приглашению.</p>
     <div>
          <a class="btn" href="#">Попробовать бесплатно</a>
     </div>
</div>
<div class="header-circle-el">

     <div>
          <p>
               Доход
               <span>до $260</span>
               <span>с каждого</br>полиса</span>
          </p>
          <img src="<?php echo wp_get_upload_dir()['url'] . '/header-circle-el.svg' ?>" alt="header-circle-el">
     </div>
</div>
<div class="header-img">
     <img src="<?php echo wp_get_upload_dir()['url'] . '/header-main-img.svg' ?>" alt="header-main-img">
</div>
<div class="header-advantages text-header-advantages">
     <div class="header-advantages__wrap">
          <dl>
               <dt>
                    <img src="<?php echo wp_get_upload_dir()['url'] . '/header-advantages-support.svg' ?>" alt="header-advantages-support">
               </dt>
               <dd>Юридическая поддержка 24/7</dd>
          </dl>
          <dl>
               <dt>
                    <img src="<?php echo wp_get_upload_dir()['url'] . '/header-advantages-possibilities.svg' ?>" alt="header-advantages-possibilities">
               </dt>
               <dd>Множество возможностей в одном полисе</dd>
          </dl>
          <dl>
               <dt>
                    <img src="<?php echo wp_get_upload_dir()['url'] . '/header-advantages-bonus.svg' ?>" alt="header-advantages-bonus">
               </dt>
               <dd>Бонусы партнерской программы</dd>
          </dl>
     </div>
</div>
</header>
<main>
     <section class="support small-container">
          <div class="support-about">
               <div class="support-about-title">
                    <div class="logo-block-wrap">
                         <?php the_custom_logo(); ?>
                    </div>
                    <h2 class="text-support-title">Ваша личная online команда юристов</h2>
                    <p class="text-support-subtitle">Мы предоставляем комплексный консалтинговый сервис с полисной системой обслуживания для частных клиентов и для бизнеса, с использованием новейших цифровых технологий.</p>
               </div>
               <div class="support-about-stats">
                    <div class="support-about-stats-text">
                         <dl>
                              <dt>100+ <span>тыс</span></dt>
                              <dd>Клиентов<br /> по всему миру</dd>
                         </dl>
                         <dl>
                              <dt>15 <span>лет</span></dt>
                              <dd>Качественной работы</dd>
                         </dl>
                         <dl>
                              <dt>50+</dt>
                              <dd>Опытных юристов в штате</dd>
                         </dl>
                         <dl>
                              <dt>SIRIUS</dt>
                              <dd>Система на базе искусственного интеллекта</dd>
                         </dl>
                    </div>
                    <div class="support-about-stats-img">
                         <img src="<?php echo wp_get_upload_dir()['url'] . '/support-header-img.svg' ?>" alt="support-header-img">
                    </div>
               </div>
          </div>
          <div class="support-clients">
               <p class="support-clients__title">Даём поддержку</p>
               <div class="support-clients__client-card">
                    <article>
                         <div>
                              <div>
                                   <img src="<?php echo wp_get_upload_dir()['url'] . '/support-business.svg' ?>" alt="support-business">
                              </div>
                              <h3 class="text-supprt-card-title">Бизнесу</h3>
                              <p class="text-supprt-card-subtitle">Услуги профессиональных юристов для вашей компании по фиксированному тарифу — это в несколько раз выгоднее, чем содержать свой штат.</p>
                         </div>
                    </article>
                    <article>
                         <div>
                              <div>
                                   <img src="<?php echo wp_get_upload_dir()['url'] . '/support-startUp.svg' ?>" alt="support-business">
                              </div>
                              <h3 class="text-supprt-card-title">StartUP проектам</h3>
                              <p class="text-supprt-card-subtitle">Эксперты ILC помогут выбрать оптимальную правовую форму для ведения бизнеса, оптимизировать налоги и подготовить необходимый пакет документов.</p>
                         </div>
                    </article>
                    <article>
                         <div>
                              <div>
                                   <img src="<?php echo wp_get_upload_dir()['url'] . '/support-privateClients.svg' ?>" alt="support-privateClients">
                              </div>
                              <h3 class="text-supprt-card-title">Частным клиентам</h3>
                              <p class="text-supprt-card-subtitle">Оперативные решения сложных вопросов в режиме онлайн: ДТП, наследство, страховые споры, земельные и имущественные процессы, защита прав.</p>
                         </div>
                    </article>
               </div>
          </div>
     </section>
     <section class="tariffs small-container">
          <div class="tariffs_header">
               <h2 class="tariffs_header_title">Тарифы</h2>
               <p class="tariffs_header_subtitle">для всех и для каждого</p>
          </div>
          <div class="tariffs_time-toggle tariff_toggle-text">
               <button class="tariff-toggle-active">1 месяц</button>
               <button href="#">Год</button>
          </div>
          <ul class="tariffs_card-wrap">
               <?php
               global $post;

               $myposts = get_posts([
                    'post_type' => 'tariffs',
                    'numberposts' => -1,
                    'suppress_filters' => true,
               ]);

               if ($myposts) {
                    foreach ($myposts as $post) {
                         setup_postdata($post);
               ?>
                         <li class="tariffs_card">
                              <div>
                                   <h3 class="tariffs_card_title"><?php the_title() ?></h3>
                                   <p class="tariffs_card_type-client"><?php the_field('type_client') ?></p>
                                   <p class="tariffs_card_price"><?php the_field('price') ?></p>
                                   <h4 class="tariffs_card_privilege-title">Для Вас доступно</h4>
                                   <ul class="tariffs_card_privilege">
                                        <?php
                                        for ($i = 1; $i <= 5; $i++) {
                                             if (get_field('privilege' . $i)) {
                                                  $privilegeText = get_field('privilege' . $i);
                                                  echo '<li>' . $privilegeText . '</li>';
                                             }
                                        }
                                        ?>
                                   </ul>
                                   <a class="tariffs_card_more-btn" href="#">Подробнее в личном кабинете</a>
                                   <a class="btn" href="#">Оставить заявку</a>
                              </div>
                         </li>
               <?php
                    }
               } else {
                    // Постов не найдено
               }

               wp_reset_postdata(); // Сбрасываем $post
               ?>
          </ul>
     </section>
     <section class="partner-banner">
          <div class="partner-banner_text-wrap small-container">
               <div class="partner-banner_text">
                    <h2 class="partner-title">Станьте партнером ILC</h2>
                    <p class="partner-subtitle">и зарабатывайте на рекомендациях в любое время, из любой точки мира</p>
               </div>
               <img src="<?php echo wp_get_upload_dir()['url'] . '/partner-people-img.svg' ?>" alt="partner-people-img">
          </div>
          <img src="<?php echo wp_get_upload_dir()['url'] . '/partners-banner-planet.jpg' ?>" alt="partners-banner-planet">
     </section>
     <section class="start small-container">
          <h2>Начать легко</h2>
          <div class="start_content-wrap">
               <div class="start-content_card-block-wrap">
                    <div class="start-content_card-wrap">
                         <article class="start-content_card">
                              <div>
                                   <h3>Регистрация</h3>
                                   <p class="text-description">Заполните простую форму для участия в программе и активируйте клиентский пакет.</p>
                              </div>
                         </article>
                         <article class="start-content_card">
                              <div>
                                   <h3>Обучение</h3>
                                   <p class="text-description">Вас ждут полезные обучающие материалы, с помощью которых вы легко сможете монетизировать свое время.</p>
                              </div>
                         </article>
                         <article class="start-content_card">
                              <div>
                                   <img src="<?php echo wp_get_upload_dir()['url'] . '/start-strategy.svg' ?>" alt="start-strategy">
                                   <h3>Стратегия</h3>
                                   <p class="text-description">Воспользуйтесь подробным и понятным алгоритмом действий для достижения классных результатов.</p>
                              </div>
                         </article>
                    </div>
                    <article class="start-content_card--last">
                         <div>
                              <img src="<?php echo wp_get_upload_dir()['url'] . '/start-result.svg' ?>" alt="start-result">
                              <h3>Результат</h3>
                              <p class="text-description">Воспользуйтесь подробным и понятным алгоритмом действий для достижения классных результатов.</p>
                              <a class="btn" href="#">Начать зарабатывать</a>
                         </div>
                    </article>
               </div>
               <img src="<?php echo wp_get_upload_dir()['url'] . '/start-bg.svg' ?>" alt="start-bg">
          </div>
     </section>
     <section class="plans">
          <div class="plans_content-wrap large-container">
               <h2>Прогнозы партнерской программы на <?php echo date("Y") ?> год</h2>
               <div class="plans_stats-wrap">
                    <?php
                    global $post;

                    $myposts = get_posts([
                         'numberposts' => -1,
                         'category'    => 6
                    ]);

                    if ($myposts) {
                         foreach ($myposts as $post) {
                              setup_postdata($post);
                    ?>
                         <dl>
                              <dt><?php the_content() ?></dt>
                              <dd><?php the_title() ?></dd>
                         </dl>
                    <?php
                         }
                    } 
                    wp_reset_postdata(); // Сбрасываем $post
                    ?>
               </div>
          </div>
     </section>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</div>
</body>

</html>