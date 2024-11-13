<div class="c-blog-article__wrap">
  <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
  ?>
  <?php if ( !empty($prev_post) ): ?>             
    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="c-blog-article--prev-result
    <?php if($args['post_type'] == 'blog'): echo "c-blog-article--blog";  endif; ?>">
      <p class="c-blog-article__name c-blog-article__name--left">◀︎ 前の記事</p>     
      <div class="c-blog-article__item-box">
        <?php if(!empty($args) && $args['image_area'] == 'has'): ?>
        <div class="c-blog-article__image pc">
          <img src="<?php echo get_the_post_thumbnail_url($prev_post->ID); ?>" alt="">
        </div>
        <?php endif; ?>
        <p class="c-blog-article__title u-flex-1">
        <?php if(mb_strlen($prev_post->post_title)>32) {
          $title= mb_substr($prev_post->post_title,0,32); echo $title . '...';
          } else {
          echo $prev_post->post_title;
          } ?>
        </p>
      </div>
    </a>  
  <?php else: ?>
  <div class="c-blog-article--prev-result c-blog-article--blog"></div>
  <?php endif; ?>
    
  <?php if ( !empty($next_post) ): ?>
   <a href="<?php echo get_permalink($next_post->ID); ?>" class="c-blog-article--next-result
    <?php if($args['post_type'] == 'blog'): echo "c-blog-article--blog";  endif; ?>">
     <p class="c-blog-article__name c-blog-article__name--right">次の記事 ▶︎</p>
     <div class="c-blog-article__item-box">
       <?php if(!empty($args) && $args['image_area'] == 'has'): ?>
       <div class="c-blog-article__image pc">
         <img src="<?php echo get_the_post_thumbnail_url($next_post->ID); ?>" alt="">
       </div>
       <?php endif; ?>
       <p class="c-blog-article__title u-flex-1">
         <?php if(mb_strlen($next_post->post_title)>32) {
         $title= mb_substr($next_post->post_title,0,32); echo $title . '...';
         } else {
         echo $next_post->post_title;
         } ?>
       </p>
     </div>
   </a>  
  <?php else: ?>
  <div class="c-blog-article--next-result c-blog-article--blog"></div>
  <?php endif; ?>
</div> 