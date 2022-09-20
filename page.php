<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
            
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
         
			 

            <?php the_content(); ?>


            <?php endwhile; endif; ?>
            
            </main>
    

		
	
</div>

<?get_footer();
