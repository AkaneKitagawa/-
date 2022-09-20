<?php
/**
 * TreasureOne functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TreasureOne
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'TreasureOne_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function TreasureOne_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TreasureOne, use a find and replace
		 * to change 'TreasureOne' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'TreasureOne', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'TreasureOne' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'TreasureOne_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'TreasureOne_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function TreasureOne_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'TreasureOne_content_width', 640 );
}
add_action( 'after_setup_theme', 'TreasureOne_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function TreasureOne_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'TreasureOne' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'TreasureOne' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'TreasureOne_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function TreasureOne_scripts() {
	wp_enqueue_style( 'TreasureOne-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'TreasureOne-style', 'rtl', 'replace' );
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'slimmenu.min.css',  get_template_directory_uri() . '/css/slimmenu.min.css' );
    wp_enqueue_style( 'dunbar-text',  get_template_directory_uri() . '/css/dunbar-text.css' );
    wp_deregister_script( 'jquery' );
$jquery_cdn = '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js';
wp_enqueue_script( 'jquery', $jquery_cdn, array(), '20130115' );
    wp_enqueue_script( 'modernizr.custom.js', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20150225', true );
    wp_enqueue_script( 'jquery.slimmenu.min.js', get_template_directory_uri() . '/js/jquery.slimmenu.min.js', array(), '20150225', true );
    wp_enqueue_script( 'animsition.min.js', get_template_directory_uri() . '/js/animsition.min.js', array(), '20150225', true );
    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20150225', true );
    wp_enqueue_script( 'jquery.fancybox.pack.js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '20150225', true );
    wp_enqueue_script( 'smooth-scroll.min.js', get_template_directory_uri() . '/js/smooth-scroll.min.js', array(), '20150225', true );
    wp_enqueue_script( 'trigger.js', get_template_directory_uri() . '/js/trigger.js', array(), '20150225', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//投稿だけ
    if (is_single()) {
        wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
        wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
        wp_enqueue_style('simplebar', get_template_directory_uri().'/css/simplebar.css');
        wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.0.8/css/all.css');
    }
    if (is_single()) {
        wp_enqueue_script('slick.min.js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true);
        wp_enqueue_script('wheel.js', get_template_directory_uri() . '/js/wheel.js', array( 'jquery' ), '', true);
        wp_enqueue_script('simplebar.min.js', get_template_directory_uri() . '/js/simplebar.min.js', array( 'jquery' ), '', true);
    }
}
add_action( 'wp_enqueue_scripts', 'TreasureOne_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ===========================
// = アイキャッチ画像設定 =
// ===========================

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'litemlist', 280, 280, true ); // 300 pixels wide (and unlimited height)
    add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
    add_image_size( 'archive-thumb', 600, 9999 );
    add_image_size( 'news', 350, 9999 ); 
    add_image_size( 'detial_gallery', 244, 162, true ); 
}

/*-------------------------------------------*/
/*	アイキャッチ画像のURLだけを指定し出力
/*-------------------------------------------*/
function thumbnails_url(){
// 画像idを取得する
$thumbnail_id = get_post_thumbnail_id( $thumbnail_id ); 
/*
* 返ってくる引き数は配列
* [0]アイキャッチ画像のURL
* [1]幅
* [2]高さ
*/
$thumbnail = wp_get_attachment_image_src( $thumbnail_id, "none" );
//URLを出力
echo $thumbnail[0];
}



// お問い合わせメール用
function my_form_tag_filter($tag){
	if ( ! is_array( $tag ) )
		return $tag;

	if ( isset( $_GET['mailsubjectID'] ) ) {
		$name = $tag['name'];
		if ( $name == 'your-subject' ) { // 1 に入れたい場合
			$mailsubjectID = $_GET['mailsubjectID'];
			$mailsubject = get_post( $mailsubjectID, ARRAY_A );
			$tag['values'] = (array)$mailsubject['post_title'];
		}
	}
	return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);




    //スマートフォンの判別
    function wp_is_phone() {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if (   strpos($ua, 'iPhone')                            // iPhone
            || strpos($ua, 'iPod')                              // iPod touch
            ||(strpos($ua, 'Android') && strpos($ua, 'Mobile')) // Android搭載スマホ
            ||(strpos($ua, 'Windows') && strpos($ua, 'Mobile')) // Windows Phone
            ||(strpos($ua, 'firefox') && strpos($ua, 'Mobile')) // firefox製ブラウザ
            || strpos($ua, 'Opera Mini')                        // Androidで人気のブラウザ
            || strpos($ua, 'Opera Mobi')                        // Androidで人気のブラウザ
            || strpos($ua, 'webmate')                           // その他の Other iPhone browser
            || strpos($uat,'incognito')                         // その他の iPhone browser
        ) {
            return true;
        } else {
            return false;
        }
    }
    //タブレットの判別
    function wp_is_tablet() {
        $uat = $_SERVER['HTTP_USER_AGENT'];
        if ( strpos($uat, 'iPad') // iPad
            ||(strpos($uat, 'Android') && strpos($uat, 'Mobile')=== false ) // Android搭載タブレット
            || strpos($uat, 'windows touch') //windows touch
            || strpos($uat, 'Kindle') // Kindle
            || strpos($uat, 'Silk') // Kindle に付属の Amazon 製ブラウザ
            || strpos($uat, 'firefox tablet') //firefox tablet
            || strpos($uat, 'WebOS') // Palm
        ) {
            return true;
        } else {
            return false;
        }
    }


/* カスタムフィールドで外部CSSを複数読み込み */
function include_custom_css(){
	if(is_single()||is_page()){
	if($css = get_post_meta(get_the_ID(), 'includeCSS', true)){
	echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"{$css}\" />\n";
						}
					}
				}
add_action('wp_head','include_custom_css');







/* 投稿一覧にサムネイル追加 */
function add_posts_columns_thumbnail($columns) {
	$columns['thumbnail'] = 'アイキャッチ画像';
	return $columns;
}
function add_posts_columns_thumbnail_row($column_name, $post_id) {
	if ( 'thumbnail' == $column_name ) {
		$thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
		echo ( $thumb ) ? $thumb : '－';
	}
}
add_filter( 'manage_posts_columns', 'add_posts_columns_thumbnail' );
add_action( 'manage_posts_custom_column', 'add_posts_columns_thumbnail_row', 10, 2 );







// ===========================
// = カスタム投稿 =
// ===========================
function new_post_type(){
 //ニュース
 register_post_type(
 'news',
 array(
 'label' => 'ニュース',
 'public' => true,
 'hierarchical' => false,
 'has_archive' => true,
 'supports' => array(
 'title',
 'editor',
 'thumbnail',
 'excerpt'
 ),
 'menu_position' => 4
 )
 );

 //タクソノミーを作成
 register_taxonomy(
 'news_cat',
 'news',
 array(
 'label' => 'ニュースカテゴリー',
 'labels' => array(
 'popular_items' => 'よく使うカテゴリー',
 'edit_item' => 'カテゴリーを編集',
 'add_new_item' => '新規カテゴリーを追加',
 'search_items' => 'カテゴリーを検索',
 ),
 'public' => true,
 'hierarchical' => true,
 'rewrite' => array('slug' => 'news_cat')
 )
 );


 }
  add_action('init', 'new_post_type');




// ===========================
// = アーカイブ日付 =
// ===========================

function my_custom_post_type_archive_where( $where, $args ){  
    $post_type  = isset( $args['post_type'] ) ? $args['post_type'] : 'post';
    $where = "WHERE post_type = '$post_type' AND post_status = 'publish'";
    return $where;
}
add_filter( 'getarchives_where', 'my_custom_post_type_archive_where', 10, 2 );



// ===========================
// = 投稿ラベル名変更 =
// ===========================
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = '製品情報';
	$submenu['edit.php'][5][0] = '製品情報一覧';
	$submenu['edit.php'][10][0] = '新しい製品情報';
	$submenu['edit.php'][16][0] = 'タグ';
	//echo ";
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = '製品情報';
	$labels->singular_name = '製品情報';
	$labels->add_new = _x('追加', '製品情報');
	$labels->add_new_item = '製品情報の新規追加';
	$labels->edit_item = '製品情報の編集';
	$labels->new_item = '新規製品情報';
	$labels->view_item = '製品情報を表示';
	$labels->search_items = '製品情報を検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );





//bodyにスラッグのクラスを追加
function pagename_class($classes = '') {
         if (is_page()) {
             $page = get_page(get_the_ID());
             $classes[] = $page->post_name;
         }
	return $classes;
}

add_filter('body_class','pagename_class');




//カスタム投稿本文消す
add_action( 'init' , 'my_remove_post_support' );
function my_remove_post_support() {
remove_post_type_support('shops','editor'); 
remove_post_type_support('watches','editor'); 
}




// ===========================
// = ペジネーション =
// ===========================

function bmPageNavi() {
  global $wp_rewrite;
  global $wp_query;
  global $paged;
 
  $paginate_base = get_pagenum_link(1);
  if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg('page', '%#%');
  } else {
    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
    untrailingslashit('?page=%#%', 'paged');;
    $paginate_base .= '%_%';  
  }
 
  $result = paginate_links( array(
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5,
    'current' => ($paged ? $paged : 1),
      'prev_text' => '«',
'next_text' => '»',
  ));
 
  return $result;
}


// ===========================
// = カスタムフィールド表示＆編集 =
// ===========================

function my_posts_columns( $defaults ) {
    $defaults['belt'] = 'ベルト';
 
    return $defaults;
}
add_filter( 'manage_posts_columns', 'my_posts_columns' );




function my_posts_custom_column( $column, $post_id ) {
    switch ( $column ) {
        case 'belt':
            $post_meta = get_post_meta( $post_id, 'belt', true );
            if ( $post_meta ) {
                echo $post_meta;
            } else {
                echo ''; //値が無い場合の表示
            }
            break;
        
    }
}
add_action( 'manage_posts_custom_column' , 'my_posts_custom_column', 10, 2 );




/*
ログインアイコン
 */

add_action("login_head", "my_login_head");
function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('/wp-content/themes/TreasureOne/images/logo.svg') no-repeat scroll center top transparent;
        height: 125px;
		width: 327px;
	}
	</style>
	";
}

function dequeue_plugins_style() {
    //プラグインIDを指定し解除する
    wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);

/*
管理画面メニュー
 */

function remove_menus () {
    //remove_menu_page( 'edit.php' );                  // 投稿
    remove_menu_page( 'index.php' );                  // ダッシュボード
    remove_menu_page( 'edit-comments.php' );          // コメント
    //remove_menu_page( 'tools.php' );                  // ツール
    remove_menu_page( 'profile.php' );                  // プロフィール
    //remove_menu_page( 'wpcf7' );                  // お問い合わせ
}
add_action('admin_menu', 'remove_menus');



/*
管理画面CSS
 */

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  
  #wp-admin-bar-edit-profile,
  #wp-admin-bar-user-info,
  #wp-admin-bar-comments,
  #wp-admin-bar-wpseo-menu,
  .post-type-post #postdivrich,
  .post-type-brandlist #postdivrich,
  .post-type-police_archive #postdivrich{
  display:none;
}

  </style>';
}

// メニューの並び替え
function my_custom_menu_order($menu_order) {
    if (!$menu_order) return true;
    return array(
        'edit.php', //投稿
        'edit.php?post_type=news', //カスタムポスト
        'separator1', //セパレータ１
        'upload.php', //メディア
        'edit.php?post_type=page', //固定ページ
        'separator2', //セパレータ２
        'themes.php', //外観
        'plugins.php', //プラグイン
        'users.php', //ユーザー
        'tools.php', //ツール
        'options-general.php', //設定

    );
}
add_filter('custom_menu_order', 'my_custom_menu_order'); 
add_filter('menu_order', 'my_custom_menu_order');


// ニュース件数
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('news') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '13' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



