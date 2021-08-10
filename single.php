<?php get_header(); ?>

<!-- single -->
<div class="single">

<!-- breadclumb -->
<div class="breadcrumb">
<div class="breadcrumb-inner">

<?php
if ( function_exists( 'bcn_display' ) ) {
bcn_display();
}
?>

</div>
</div><!-- /breadclumb -->

<div class="single-inner">
    
<!-- main -->
<main class="main single-main _single">

<!-- entry -->
<article class="entry">
<div class="entry-inner">
<div class="entry-header">
<div class="entry-category"><?php my_the_post_category(); ?></div>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-info">

<!-- snsLink -->
<div class="snsLink">
<?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
</div><!-- /snsLink -->

<div class="entry-cdate"><?php echo esc_html(the_modified_date('Y-m-d')); ?></div>
</div>
<div class="entry-img" style="background-image: url(

<?php
//背景画像の設定
if (has_post_thumbnail($id)) {
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    echo esc_url($image_url[0]);
} else {
    echo esc_url(get_template_directory_uri()) . '/img/noimg.png';
}
?>

);"></div>
</div>

<div class="entry-body">

<?php
//本文の表示
the_content();
?>

</div>

</article><!-- /entry -->

<!-- pickupArticle -->
<div class="pickupArticle">
<div class="pickupArticle-heading">おすすめの記事</div>

<?php
$pickup_article = get_posts( array(
    'post_type' => 'post', // 投稿タイプ
    'posts_per_page' => '3', // 3件取得
    'tag' => 'pickup', // pickupタグがついたものを
    'orderby' => 'rand', // 新しい順に
));
?>

<div class="pickupArticle-list">

<?php foreach ( $pickup_article as $post ) : setup_postdata( $post ); ?>

<a href="#" class="pickupArticle-item">
<div class="pickupArticle-img" style="background-image: url(

<?php
//背景画像の設定
if (has_post_thumbnail($id)) {
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    echo esc_url($image_url[0]);
} else {
    echo esc_url(get_template_directory_uri()) . '/img/noimg.png';
}
?>

);">
<div class="pickupArticle-category _category"><?php my_the_post_category(); ?></div>
</div>
<div class="pickupArticle-body">
<div class="pickupArticle-cdate"><?php echo esc_html(the_modified_date('Y-m-d')); ?></div>
<div class="pickupArticle-title">
<?php
//タイトルの文字数制限
if( mb_strlen($post->post_title, 'UTF-8') > 35 ) {
	$title= mb_substr($post->post_title, 0, 35, 'UTF-8');
	echo $title . '…';
} else{
	echo $post->post_title;
}
?>
</div>
</div>
</a>

<?php endforeach; wp_reset_postdata(); ?>

</div>
</div><!-- /pickupArticle -->

</main><!-- main -->

<!-- sidebar -->
<aside class="single-sidebar sidebar">

<!-- relationArticle -->
<div class="relationArticle">
<div class="relationArticle-heading">関連記事</div>

<?php
if (has_category()) {
//現在表示している記事のカテゴリを取得
$categories = get_the_category();
//取得したカテゴリのIDを格納する配列を定義
$category_Id = array();
//$category_IdにIDを格納
foreach ($categories as $category) {
    array_push($category_Id, $category -> cat_ID);
}
}

$relation_article = get_posts( array(
    'post_type' => 'post',
    'post__not_in' => array($post->ID),
    'posts_per_page' => '3',
    'category__in' => $category_Id,
    'orderby' => 'rand',
) );
?>

<div class="relationArticle-list">

<?php foreach ( $pickup_article as $post ) : setup_postdata( $post ); ?>

<?php get_template_part('template-parts/relation-article'); ?>

<?php endforeach; wp_reset_postdata(); ?>

</div>
</div><!-- /relationArticle -->

<!-- category -->
<div class="category">
<div class="category-heading">カテゴリー</div>
<div class="category-list">

<?php
$categories = get_categories(array(
    'parent' => 0,
    'orderby' => 'term_order',
    'order' => 'ASC'
));

foreach ( $categories as $category ) :
?>

<li class="category-name">
<a href="<?php echo get_category_link( $category->term_id ) ;?>">
・<?php echo $category->name ;?>（<?php echo $category->count;?>）
</a>

<ul class="children">

<?php
$child_count = count(get_term_children($category->cat_ID, 'category'));

if ( $child_count > 0 ) :
$child_categories = get_categories(array( 'parent' => $category->cat_ID ));

foreach ( $child_categories as $child_category ) :
?>

<li class="category-name">
<a href="<?php echo get_category_link($child_category->cat_ID);?>">
・<?php echo $child_category->name ;?>（<?php echo $child_category->count;?>）
</a>
</li>

<?php endforeach; ?>
<?php endif; ?>
</ul>
</li>

<?php endforeach; ?>

</div>
</div><!-- /category -->

</aside><!-- sidebar -->
</div>
</div><!-- /single -->

<?php get_footer(); ?>