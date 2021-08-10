<?php get_header(); ?>

<!-- pageTop -->
<div class="pageTop _contact"  style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cta.png);">
<div class="pageTop-inner">
<h2 class="pageTop-title"><span>お問い合わせ・</span><span>資料請求</span></h2>
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
<main class="main _contact">

<!-- contact -->
<section class="contact">
<div class="contact-inner">

<!-- MW WP Form -->
<?php echo do_shortcode('[mwform_formkey key="22"]'); ?>
<!-- /MW WP Form -->

</div>
</section><!-- /contact -->

</main><!-- main -->


<?php get_footer(); ?>