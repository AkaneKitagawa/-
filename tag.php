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
	
		<main class="inner">
            
        <section class="row brand_list">
            
              
		<?php
if($posts): foreach($posts as $post): setup_postdata($post); ?>
            
        
              <div class="col-xs-6 col-sm-3">
                 <ul>
                    <li><a href="/category/<?php the_field('itemlist_link'); ?>" style="z-index:1000;"><?php the_post_thumbnail('litemlist'); ?></a></li>
                     <!--<li><img src="<?php bloginfo('template_directory'); ?>/images/lineup/model_list2.jpg" data-original="<?php bloginfo('template_directory'); ?>/images/lineup/model_list1.jpg" class="lazy"></li>-->
                  
                  <!--<p class="postlist-datetime"><?php
$days = 14; //Newを表示させたい期間の日数
$today = date_i18n('U');
$entry = get_the_time('U');
$kiji = date('U',($today - $entry)) / 86400 ;
if( $days > $kiji ){
echo '<span class="icon_new_blue">NEW</span>';
}
?></p>-->
                  <li class="brand_list_title"><h2><?php the_field('brandname'); ?><br><span><?php the_field('brandname_ja'); ?></span></h2></li>
                  </ul>
                </div>
            
            
          <?php endforeach; endif; ?>
            

<div class="pagenation">
<?php echo bmPageNavi(); // ページネーション出力
$wp_query = null; 
$wp_query = $temp;  // Reset
?>
</div>

            
            
            
            
            
            
            
            
            
            
            
            </section>
		</main><!-- #main -->
	

</div>











<?php get_template_part('template-parts/bottom'); ?><!---------------グローバルナビ----------------> 

<?php wp_footer(); ?>


<!--
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lazyload.js"></script>
<script>


    jQuery(function($){
        $("img.lazy").lazyload({
            effect: 'fadeIn',
            effectspeed: 3000,
            threshold: 300
        });
    });


</script>
-->



</body>
</html>
