<?php get_header(); ?>

<!-- pageTop -->
<div class="pageTop _blog" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/blog.png);">
<div class="pageTop-inner">
<h2 class="pageTop-title">ブログ</h2>
</div>
</div><!-- /pageTop -->

<!-- breadcrumb -->
<div class="breadcrumb">
<div class="breadcrumb-inner">

<?php
if ( function_exists( 'bcn_display' ) ) {
bcn_display();
}
?>

</div>
</div><!-- /breadcrumb -->

<!-- main -->
<main class="main _blog">

<!-- blogs -->
<section class="blogs">
<div class="blogs-inner">
<h2 class="blogs-title">新着一覧</h2>

<?php 
$paged = (int) get_query_var('paged');
$args = array(
    'paged' => $paged,          //ページネーション用
    'post_type' => 'post',      // 投稿タイプ
    'posts_per_page' => '10',    // 3件取得
    'order' => 'desc',          //昇順
    'orderby' => 'date',        // 新しい順に
);
$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) :
?>

<div class="blogs-list">

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<!-- blog -->
<a class="blog blogs-item" href="<?php echo esc_url(get_permalink()) ; ?>">
<div class="blog-img" style="background-image: url(

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
<div class="blog-category _category"><?php my_the_post_category(); ?></div>
</div>
<div class="blog-body">
<div class="blog-cdate"><?php echo esc_html(the_modified_date('Y-m-d')); ?></div>
<h3 class="blog-title">
<?php
//タイトルの文字数制限
if( mb_strlen($post->post_title, 'UTF-8') > 40 ) {
	$title= mb_substr($post->post_title, 0, 40, 'UTF-8');
	echo $title . '…';
} else{
	echo $post->post_title;
}
?>
</h3>
<p class="blog-text"><?php the_excerpt(); ?></p>
</div>
</a><!-- /blog -->

<?php endwhile; ?>

</div>

<?php endif; ?>

<!-- pagination -->
<div class="pagination">
<?php
if ($the_query->max_num_pages > 0) {
    echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
        'total' => $the_query->max_num_pages,
        'end_size'  => 0,
        'mid_size'  => 2,
        'prev_next' => true,
        'prev_text' => '<i class="fas fa-angle-left"></i>',
        'next_text' => '<i class="fas fa-angle-right"></i>',
    ));
};
wp_reset_postdata();
?>
</div><!-- /pagination -->

</div>
</section><!-- /blogs -->


</main><!-- main -->

<?php get_footer(); ?>