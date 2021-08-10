<?php get_header(); ?>

<!-- pageTop -->
<div class="pageTop _news" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/news.png);">
<div class="pageTop-inner">
<h2 class="pageTop-title">お知らせ</h2>
</div>
</div><!-- /pageTop -->

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

<!-- main -->
<main class="main _news">

<!-- news -->
<section class="news">
<div class="news-inner">
<h2 class="news-title">お知らせ一覧</h2>

<?php if ( have_posts() ) : ?>

<div class="news-list">

<?php while ( have_posts() ) : the_post(); ?>

<!-- newsItem -->
<a href="<?php the_permalink(); ?>" class="newsItem">
<div class="newsItem-cdate"><?php echo esc_html(the_modified_date('Y-m-d')); ?></div>
<div class="newsItem-title">
<?php
if( mb_strlen($post->post_title, 'UTF-8') > 39 ) {
	$title= mb_substr($post->post_title, 0, 39, 'UTF-8');
	echo $title . '…';
} else{
	echo $post->post_title;
}
?>
</div>
</a><!-- /newsItem -->

<?php endwhile; ?>

</div>

<?php if ( paginate_links() ) : ?>
<!-- pagination -->
<div class="pagination">
<?php archive_pagination(); ?>
</div><!-- /pagination -->
<?php endif; ?>

<?php endif; ?>

</div>
</section><!-- /news -->


</main><!-- main -->

<?php get_footer(); ?>