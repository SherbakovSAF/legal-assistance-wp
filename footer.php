<footer>
     <div class="footer-info large-container">
          <div class="logo-block-wrap">
               <?php the_custom_logo(); ?>
               <abbr title="International Legal Center">International</br>Legal Center</abbr>
               <p>Первый цифровой международный юридический центр</p>
          </div>
          <div class="footer-info_social-media">
               <a href="#"><img src="<?php echo wp_get_upload_dir()['url'] . '/vk.svg' ?>" alt="vk"></a>
               <a href="#"><img src="<?php echo wp_get_upload_dir()['url'] . '/instagram.svg' ?>" alt="instagram"></a>
               <a href="#"><img src="<?php echo wp_get_upload_dir()['url'] . '/twitter.svg' ?>" alt="twitter"></a>
               <a href="#"><img src="<?php echo wp_get_upload_dir()['url'] . '/facebook.svg' ?>" alt="facebook"></a>
          </div>
     </div>

     <div class="confidentiality-wrap">
          <div class="large-container">
               <blockquote>©<?php echo date("Y")?> «International Legal Center» | Разработано: effex-it.com</blockquote>
               <div class="confidentiality-wrap_links">
                    <a href="#">Политика конфиденциальности</a>
                    <a href="#">Пользовательское соглашение</a>
               </div>
          </div>

     </div>
</footer>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</div>
</body>

</html>