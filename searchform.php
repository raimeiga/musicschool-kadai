<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="p-sidebar-blog-search__box">
  <input type="search" name="s" class="p-sidebar-blog-search__input">
  <button type="submit" class="p-sidebar-blog__search-button">                   
    <div class="p-sidebar-blog-search__btn-bg">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/icon-search-btn-sp.svg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-search-btn.svg" class="search-icon" alt="検索">
        </picture>                    
    </div>
  </button>
</form> 