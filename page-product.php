<?php
/*
 Template Name: product
*/

get_header(); ?>


<main class="secondpage inner ProductAll">
	<h1>PRODUCT<br><span>製品一覧</span></h1>

	<?php
	$categories = get_categories();
	foreach($categories as $category) :
	?>
	<h2 class="<?php echo $category->slug; ?>"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></h2>

	<div class="inside">
	<?php
	query_posts('cat='.$category->cat_ID);
	if (have_posts()) : while (have_posts()) : the_post();
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
	<?php endwhile; endif; ?>
	</div>
	<?php endforeach; ?>

</main>


<?php get_template_part('template-parts/bottom'); ?><!---------------フッター---------------->
<?php wp_footer(); ?>
</body>
</html>


