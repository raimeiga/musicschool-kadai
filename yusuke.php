<div class="c-breadcrumb-wrap">
  <div class="c-breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    <!-- Breadcrumb NavXT 7.3.1 -->
    <span property="itemListElement" typeof="ListItem">
      <a property="item" typeof="WebPage" title="きたむらミュージックスクール（WP化課題）へ移動する" href="http://musicschool-kadai.local" class="home c-breadcrumbs-text">
        <span property="name">ホーム</span>
      </a>
      <meta property="position" content="1">
    </span><p class="c-breadcrumbs-sign">&gt;</p>
    <span property="itemListElement" typeof="ListItem">
      <a property="item" typeof="WebPage" title="卒業実績へ移動する" href="http://musicschool-kadai.local/result/" class="archive post-result-archive c-breadcrumbs-text">
        <span property="name">卒業実績</span>
      </a>
      <meta property="position" content="2">
    </span>
    <p class="c-breadcrumbs-sign">&gt;</p>
    <span property="itemListElement" typeof="ListItem">
      <a property="item" typeof="WebPage" title="Go to the クラシック タグ_卒業実績 archives." href="http://musicschool-kadai.local/result_tag/%e3%82%af%e3%83%a9%e3%82%b7%e3%83%83%e3%82%af/" class="taxonomy result_tag c-breadcrumbs-text">
        <span property="name">クラシック</span>
      </a>
      <meta property="position" content="3">
    </span>
    <p class="c-breadcrumbs-sign">&gt;</p>
    <span property="itemListElement" typeof="ListItem">
      <span property="name" class="post post-result current-item c-breadcrumbs">タイトルが入ります。タイトルが入ります。タイトルが入ります。</span>
      <meta property="url" content="http://musicschool-kadai.local/result/test-2-5-4-2-2-3-2/">
      <meta property="position" content="4">
    </span>        
  </div>
</div>

<div class="c-breadcrumb-wrap">
  <div class="c-breadcrumb">   
    <span>
      <a class="home c-breadcrumbs-text" href="http://musicschool-kadai.local" >
        <span>ホーム</span>
      </a>
      <meta property="position" content="1">
    </span>
    <p class="c-breadcrumbs-sign">&gt;</p>
    <span>
      <a class="archive post-result-archive c-breadcrumbs-text" href="http://musicschool-kadai.local/result/">
        <span>卒業実績</span>
      </a>
      <meta property="position" content="2">
    </span>
    <p class="c-breadcrumbs-sign">&gt;</p>
    <span>
      <a class="taxonomy result_tag c-breadcrumbs-text" href="http://musicschool-kadai.local/result_tag/%e3%82%af%e3%83%a9%e3%82%b7%e3%83%83%e3%82%af/">
        <span>クラシック</span>
      </a>
      <meta property="position" content="3">
    </span>
    <p class="c-breadcrumbs-sign">&gt;</p>
    <span>
      <span class="post post-result current-item c-breadcrumbs">タイトルが入ります。タイトルが入ります。タイトルが入ります。</span>
      <meta property="url" content="http://musicschool-kadai.local/result/test-2-5-4-2-2-3-2/">
      <meta property="position" content="4">
    </span>        
  </div>
</div>













<div class="c-breadcrumbs">
  <span class="c-breadcrumbs-text">ホーム</span>
  <span class="c-breadcrumbs-sign">&gt;</span>
  <span class="c-breadcrumbs-text">卒業実績</span>
  <span class="c-breadcrumbs-sign">&gt;</span>
  <span class="c-breadcrumbs-text">クラシック</span>
  <span class="c-breadcrumbs-sign">&gt;</span>
  <span class="c-breadcrumbs-text">タイトルが入ります。タイトルが入ります。タイトルが入ります。</span>
</div>











<section class="blog-list">
  <div class="content-area content-area--search">
  <?php if ( !empty(get_search_query()) ): ?>
    <?php if (have_posts()): ?>
    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')): 1;
    $args = array(
    'paged' => $paged,
    'post_type' => array('blog','result'),
    'orderby' => 'date',
    'order' => 'DESC',
    's' => get_search_query()
    );
    $the_query = new WP_Query($args);
    ?>
    <h2 class="c-head-lower c-head-lower--title">
      「<span class="c-head-lower--title-em"><?php the_search_query(); ?></span>」
      の検索結果<span class="c-head-lower--count"><?php echo $the_query->found_posts; ?>件</span></h2>
      <?php if ( $the_query->have_posts()): while ( $the_query->have_posts()): $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-blog-block c-blog-block--list">
      <div class="c-blog-block__img-area c-blog-block__img-area--list">
        <p class="c-blog-block__img c-blog-block__img--list">
        <?php
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
        if (get_post_thumbnail_id($post->ID)) :
        ?>
        <img src="<?php echo $thumb_url[0]; ?>" alt="">
        <?php endif; ?>
        </p>
        <p class="c-blog-block__tag">
        <?php if (get_post_type() === 'blog'):
          $terms = get_the_terms($post->ID, 'blog_tag');
          foreach ($terms as $term):
            echo $term->name;
          endforeach;
        endif; ?>
        <?php if (get_post_type() === 'result'):
          $terms = get_the_terms($post->ID, 'result_tag');
          foreach ($terms as $term):
            echo $term->name;
          endforeach;
        endif; ?>
        </p>
      </div>
      <div class="c-blog-block__text-area">
        <p class="c-blog-block__title c-blog-block__title--list">
          <?php if(mb_strlen($post->post_title)>37) {
          $title= mb_substr($post->post_title,0,37); echo $title . '...';} else {
          echo $post->post_title;} ?>
        </p>
        <p class="c-blog-block__date c-blog-block__date--list">
          <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d') ?></time>
        </p>
        <p class="c-blog-block__text"><?php echo get_the_excerpt(); ?></p>
      </div>
    </a>
      <?php endwhile; ?>
      <?php endif;//$the_query->have_posts() ?>
    <?php else://have_posts() ?>
    <p class="search-error-text">検索されたキーワードにマッチする記事はありませんでした。</p>
    <div class="c-button c-button--main"><a onclick="history.back()" class="c-button-link">戻る</a></div>
    <?php endif;//if (have_posts() ?>
  <?php else://!empty(get_search_query()) ?>
    <p class="search-error-text">検索キーワードが未入力です。</p>
    <div class="c-button c-button--main"><a onclick="history.back()" class="c-button-link">戻る</a></div>
  <?php endif;//!empty(get_search_query()) ?>
  </div>

  <?php if ( !empty(get_search_query()) ): ?>
    <?php if (have_posts()): ?>
      <?php get_template_part('template-parts/pager', '', $the_query); ?>
    <?php endif; ?>
  <?php endif; ?>
</section>








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


<dd class="p-contact__checkboxes">
  <span class="wpcf7-form-control-wrap">
    <span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required">
      <span class="wpcf7-list-item first">
        <label>
          <input type="checkbox" name="your-subject[]" value="プランについてのお問い合わせ">
          <span class="wpcf7-list-item-label"></span>
        </label>
      </span>
      <span class="wpcf7-list-item">
        <label>
          <input type="checkbox" name="your-subject[]" value="ヒアリングのご予約">
          <span class="wpcf7-list-item-label"></span>
        </label>
      </span>
      <span class="wpcf7-list-item">
        <label>
          <input type="checkbox" name="your-subject[]" value="資料請求">
          <span class="wpcf7-list-item-label"></span>
        </label>
      </span>
      <span class="wpcf7-list-item last">
        <label>
          <input type="checkbox" name="your-subject[]" value="その他">
          <span class="wpcf7-list-item-label"></span>
        </label>
      </span> 
    </span>
  </span>
</dd>

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