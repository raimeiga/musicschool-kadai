<div class="contact-form__item">
  <label class="contact-form__label">会社名</label>
  [text* company-name class:contact-form__input placeholder"きたむらミュージックスクール"]
</div>

<div class="contact-form__item">
  <label class="contact-form__label">お名前</label>
  [text* your-name class:contact-form__input placeholder"北村　翔平"]
</div>

<div class="contact-form__item">
  <label class="contact-form__label">メールアドレス</label>
  [email* your-email class:contact-form__input placeholder"info@kitamura.musicschool.jp"]
</div>

<div class="contact-form__item">
  <label class="contact-form__label">電話番号</label>
  [tel* your-tel class:contact-form__input placeholder"090-1234-5678"]
</div>

<div class="contact-form__item">
  <label class="contact-form__label">内　容<br class="sp-none">(複数選択可)</label>
  <div class="contact-form-check-area">
  [checkbox* your-subject use_label_element "プランについてのお問い合わせ" "ヒアリングのご予約" "資料請求" "その他"]
  </div>
</div>

<div class="contact-form__item">
  <label class="contact-form__label">備　考</label>
  [textarea your-message use_label_element class:contact-form__input class:contact-form__textarea 
  placeholder"内容に関する詳細や備考等をご入力ください。"]
</div>
<div class="contact-form__item contact-form__item--bottom">
[submit class:c-button class:c-button--main "送 信"]
</div>


<dl class="p-contact__group">
  <dt>
    <label for="company-name" class="p-contact__label">会社名</label>
  </dt>
  <dd class="u-flex-1">
    <input type="text" name="company-name" id="company-name" class="p-contact__control" placeholder="きたむらミュージックスクール">
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label for="name" class="p-contact__label">お名前</label>
  </dt>
  <dd class="u-flex-1">
    <input type="text" name="name" id="name" class="p-contact__control" placeholder="北村　翔平">
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label for="your-mail" class="p-contact__label">メールアドレス</label>
  </dt>
  <dd class="u-flex-1">
    <input type="text" name="your-mail" id="your-mail" class="p-contact__control" placeholder="info@kitamura.musicschool.jp">
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label for="tel" class="p-contact__label">電話番号</label>
  </dt>
  <dd class="u-flex-1">
    <input type="text" name="tel" id="tel" class="p-contact__control" placeholder="090-1234-5678">
  </dd>
</dl>
<!-- チェックボックスの部分 -->
<dl class="p-contact__group">
  <dt>
    <label class="p-contact__label--pad">目　的<br class="pc"><span class="sp">　</span>(複数選択可)</label>
  </dt>
  <dd class="p-contact__checkboxes">
    <label for="inquiry_plan" class="p-contact__checkbox">
      <input type="checkbox" name="inquiry_plan" id="inquiry_plan" value="プランについてのお問い合わせ">
      <span>プランについてのお問い合わせ</span>
    </label>
    <label for="reservation_hearing" class="p-contact__checkbox">
      <input type="checkbox" name="reservation_hearing" id="reservation_hearing" value="ヒアリングのご予約">
      <span>ヒアリングのご予約</span>
    </label>
    <label for="request_material" class="p-contact__checkbox">
      <input type="checkbox" name="request_material" id="request_material" value="資料請求">
      <span>資料請求</span>
    </label>
    <label for="other_requests" class="p-contact__checkbox">
      <input type="checkbox" name="other_requests" id="other_requests" value="その他">
      <span>その他</span>
    </label>
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label for="content" class="p-contact__label">内　容</label>
  </dt>
  <dd class="u-flex-1">
   <textarea name="content" id="content" class="p-contact__textarea" placeholder="内容に関する詳細や備考等をご入力ください。"></textarea>
 </dd>
</dl>           
<div class="c-btn c-btn--contact-page">             
 <button type="submit" class="c-btn--submit-button">送 信</button> 
</div>   
<!-- <a href="contact_send.html">送 信</a>     -->

<div class="c-col-main--related">
  <?php
  $terms = get_the_terms($post->ID, 'blog_tag');
  if(!empty($terms)):
  foreach ( $terms as $term ):
    $args = array(
      'posts_per_page' => 3,
      'post_type' => 'blog',
      'taxonomy' => 'blog_tag',
      'term' => $term->slug,
      'orderby' => 'date',
      'order' => 'DESC'
    );
    $the_query = new WP_Query($args);
  ?>
  <p class="c-blog-section-name c-blog-section-name--related">関連記事</p>
  <?php if( $the_query->have_posts() ):
  while( $the_query->have_posts() ): $the_query->the_post(); ?>
  <a href="<?php echo get_permalink($post->ID); ?>" class="c-blog-block c-blog-block--related">
    <div class="c-blog-block__img-area c-blog-block__img-area--related">
      <p class="c-blog-block__img c-blog-block__img--related">
      <?php
      $thumbnail_id = get_post_thumbnail_id($post->ID);
      $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
      if ( get_post_thumbnail_id($post->ID) ):
      ?>
        <img src="<?php echo $thumb_url[0]; ?>" alt="">
      <?php endif; ?>
      </p>
      <p class="c-blog-block__tag"><?php echo $term->name; ?></p>
    </div>
    <div class="c-blog-block__text-area">
      <p class="c-blog-block__title c-blog-block__title--related">
        <?php if(mb_strlen($post->post_title)>32) 
        {$title= mb_substr($post->post_title,0,32); echo $title . '...';} 
        else {echo $post->post_title;} ?>
      </p>
      <p class="c-blog-block__date c-blog-block__date--related">
        <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d') ?></time>
      </p>
    </div>
  </a>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php endif; ?>
</div>