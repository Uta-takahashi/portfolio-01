<?php
$top_blogs = get_posts( array(
'post_type' => 'post', // 投稿タイプ
'posts_per_page' => '3', // 3件取得
'order' => 'desc', //昇順
'orderby' => 'date', // 新しい順に
) );
?>
<?php foreach ( $top_blogs as $post ) : setup_postdata( $post ); ?>

<!-- topBlog -->
<a class="topBlog" href="<?php echo esc_url(get_permalink()) ; ?>">

<div class="topBlog-img" style="background-image: url(
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

<div class="topBlog-category _category"><?php my_the_post_category(); ?></div>
</div>
<div class="topBlog-body">

<h3 class="topBlog-heading">
<?php
//タイトルの文字数制限
if( mb_strlen($post->post_title, 'UTF-8') > 35 ) {
	$title= mb_substr($post->post_title, 0, 35, 'UTF-8');
	echo $title . '…';
} else{
	echo $post->post_title;
}
?>
</h3>

<div class="topBlog-cdate"><?php echo esc_html(the_modified_date('Y-m-d')); ?></div>
</div>
</a><!-- /topBlog -->

<?php endforeach; wp_reset_postdata(); ?>