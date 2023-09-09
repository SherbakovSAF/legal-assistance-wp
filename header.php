<div class="header-information">
     <div class="logo-block-wrap">
          <?php the_custom_logo(); ?>
          <abbr title="International Legal Center">International<br>Legal Center</abbr>
          <p class="text-description_color-base">Первый цифровой международный юридический центр</p>
     </div>
     <div class="header-information__connect">
          <a class="header-information__connect__phone-icon header-information_connect-icon" href="tel:+78005113768">
               <div>
                    <img src="<?php echo wp_get_upload_dir()['url'].'/nav-mobile-adaptive-icon.svg' ?>" alt="nav-mobile-adaptive-icon">
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
          )) ?>
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
