<?php

get_header(); ?>
   
<main class="secondpage inner">
 <div class="all">
    <h1>CONTACT<br><span>お問い合わせ</span></h1>
 </div>
            <h4 style="font-size:25px; margin:20px 0;">お問い合わせが完了しました</h4>
            <p style="margin:0 0 100px;">
            この度はお問い合わせいただきありがとうございました。<br>
            お問い合わせを受け付けました。<br>
            <br>
            折り返し、担当者よりご連絡いたしますので、<br>
            恐れ入りますが、しばらくお待ちください。<br>
            <br>
            なお、ご入力いただいたメールアドレス宛に受付完了メールを配信しております。<br>
            完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
            大変お手数ですが、再度お問い合わせの手続きをお願い致します。<br>
            </p>

            <?php echo do_shortcode('[mwform_formkey key="3446"]'); ?>

</main>


<?php get_template_part('template-parts/bottom'); ?><!---------------フッター---------------->
<?php wp_footer(); ?>
</body>
</html>

