<div class="c-col-main--arrow">
  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  ?>
  <?php if ( !empty($prev_post) ): ?>
  <a href="<?php echo get_permalink($prev_post->ID); ?>" 
   class="c-col-main--arrow-prev c-col-main--arrow-blog">
    <p class="c-blog-section-name c-blog-section-name--arrow-prev">◀︎ 前の記事</p>
    <div class="c-arrow-block">
      <?php if(has_post_thumbnail()): ?>
      <div class="c-arrow-block__img-area">
        <p class="c-arrow-block__img">
          <img src="<?php echo get_the_post_thumbnail_url($prev_post->ID); ?>" alt="">
        </p>
      </div>
      <?php endif; ?>
      <div class="c-arrow-block__text-area">
        <p class="c-arrow-block__title">
          <?php if(mb_strlen($prev_post->post_title)>32) {
          $title= mb_substr($prev_post->post_title,0,32); echo $title . '...';
          } else {
          echo $prev_post->post_title;
          } ?>
        </p>
      </div>
    </div>
  </a>
  <?php else: ?>
  <p class="c-col-main--arrow-prev c-col-main--arrow-blog"></p>
  <?php endif; ?>
  
  <?php if ( !empty($next_post) ): ?>
  <a href="<?php echo get_permalink($next_post->ID); ?>" 
  class="c-col-main--arrow-next c-col-main--arrow-blog">
    <p class="c-blog-section-name c-blog-section-name--arrow-next">次の記事 ▶︎</p>
    <div class="c-arrow-block">
      <?php if(has_post_thumbnail()): ?>
      <div class="c-arrow-block__img-area">
        <p class="c-arrow-block__img">
          <img src="<?php echo get_the_post_thumbnail_url($next_post->ID); ?>" alt="">
        </p>
      </div>
      <?php endif; ?>
      <div class="c-arrow-block__text-area">
        <p class="c-arrow-block__title">
          <?php if(mb_strlen($next_post->post_title)>32) {
          $title= mb_substr($next_post->post_title,0,32); echo $title . '...';
          } else {
          echo $next_post->post_title;
          } ?>
        </p>
      </div>
    </div>
  </a>
  <?php else: ?>
  <p class="c-col-main--arrow-next c-col-main--arrow-blog"></p>
  <?php endif; ?>
</div>