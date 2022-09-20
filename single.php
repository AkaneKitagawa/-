<?php
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class="secondpage">
	<section class="catArea_bg ProductAll">
		<!-- カテゴリー名 -->
		<?php
		  $cat = get_the_category();
		  $cat = $cat[0];
		  $cat_slug = $cat -> slug;
		  $cat_name = $cat -> name;
		?>
		<h2 class="<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></h2>
		<!-- 記事タイトル -->
    <h1 class="text-narrow"><?php the_title(); ?></h1>
    <!-- 車両画像 -->
    <p><?php $image = wp_get_attachment_image_src(get_field('car_img'), 'full'); ?>
		 <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('car_img')) ?>" />
		</p>
  </section>

	<section class="wheelArea inner fade-in fade-in-up">
	<!-- ホイールスライダー -->
	<div class="wheel_slider">
		<?php if(get_field('wheel')): ?>
			<?php while(the_flexible_field('wheel')): ?>
				<?php if(get_row_layout() == 'wheel_list'): ?>
						<dl>
	    	  	<dd><?php the_sub_field('wheellist_name','option'); ?></dd>
	    	  	<dt><img src="<?php the_sub_field('wheellist_img','option'); ?>" /></dt>
	    	  	<dd><?php the_sub_field('wheellist_color','option'); ?></dd>
	    	  	</dl>
					<?php endif; ?>
	      <?php endwhile; ?>
	    <?php endif; ?>
	</div>
	</section>

	<section class="PriceArea inner">
		<h3 class="fade-in fade-in-up">PRICE LIST<span>料金表</span></h3>
			<div class="popup" id="js-popup">
			  <div class="popup-inner">
			    <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
						<?php get_template_part('template-parts/wheel_price'); ?><!-- ホイールテーブル -->
			  </div>
			  <div class="black-background" id="js-black-bg"></div>
			</div>
			<button id="js-show-popup" class="button button5">料金表はコチラ</button>
	</section>

	<section class="GalleryArea inner fade-in fade-in-up">
		<h3>GALLERY<span>ギャラリー</span></h3>
        <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
                <?php
                  $images = get_field('gallery_img'); // 値の取得
                  if($images): // 値があれば表示
                ?>
                <ul>
                <?php foreach( $images as $image ): // ループ処理の開始 ?>
                    <li class="galleryItem fade-in fade-in-up">
                      <!--<a href="<?php echo $image['url']; ?>" data-fancybox="gallery" data-caption="<?php echo $image['caption']; ?>">-->
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <!--</a>
                      <p><?php echo $image['caption']; ?></p>-->
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php endif; ?>
        </article>
	</section>

	<section class="top_anchor top_contact">
	    <div class="inner">
	        <dl>
	            <dd>お電話でのお問い合わせ</dd>
	            <dt><span>TEL　</span>045-590-0278</dt>
	        </dl>
	        <dl>
	            <dd>メールでのお問い合わせ</dd>
	            <dt><a class="top_contact_btn" href="<?php echo home_url(); ?>/contact/?post_id=<?php echo $post->ID ?>">お問い合わせフォーム</a></dt>
	        </dl>
	    </div>
	</section>
	
	<p><a class="clear rev_btn" href="<?php echo home_url( '/' ); ?>product/" >製品一覧へ戻る</a></p>

</main>
<?php endwhile; endif; ?>

<?php get_template_part('template-parts/bottom'); ?><!---------------ナビ----------------> 
<?php wp_footer(); ?>
</body>
</html>




