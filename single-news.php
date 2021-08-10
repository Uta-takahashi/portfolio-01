<?php get_header(); ?>

<!-- single -->
<div class="single _news">

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
<h1 class="entry-title">お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト</h1>
<div class="entry-info"><div class="entry-cdate">2020-01-01</div></div>
</div>

<div class="entry-body">

<?php
//本文の表示
the_content();
?>

</div>

</article><!-- /entry -->

</main><!-- main -->

</div>
</div><!-- /single -->

<?php get_footer(); ?>