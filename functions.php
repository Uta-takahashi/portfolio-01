<?php

/**
 * themeのセットアップ
 */
function engrees_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'engrees_setup');


/**
 * css,javaScriptの読み込み 
 */
function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('scrollHint', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '1.0.0', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('scrollHint', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', '1.0.0', true);
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * メニューの登録
 */
function my_menu_init()
{
register_nav_menus(
array(
'gnav' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
'fnav' => 'フッターメニュー'
)
);
}
add_action('init', 'my_menu_init');


//postが所属するcategoryを取得
/**
 * カテゴリーを1つだけ表示
 *
 * @param boolean $anchor aタグで出力するかどうか.
 * @param integer $id 投稿id.
 * @return void
 */
function my_the_post_category( $id = 0 ) {
    global $post;
    //引数が渡されなければ投稿IDを見るように設定
    if ( 0 === $id ) {
    $id = $post->ID;
    }

    //カテゴリー一覧を取得
    $this_categories = get_the_category( $id );
    if ( $this_categories[0] ) {
        echo esc_html( $this_categories[0]->cat_name );
    } else {
        echo esc_html( '未設定' );
    }
}

/**
 * アーカイブページのpagenationを出力
 */
function archive_pagination() {
echo wp_kses_post(
paginate_links(
    array(
    'end_size'  => 0,
    'mid_size'  => 1,
    // 'prev_next' => true,
    'prev_text' => '<i class="fas fa-angle-left"></i>',
    'next_text' => '<i class="fas fa-angle-right"></i>',
    )
)
);    
}

/**
 * 抜粋の文字数制限
 */
function twpp_change_excerpt_length( $length ) {
    return 100; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

/**
 * 抜粋の省略記号変更
 */
function twpp_change_excerpt_more( $more ) {
    return '......';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

    if ( is_category() ) { // カテゴリーアーカイブの場合
    $title = single_cat_title( '', false );
    } elseif ( is_tag() ) { // タグアーカイブの場合
    $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) { // タームアーカイブの場合
    $title = single_term_title( '', false );
    } elseif ( is_author() ) { // 作者アーカイブの場合
    $title = get_the_author();
    } elseif ( is_date() ) { // 日付アーカイブの場合
    $title = '';
    if ( get_query_var( 'year' ) ) {
    $title .= get_query_var( 'year' ) . '年';
    }
    if ( get_query_var( 'monthnum' ) ) {
    $title .= get_query_var( 'monthnum' ) . '月';
    }
    if ( get_query_var( 'day' ) ) {
    $title .= get_query_var( 'day' ) . '日';
    }
    }
    return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );

/**
 * MW WP Form 自動改行無効
 */
function mvwpform_autop_filter() {
if ( class_exists( 'MW_WP_Form_Admin' ) ) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ( $forms as $form ) {
    add_filter( 'mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false' );
    }
} 
}
mvwpform_autop_filter();

?>