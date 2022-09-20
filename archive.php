<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package police
 */

get_header(); ?>

<div
  class="animsition"
  data-animsition-in-class="fade-in"
  data-animsition-in-duration="2500"
  data-animsition-out-class="fade-out"
  data-animsition-out-duration="800"
>
	
		<main class="inner main_outer">
            
        <section class="row item_list">
		<?php
if($posts): foreach($posts as $post): setup_postdata($post); ?>
                
        
              <div class="col-xs-6 col-sm-3">
                 <ul>
                    <li class="itemlist_thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('litemlist'); ?>
                            
                        </a>
                        
                     </li>
                     
                  
                  <!--<p class="postlist-datetime"><?php
$days = 14; //Newを表示させたい期間の日数
$today = date_i18n('U');
$entry = get_the_time('U');
$kiji = date('U',($today - $entry)) / 86400 ;
if( $days > $kiji ){
echo '<span class="icon_new_blue">NEW</span>';
}
?></p>-->
                  <li class="item_list_title"><h2><span><?php the_field('product-code'); ?></span></h2></li>
                  <li class="item_list_btn"><a href="<?php the_permalink(); ?>">詳細</a>
                             <?php if( get_field( 'display_360' ) ): ?>
                             <span class="item_list_360">360°VIEW</span>
                             <?php else : ?> 
                             <?php endif; ?></li>
                  </ul>
                </div>

                <?php endforeach; endif; ?>
            
    
            
            </section>
		</main><!-- #main -->
	

</div>

<?php get_footer(); ?>
