<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package police
 */

?>

<article id="post-<?php the_ID(); ?>" class="news_page">
	
    <section class="news_content">
    <h1><?php the_title(''); ?></h1>
        
    <p class="post_info">    
    <span><?php the_time("Y年m月j日") ?></span>
        
    <span><?php the_terms($post->ID,'news_cat'); ?>
    </span>
        
    </p>
        
        <div class="row">
            

        
        <?php get_template_part('template-parts/news-parts/press-field'); ?>
        <?php get_template_part('template-parts/news-parts/item-field'); ?>
        <?php get_template_part('template-parts/news-parts/archive-field'); ?>
            
            
        </div>
        
        
        <?php

        $post_objects = get_field('press_link');

        if( $post_objects ): ?>
            <h3 style="padding-top:20px;">記事に関連するアイテム</h3>
            <div class="row">
            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <ul class="col-xs-6 col-sm-3 press_link">
                <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('litemlist'); ?></a></li>
                <li style="padding-top:10px;">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <li><a href="<?php the_permalink(); ?>" style="border:1px solid #fff;display:inline-block;padding:2px 10px;font-size:12px;">商品詳細</a></li>
                </ul>
            <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
        
        
        <div class="post_comment"><?php the_content(); ?></div>
        
        
    </section>
    




<!---------------次のアイテム----------------> 
<?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
 <div class="previous_item_wrapper">          
 <div class="previous_item">
    <span><img src="<?php bloginfo('template_directory'); ?>/images/arrow_left_s.png" /></span>
    <div class="mask">
	<a href="<?php echo get_permalink($prevpost->ID); ?>">
        前の投稿<br>
		<?php echo get_the_post_thumbnail($prevpost->ID, array(80,80) ); ?>
		<br><?php echo get_the_title($prevpost->ID);?>
	</a>
     </div>
</div>
</div>
<?php endif; ?>  



         
<?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
<div class="next_item_wrapper"> 
 <div class="next_item">
    <span><img src="<?php bloginfo('template_directory'); ?>/images/arrow_right_s.png" /></span>
    <div class="mask">
	<a href="<?php echo get_permalink($nextpost->ID); ?>">
        次の投稿<br>
		<?php echo get_the_post_thumbnail($nextpost->ID, array(80,80) ); ?>
		<br><?php echo get_the_title($nextpost->ID);?>
        </a>
    </div>
</div>
</div>
<?php endif; ?>  



    
</article><!-- #post-## -->







