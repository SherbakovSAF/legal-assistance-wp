<?php
function get_social_icon($social_link)
{
   // Извлекаем имя социальной сети из URL
   $social_network = parse_url($social_link, PHP_URL_HOST);
   $social_network = str_replace('www.', '', $social_network);
   $social_network = preg_replace('/\.[a-z]+(\.[a-z]+)?$/', '', $social_network);
   $pathToIcons = '/assets/img/socialMedia/';

   // Формируем путь к файлу иконки
   $icon_path =  get_template_directory() . $pathToIcons . $social_network . '.svg';

   // // Проверяем, существует ли файл иконки
   if (file_exists($icon_path)) {
      // Возвращаем HTML-код иконки
      return '<a href="#"><img src="' . get_bloginfo('template_url') . $pathToIcons . $social_network . '.svg" alt="vk"></a>';
   } else {
      return '';
   }
}
