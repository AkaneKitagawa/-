<?php

get_header(); ?>





<main class="secondpage inner">
    <h2>NEWS<span>お知らせ</span></h2>
    <h4 class="categoryname"><?php single_cat_title(); ?></h4>
    <section class="NewsList">
                <?php
                    $type = get_query_var( 'news_cat' ); //指定したいタクソノミーを指定
                    $args = array(
                        'post_type' => array('news'), /* 投稿タイプを指定 */
                        'tax_query' => array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'news_cat', /* 指定したい投稿タイプが持つタクソノミーを指定 */
                                'field' => 'slug',
                                'orderby' => 'ID',
                                'order' => 'DESC',
                                'terms' => $type, /* 上記で指定した変数を指定 */
                            ),
                        ),
                        'paged' => $paged,
                ); ?>
                <?php if ( $wp_query->have_posts() ) : ?>
                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
                    <?php endwhile; ?>
                <?php endif; ?>
    </section>
    <p><a class="clear rev_btn" href="<?php echo home_url( '/' ); ?>news/" >ニュース一覧へ戻る</a></p>
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