<?php
get_header(); ?>


<main class="secondpage inner">
    <h2>NEWS<span>お知らせ</span></h2>
    <section class="NewsList">
<?php if ( !is_paged() ) : // 1ページ目 ?>
    <?php if(have_posts()): while(have_posts()): the_post(); $counter++; ?>
        <?php if ($counter <= 1): ?>

            <div class="topic_one">
                <span class="pick">PICKUP TOPIC</span>
                  <ul>
                      <li>
                          <span class="date"><?php the_time("Y年m月j日") ?></span>
                          <span class="catname"><?php the_terms($post->ID,'news_cat'); ?></span>
                          <?php
                            $days = 14; //Newを表示させたい期間の日数
                            $today = date_i18n('U');
                            $entry = get_the_time('U');
                            $kiji = date('U',($today - $entry)) / 86400 ;
                            if( $days > $kiji ){
                            echo '<span class="news_side_new">NEW</span>';
                            }
                            ?>
                      </li>
                      <li class="news_list_title"><?php echo mb_strimwidth(get_the_title(), 0, 70, " …", "UTF-8"); ?></li>
                      <li class="exp"><?php the_excerpt(); ?></li>
                      <li><a class="rev_btn" href="<?php the_permalink() ?>">MORE</a></li>
                  </ul>
                  <p class="newsImg"><a href="<?php the_permalink() ?>" ><?php the_post_thumbnail(array(350,350)); ?></a></p>
            </div>

            <h3>ARCHIVE</h3>
        <?php else:?>
            <div class="col-xs-6 col-sm-4">
                <div class="topic_other">
                  <ul>
                      <li>
                          <span class="date"><?php the_time("Y年m月j日") ?></span>
                          <span class="catname"><?php the_terms($post->ID,'news_cat'); ?></span>
                      </li>
                      <li class="news_list_title"><?php echo mb_strimwidth(get_the_title(), 0, 70, " …", "UTF-8"); ?></li>
                      <li class="exp"><?php the_excerpt(); ?></li>
                      <li><a class="rev_btn" href="<?php the_permalink() ?>">MORE</a></li>
                  </ul>
                  <p class="newsImg"><a href="<?php the_permalink() ?>" ><?php the_post_thumbnail('news'); ?></a></p>
                </div>
            </div>
        <?php endif;?>
    <?php endwhile; endif; ?>

<?php else : // 2ページ目以降 ?>
            <div class="col-xs-6 col-sm-4">
                <div class="topic_other">
                  <ul>
                      <li>
                          <span class="date"><?php the_time("Y年m月j日") ?></span>
                          <span class="catname"><?php the_terms($post->ID,'news_cat'); ?></span>
                      </li>
                      <li class="news_list_title"><?php echo mb_strimwidth(get_the_title(), 0, 70, " …", "UTF-8"); ?></li>
                      <li class="exp"><?php the_excerpt(); ?></li>
                      <li><a class="rev_btn" href="<?php the_permalink() ?>">MORE</a></li>
                  </ul>
                  <p class="newsImg"><a href="<?php the_permalink() ?>" ><?php the_post_thumbnail('news'); ?></a></p>
                </div>
            </div>
<?php endif; ?>


    </section>

    <div class="pagenation">
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
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