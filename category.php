<?php get_header(); ?>

<main class="secondpage inner ProductAll">
<?php
  $cat = get_the_category();
  $cat = $cat[0];
  $cat_slug = $cat -> slug;
  $cat_name = $cat -> name;
?>
<h2 class="<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></h2>

<?
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

//全カテゴリー記事一覧ページなら
if(is_page("all")){
  $args = array(
    'post_type' => "product", //投稿タイプ
    'posts_per_page' => get_option('posts_per_page'), //何件ずつ表示するか
    'paged' => $paged
  );
  $myquery = new WP_Query($args);

//通常のカテゴリーページなら
} else{
  $myquery = $wp_query;
}
?>

<div class="inside">
  <?php
  if($myquery->have_posts()) :
    while ($myquery->have_posts()) :
      $myquery->the_post();
      setup_postdata($post);
  ?>
  <ul>
      <li>
      <?php
      if( get_field('new_icon') ) {
        echo '<span class="new_icon">NEW</span>';
      } else {
        echo '';
      }
      ?><br>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </li>
      <li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a></li>
  </ul>
  <?php
    endwhile;
    wp_reset_postdata();
  ?>
</div>
<p><a class="clear rev_btn" href="<?php echo home_url(); ?>/product/">製品一覧へ戻る</a></p>

<!--<?php

  $args = array(
    'current' => max(1, $paged),
    'total' => $myquery->max_num_pages
  );

  echo paginate_links($args);
?>-->

<?php endif; ?>


</main>
<?php get_footer(); ?>