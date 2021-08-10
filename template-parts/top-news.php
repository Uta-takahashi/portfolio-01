<?php
$top_news = get_posts( array(
'post_type' => 'news', // 投稿タイプ
'posts_per_page' => '3', // 3件取得
'order' => 'desc', //昇順
'orderby' => 'date', // 新しい順に
) );
?>
<?php foreach ( $top_news as $post ) : setup_postdata( $post ); ?>

<a class="topNews-item" href="<?php echo esc_url(get_permalink()) ; ?>">
<div class="topNews-cdate"><?php echo esc_html(the_modified_date('Y-m-d')); ?></div>
<h3 class="topNews-heading">
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
</a>

<?php endforeach; wp_reset_postdata(); ?>