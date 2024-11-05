<ul class="c-pager">
  <?php
  echo paginate_links(array(
    'prev_next' => false,
    'total' => $args->max_num_pages,
    'current' => max( 1, get_query_var('paged') )
  ));
  ?>
</ul>