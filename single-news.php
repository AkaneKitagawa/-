<?php

get_header(); ?>






<main class="secondpage inner">
<div class="secondpage row">
  <h2>NEWS<span>お知らせ</span></h2>
		<main class="news_page col-sm-9">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content_news', get_post_format() );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    <p><a class="clear rev_btn" href="<?php echo home_url( '/' ); ?>news/" >ニュース一覧へ戻る</a></p>
		</main><!-- #main -->
    <?php get_sidebar(); ?>
</div>

</main>

<?php get_template_part('template-parts/bottom'); ?><!---------------グローバルナビ----------------> 
<?php wp_footer(); ?>

<script>
    $(window).on(function(){
  $('.footer_top').addClass('fade_animation');
    });
</script>
</body>
</html>




