<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php wp_head(); ?>

<head>
     <meta charset="<?php bloginfo('charset')?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LegalCenter</title>
     <?php wp_head() ?>
</head>

<body>
     <div class="main-flex-wrap">
          <header class="header large-container">
               <div class="header-information">
                    <div class="logo-block-wrap">
                         <?php the_custom_logo(); ?>
                         <abbr title="International Legal Center">International<br>Legal Center</abbr>
                         <p class="text-description_color-base"><?php the_field('slogan_company') ?></p>
                    </div>
                    <div class="header-information_connect">
                         <a class="header-information_connect-icon" href="tel:<?php the_field('phone_number') ?>">
                              <div>
                                   <img src="<?php echo bloginfo('template_url') . '/assets/img/header/nav-mobile-adaptive-icon.svg' ?>" alt="nav-mobile-adaptive-icon">
                              </div>
                         </a>
                         <div class="header-information_connect_group">
                              <a class="text-subtitle text-700 text-grey-dark" id="phone" href="tel:<?php the_field('phone_number') ?>">
                                   <?php 
                                        $phoneNumber = get_field('phone_number');
                                        require get_template_directory().'/src/phpScripts/formated-phone-number.php';
                                        echo formatPhoneNumber($phoneNumber);
                                   ?>
                              </a>
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
                         <!-- <?php wp_nav_menu(array(
                              'theme_location' => 'headerNav',
                              'container' => null,
                              'menu_class' => 'text-subtitle text-black'
                         )) ?> -->
                         <ul class="text-subtitle text-black">
                              <li id="login-nav-btn"><a href="#">Войти</a></li>
                              <li><a href="#">О компании</a></li>
                              <li><a href="#">Услуги</a></li>
                              <li><a href="#">Sirius</a></li>
                              <li><a href="#">Тарифы</a></li>
                              <li><a href="#">FAQ</a></li>
                              <li><a href="#">Контакты</a></li>
                         </ul>
                    </nav>
               </div>