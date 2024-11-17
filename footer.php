    <footer>
     <div class="p-footer__inner l-red-inner">
       <!-- <nav class="p-footer__nav p-footer-nav"> -->
       <?php
        wp_nav_menu(array(
          'menu' => 'footer',
          'menu_class' => 'footer-nav-list',
          'container' => 'nav',
          'container_class' => 'footer-nav'
        ));
        ?>       
       <!-- </nav> -->
       <div class="p-footer__logo">
         <a href="<?php echo esc_url( home_url( '/' ) .  '#top'); ?>">
           <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="きたむらミュージックスクール">
         </a>
       </div>
       <p class="p-footer__copyright">Copyright<span style="font-size: 1em;">©</span>0000 KITAMURA music school Inc. <br class="sp">All Rights</p>
       <div>
         <ul class="p-footer__icon-wrap">
           <!-- Twitter -->
           <li>
             <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.svg" alt="twitter">
             </a>
           </li>
           
           <!-- Facebook -->
           <li>
             <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="facebook">
             </a>
           </li>
           
           <!-- YouTube -->
           <li>
             <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.svg" alt="youtube">
             </a>
           </li>
           
           <!-- Instagram -->
           <li>
             <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt="instagram">
             </a>
           </li>
         </ul>
       </div>
     </div>
    </footer>
   </div>
  <?php wp_footer(); ?>
 </body>
</html>

