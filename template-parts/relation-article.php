<a href="<?php echo esc_url(get_permalink()) ; ?>" class="relationArticle-item">
<div class="relationArticle-img" style="background-image: url(

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
<div class="relationArticle-body">
<div class="relationArticle-title">
<?php
//タイトルの文字数制限
if( mb_strlen($post->post_title, 'UTF-8') > 30 ) {
	$title= mb_substr($post->post_title, 0, 30, 'UTF-8');
	echo $title . '…';
} else{
	echo $post->post_title;
}
?>
</div>
</div>
</a>