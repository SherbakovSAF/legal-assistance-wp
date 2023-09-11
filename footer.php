<footer>
     <div class="footer-info large-container">
          <div class="logo-block-wrap">
               <?php the_custom_logo(); ?>
               <abbr title="International Legal Center">International</br>Legal Center</abbr>
               <p>Первый цифровой международный юридический центр</p>
          </div>
          <div class="footer-info_social-media">
          <?php
               global $post;
               $myposts = get_posts([
                    'post_type' => 'social_media',
                    'numberposts' => -1,
                    'suppress_filters' => true,
               ]);

               require get_template_directory().'/src/phpScripts/getSocialIcon.php';

               if ($myposts) {
                    foreach ($myposts as $post) {
                         setup_postdata($post);
                         echo get_social_icon(get_field('url'));
                    }
               } 
               wp_reset_postdata(); 
               ?>
               
          </div>
     </div>

     <div class="confidentiality-wrap">
          <div class="large-container">
               <blockquote>©<?php echo date("Y")?> «International Legal Center» | Разработано: 
                    <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
               </blockquote>
               <div class="confidentiality-wrap_links">
                    <a href="#">Политика конфиденциальности</a>
                    <a href="#">Пользовательское соглашение</a>
               </div>
          </div>

     </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>