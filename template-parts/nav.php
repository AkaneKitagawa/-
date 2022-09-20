<header>
    <nav class="inner">
        <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="トレジャーワン Treasureone" width="200"/></a></h1> 
        <div class="global_nav">
                  <ul class="nav_pc">
                    <!--<li><a href="<?php echo home_url(); ?>/news/">ニュース</a></li>-->
                    <li><a href="<?php echo home_url(); ?>/product/"><span>PRODUCT</span>製品情報</a></li>
					<li><a href="<?php echo home_url(); ?>/store/"><span>STORE</span>店舗情報</a></li>
                    <li><a href="<?php echo home_url(); ?>/recruit/"><span>RECRUIT</span>採用情報</a></li>
                    <li><a href="<?php echo home_url(); ?>/company/"><span>COMPANY</span>会社概要</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact/"><span>CONTACT</span>お問い合わせ</a></li>
                  </ul>
        </div>

        <!--<div class="social_icon">
            <ul>
                <li><a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/insta_logo.png" alt="インスタグラム"/></a></li>
            </ul>
        </div>-->
    </nav>
</header>


<div class="sp_nav_wrapper" >
    <ul id="sp_navigation" class="slimmenu">
        <li><a href="<?php echo home_url(); ?>/">トップ</a></li>
        <!--<li><a href="<?php echo home_url(); ?>/news/">ニュース</a></li>-->
        <li><a href="<?php echo home_url(); ?>/product/">製品情報</a></li>
        <li><a href="<?php echo home_url(); ?>/store/">店舗情報</a></li>
        <li><a href="<?php echo home_url(); ?>/recruit/">採用情報</a></li>
        <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
        <li><a href="<?php echo home_url(); ?>">沿革</a></li>
        <li><a href="<?php echo home_url(); ?>">ECサイト</a></li>
        <li><a href="<?php echo home_url(); ?>">スポンサー活動</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
    </ul>
    <!--<div class="social_icon">
        <ul>
            <li><a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/insta_logo.png" alt="インスタグラム"/></a></li>
        </ul>
    </div>-->
</div>






<div class="breadarea inner">
<?php if ( function_exists('yoast_breadcrumb') )  {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
</div>

 <!---------------パンくず---------------->