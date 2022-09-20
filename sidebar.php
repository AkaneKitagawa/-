<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package police
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="side widget-area col-xs-12 col-sm-3" role="complementary">

<section>
<h3><span>最新ニュース</span><span>Latest News</span></h3>
<ul class="news_side">
<?php
query_posts('showposts=3&post_type=news');
if (have_posts()) : while (have_posts()) : the_post();
?>

    <li>
            

            <span class="side_news_btm">
                <span class="news_side_date">
                <?php the_time("Y年m月j日") ?>
                </span>
                <a href="<?php the_permalink() ?>" class="news_side_title"><?php the_title(); ?></a>
                <span class="news_side_thumb">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(50,50)); ?></a>
                </span>
            </span>

    </li>
<?php endwhile; endif; ?>
</ul>
</section>   



<section class="item_side">
<h3><span>最新アイテム</span><span>Latest Watches</span></h3>
    <div class="row">
    <?php
      $args = array(
        'post_type' => array('watches'),
        'posts_per_page' => 6, // 表示する投稿数
        'orderby' => 'date', //日付で並び替え
        'order' => 'DESC' // 降順 or 昇順
      );
      $my_posts = get_posts($args);
      ?>
  <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

              <div class="col-xs-6">
                 <ul>
                    <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(80,80)); ?></a></li>
                    <li><a href="<?php the_permalink(); ?>"><?php the_field("watch_name"); ?></a></li>
                    <li class="price">&yen; <?php the_field("price"); ?><span>（税込）</li>
                  </ul>
               </div> 

  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
        </div>
</section>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->
