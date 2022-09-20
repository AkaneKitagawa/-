<?php

get_header(); ?>
   
<main class="secondpage inner ContactArea">
 <div class="all">
    <h1>CONTACT<br><span>お問い合わせ</span></h1>
 </div>

 <p>下記事項の御記入をお願いいたします。<br>
送信後、追って担当者より御連絡いたします。</p>

            <?php echo do_shortcode('[mwform_formkey key="3446"]'); ?>

</main>


<?php get_template_part('template-parts/bottom'); ?><!---------------フッター---------------->
<?php wp_footer(); ?>
<script type='text/javascript' src='https://ajaxzip3.github.io/ajaxzip3.js'></script>
<script type="text/javascript">
jQuery(function( $ ) {
jQuery( 'input[name="mwform_zip2"]' ).keyup( function( e ) {
AjaxZip3.zip2addr('mwform_zip1','mwform_zip2','mwform_addr1','mwform_addr2');
} )
} );
</script>
</body>
</html>

