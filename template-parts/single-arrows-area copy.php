<div class="p-blog-details-main__articles">
  <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
  ?>
  <?php if ( !empty($prev_post) ): ?>             
    <a href="<?php echo get_permalink($prev_post->ID); ?>"
    class="p-blog-details-main__article">
      <p class="p-blog-details-main__pre-article">◀︎ 前の記事</p>     
      <div class="p-blog-details-main__article-item-02">
        <?php if(!empty($args) && $args['image_area'] == 'has'): ?>
        <div class="p-blog-details-main__article-image pc">
          <img src="<?php echo get_the_post_thumbnail_url($prev_post->ID); ?>" alt="">
        </div>
        <?php endif; ?>
        <p class="p-blog-details-main__article-title u-flex-1">
        <?php if(mb_strlen($prev_post->post_title)>32) {
          $title= mb_substr($prev_post->post_title,0,32); echo $title . '...';
          } else {
          echo $prev_post->post_title;
          } ?>
        </p>
      </div>
    </a>  
  <?php else: ?>
  <div class="p-blog-details-main__article"></div>
  <?php endif; ?>
    
  <?php if ( !empty($next_post) ): ?>
   <a href="<?php echo get_permalink($next_post->ID); ?>"
    class="p-blog-details-main__article">
     <div class="p-blog-details-main__article-item-01">
       <p class="p-blog-details-main__next-article">次の記事 ▶︎</p>
     </div>
     <div class="p-blog-details-main__article-item-02">
       <?php if(!empty($args) && $args['image_area'] == 'has'): ?>
       <div class="p-blog-details-main__article-image pc">
         <img src="<?php echo get_the_post_thumbnail_url($next_post->ID); ?>" alt="">
       </div>
       <?php endif; ?>
       <p class="p-blog-details-main__article-title u-flex-1">
         <?php if(mb_strlen($next_post->post_title)>32) {
         $title= mb_substr($next_post->post_title,0,32); echo $title . '...';
         } else {
         echo $next_post->post_title;
         } ?>
       </p>
     </div>
   </a>  
  <?php else: ?>
  <div class="p-blog-details-main__article"></div>
  <?php endif; ?>
</div> 