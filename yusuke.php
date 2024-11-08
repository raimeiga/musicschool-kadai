<dl class="p-contact__group">
 <dt>
    <label class="p-contact__label">会社名</label>
  </dt>
  <dd class="u-flex-1">
    [text* company-name class:p-contact__control placeholder "きたむらミュージックスクール"] 
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label class="p-contact__label">お名前</label>
  </dt>
  <dd class="u-flex-1">
    [text* your-name class:p-contact__control placeholder "北村　翔平"]   
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label class="p-contact__label">メールアドレス</label>
  </dt>
  <dd class="u-flex-1">
    [email* your-mail class:p-contact__control placeholder "info@kitamura.musicschool.jp"]    
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label class="p-contact__label">電話番号</label>
  </dt>
  <dd class="u-flex-1">
    [tel your-tel class:p-contact__control placeholder "090-1234-5678"]   
  </dd>
</dl>
<!-- チェックボックスの部分 -->
<dl class="p-contact__group">
  <dt>
    <label class="p-contact__label--pad">目　的<br class="pc">
    <span class="sp">　</span>(複数選択可)</label>
  </dt>
  <dd class="p-contact__checkboxes">
   [checkbox* your-subject use_label_element "プランについてのお問い合わせ" "ヒアリングのご予約" "資料請求" "その他"]   
  </dd>
</dl>
<dl class="p-contact__group">
  <dt>
    <label class="p-contact__label">内　容</label>
  </dt>
  <dd class="u-flex-1">
   [textarea your-message class:p-contact__textarea placeholder] 内容に関する詳細や備考等をご入力ください。 [/textarea]   
 </dd>
</dl>           
<div class="c-btn c-btn--contact-page">
[submit class:c-btn--submit-button "送 信"] 
</div>




<dd class="wpcf7-form-control-wrap">
  <span class="wpcf7-form-control-wrap">
    <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required">
      <span class="wpcf7-list-item">
        <label>
        </label>
      </span>
    </span>
  </span>
</dd>












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





<footer>
  <div class="p-footer__inner l-red-inner">   
   <nav class="footer-nav">
     <ul id="menu-footer" class="footer-nav-list">
       <li id="menu-item-179" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-179">
         <a href="http://musicschool-kadai.local/" aria-current="page">ホーム</a>
       </li>
       <li id="menu-item-176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176">
         <a href="http://musicschool-kadai.local/plan/">料金</a>
       </li>
       <li id="menu-item-177" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-177">
         <a href="http://musicschool-kadai.local/blog/">ブログ</a>
       </li>
       <li id="menu-item-178" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-178">
         <a href="http://musicschool-kadai.local/result/">卒業実績</a>
       </li>
     </ul>
   </nav>     
  <div class="p-footer__logo">


<footer>
     <div class="p-footer__inner l-red-inner">
       <nav class="p-footer__nav p-footer-nav">
       <?php
        wp_nav_menu(array(
          'menu' => 'footer',
          'menu_class' => 'footer-nav-list',
          'container' => 'nav',
          'container_class' => 'footer-nav'
        ));
        ?>       
       </nav>
       <div class="p-footer__logo">


<div class="p-header__nav p-header-nav">
  <nav class="header-nav">
    <ul id="menu-header" class="header-nav-list">
      <li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173">
        <a href="http://musicschool-kadai.local/plan/">料金</a>
      </li>
      <li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174">
        <a href="http://musicschool-kadai.local/blog/">ブログ</a>
      </li>
      <li id="menu-item-175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175">
        <a href="http://musicschool-kadai.local/result/">卒業実績</a>
      </li>
      <li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172">
        <a href="http://musicschool-kadai.local/contact/">お問い合わせ</a>
      </li>
    </ul>
  </nav>          
</div>
<div class="p-header__nav p-header-nav">
  <ul class="p-header-nav__lists">
    <li class="p-header-nav__list">
      <a href="plan.html">料金</a>
    </li>
    <li class="p-header-nav__list">
      <a href="blog_list.html">ブログ</a>
    </li>
    <li class="p-header-nav__list">
      <a href="result_list.html">卒業実績</a>
    </li>    
  </ul>
 </div>
 <a href="contact_form.html" class="c-btn c-btn--header pc">お問い合わせ</a>
 </div>

 <section class="result-list">
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array(
      'paged' => $paged,
      'post_type' => 'result',
      'orderby' => 'date',
      'order' => 'DESC'
  );
  $the_query = new WP_Query($args);
  ?>
  <div class="content-area">
    <h2 class="c-head-lower">卒業実績一覧</h2>
    <?php if($the_query->have_posts()):
    $i = 0;
    $total_count = $the_query->post_count;
    while($the_query->have_posts()): $the_query->the_post();
    if($i % 2 == 0):
    ?>
    <div class="result-list__row">
      <a href="<?php echo get_permalink($post->ID); ?>" 
      class="c-result-block c-result-block--list">
        <div class="c-result-block__img-area c-result-block__img-area--list">
          <p class="c-result-block__img c-result-block__img--list">
            <?php
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
            if (get_post_thumbnail_id($post->ID)):
            ?>
            <img src="<?php echo $thumb_url[0] ?>" alt="">
            <?php endif; ?>
          </p>
          <p class="c-result-block__tag">
          <?php
          $terms = get_the_terms($post->ID, 'result_tag');
          foreach ($terms as $term):
              echo $term->name;
          endforeach;
          ?>
          </p>
        </div>
        <div class="c-result-block__text-area">
          <p class="c-result-block__title c-result-block__title--list">
            <?php if(mb_strlen($post->post_title)>33) 
            {$title= mb_substr($post->post_title,0,33); echo $title . '...';
            } else {echo $post->post_title;} ?>
          </p>
          <p class="c-result-block__date c-result-block__date--list">
            <time datetime="the_time('Y-m-d')">
              <?php the_time('Y.m.d') ?>
            </time>
          </p>
        </div>
      </a>
      <?php if($i == $total_count - 1): ?>
    </div>
      <?php endif; ?>
    <?php else: ?>
      <a href="<?php echo get_permalink($post->ID); ?>" 
      class="c-result-block c-result-block--list">
        <div class="c-result-block__img-area c-result-block__img-area--list">
          <p class="c-result-block__img c-result-block__img--list">
            <?php
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
            if (get_post_thumbnail_id($post->ID)):
            ?>
            <img src="<?php echo $thumb_url[0] ?>" alt="">
            <?php endif; ?>
          </p>
          <p class="c-result-block__tag">
            <?php
            $terms = get_the_terms($post->ID, 'result_tag');
            foreach ($terms as $term):
                echo $term->name;
            endforeach;
            ?>
          </p>
        </div>
        <div class="c-result-block__text-area">
          <p class="c-result-block__title c-result-block__title--list">
            <?php if(mb_strlen($post->post_title)>33) 
            {$title= mb_substr($post->post_title,0,33); echo $title . '...';
            } else {echo $post->post_title;} ?>
          </p>
          <p class="c-result-block__date c-result-block__date--list">
            <time datetime="the_time('Y-m-d')">
              <?php the_time('Y.m.d') ?>
            </time>
          </p>
        </div>
      </a>
    </div>
    <?php endif; ?>
    <?php $i++; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
  <?php get_template_part('template-parts/pager', '', $the_query); ?>
</section>