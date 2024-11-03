<footer>
     <div class="p-footer__inner l-red-inner">
       <nav class="p-footer__nav p-footer-nav">
         <ul class="p-footer-nav__lists">
           <li class="p-footer-nav__list"><a href="index.html">ホーム</a></li>
           <li class="p-footer-nav__list"><a href="plan.html">料金</a></li>
           <li class="p-footer-nav__list"><a href="blog_list.html">ブログ</a></li>
           <li class="p-footer-nav__list"><a href="result_list.html">卒業実績</a></li>
         </ul>           
       </nav>
       <div class="p-footer__logo">
         <a href="<?php echo get_template_directory_uri(); ?>/index.html">
           <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="きたむらミュージックスクール">
          </a>
       </div>
       <p class="p-footer__copyright">Copyright<span style="font-size: 1em;">©</span>0000 KITAMURA music school Inc. <br class="sp">All Rights</p>
       <div>
         <ul class="p-footer__icon-wrap">
           <li>
             <a href="">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.svg" alt="twitter">
             </a>
           </li>          
           <li>
             <a href="">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="facebook">
             </a>
           </li> 
           <li>
             <a href="">
               <img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.svg" alt="youtube">
             </a>
           </li>
           <li>
             <a href="">
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