
<div class="owl-carousel owl-theme">
<?php

$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page'=> 10,
  'category__in' => $category_ID,
  'orderby' => 'date',
);
$query = new WP_Query($args); ?>

  <?php if( $query -> have_posts() ): ?>
  <?php while ($query -> have_posts()) : $query -> the_post(); ?>
    
    <div>
      <div>
  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="related_img">
        <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('litemlist'); ?>
        <?php else:  ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="NO IMAGE" title="NO IMAGE" width="100px" />
        <?php endif; ?>
        </a>
      </div><!-- /.related-entry-thumb -->
      
      <div class="related-entry-content">
        <h3 class="related-entry-title">
            <span><?php the_field('product-code'); ?></span>
            <a href="<?php the_permalink(); ?>">
          <!--<?php the_title(); ?>-->
          </a>
        </h3>
        
        <p class="related_link_btn"><a href="<?php the_permalink(); ?>">詳細</a></p>
      </div><!-- /.related-entry-content -->
      </div>    
    
  
  <?php endwhile;?>
    
  
  <?php else:?>
  <p>関連アイテムはありません</p>
  <?php
endif;
wp_reset_postdata();
?>
</div>
