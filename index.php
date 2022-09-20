<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<body <?php body_class(); ?>>


<?php get_template_part('template-parts/nav'); ?><!---------------グローバルナビ----------------> 



<div
  class="animsition"
  data-animsition-in-class="fade-in"
  data-animsition-in-duration="2500"
  data-animsition-out-class="fade-out"
  data-animsition-out-duration="800"
>
    
<?php if(is_mobile()) { ?>
<?php putRevSlider("sp-top-image", "home") ?>
<?php } else { ?>
    <?php echo do_shortcode('[rev_slider alias="top_image"][/rev_slider]'); ?>
<?php } ?>



 


     </div><!--オーバーレイここまで-->









<?php get_template_part('template-parts/bottom'); ?><!---------------フッター----------------> 









<?php wp_footer(); ?>



</body>
</html>
