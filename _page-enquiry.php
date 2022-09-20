<?php
get_header(); ?>
<?php wp_head();?>



<main class="secondpage inner">
    <h2>CONTACT<span>お問い合わせ</span></h2>
    <section class="contactArea">
      <h3>メールでのお問い合わせ</h3>
      <p>こちらでは、各種お問い合わせ方法や窓口をご案内しております。<br>
      ご意見・ご質問は下記メールフォームをご利用願います。
      </p>
      <?php echo do_shortcode('[contact-form-7 id="305" title="コンタクトフォーム 1"]'); ?>

    </section>


</main>


<?php get_template_part('template-parts/bottom'); ?><!---------------フッター---------------->


<?php wp_footer(); ?>
