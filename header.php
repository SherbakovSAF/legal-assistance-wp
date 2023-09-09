<!DOCTYPE html>
<html lang="ru">
<?php wp_head(); ?>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LegalCenter</title>
	<?php wp_head() ?>
</head>
<body>
<header class="header large-container">     
          <div class="header-information">
               <div class="logo-block-wrap">
                    <?php the_custom_logo(); ?>
                    <abbr title="International Legal Center">International<br>Legal Center</abbr>
                    <p class="text-description_color-base">Первый цифровой международный юридический центр</p>
               </div>
               <div class="header-information__connect">
                    <a class="header-information__connect__phone-icon header-information_connect-icon" href="tel:+78005113768">
                         <div>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 22" >
                                   <g>
                                        <path clip-rule="evenodd" d="M0.180908 3.66665C0.180908 2.27444 1.30953 1.14582 2.70174 1.14582H10.0351C11.4273 1.14582 12.5559 2.27444 12.5559 3.66665V18.3333C12.5559 19.7256 11.4273 20.8542 10.0351 20.8542H2.70174C1.30953 20.8542 0.180908 19.7256 0.180908 18.3333V3.66665ZM2.70174 2.52082C2.06891 2.52082 1.55591 3.03382 1.55591 3.66665V18.3333C1.55591 18.9662 2.06891 19.4792 2.70174 19.4792H10.0351C10.6679 19.4792 11.1809 18.9662 11.1809 18.3333V3.66665C11.1809 3.03382 10.6679 2.52082 10.0351 2.52082H2.70174Z" />
                                        <path clip-rule="evenodd" d="M3.61841 1.14582C3.23872 1.14582 2.93091 1.45363 2.93091 1.83332V2.74999C2.93091 3.63595 3.64912 4.35415 4.53507 4.35415H8.20174C9.0877 4.35415 9.80591 3.63595 9.80591 2.74999V1.83332C9.80591 1.45363 9.49809 1.14582 9.11841 1.14582H3.61841Z"/>
                                   </g>
                              </svg>
                         </div>
                    </a>
                    <div class="header-information__connect__group">
                         <a class="text-phone" id="phone" href="tel:+78005113768">8 (800) 511-37-68</a>
                         <a class="btn" href="#">Войти</a>
                    </div>
               </div>
               <nav class="header-information_nav">
                    <input type="checkbox" id="menu-toggle">
                    <label class="header-information_connect-icon" for="menu-toggle">
                         <div>
                              <span></span>
                              <span></span>
                              <span></span>
                         </div>
                    </label>
                    <?php wp_nav_menu(array(
                         'theme_location' => 'headerNav',
                         'container' => null,
                         'menu_class' => 'text16'
                    ))?>
                    <!-- <ul class="text16">
                         <li id="login-nav-btn"><a href="#">Войти</a></li>
                         <li><a href="#">О компании</a></li>
                         <li><a href="#">Услуги</a></li>
                         <li><a href="#">Sirius</a></li>
                         <li><a href="#">Тарифы</a></li>
                         <li><a href="#">FAQ</a></li>
                         <li><a href="#">Контакты</a></li>
                    </ul> -->
               </nav>
               
               
          </div>
          
     </header>