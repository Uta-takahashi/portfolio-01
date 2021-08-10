<?php get_header(); ?>

<!-- pageTop -->
<div class="pageTop _plan-price" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/plan.png);">
<div class="pageTop-inner">
<h2 class="pageTop-title">コース・料金</h2>
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
<main class="main _plan-price">

<!-- price -->
<section class="price">
<div class="price-inner">
<h2 class="price-title">料金体系</h2>
<div class="price-content">
<div class="price-item">入会金 39,800円</div>
<div class="price-plus">
<span></span><span></span>
</div>
<div class="price-item">月額費用</div>
</div>
<p class="price-text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
</div>
</section><!-- /price -->

<!-- plans -->
<section class="plans">
<div class="plans-inner">
<h2 class="plans-title">料金表</h2>
<div class="plans-scroll js-scrollable">
<ul class="plans-list">

<!-- plan -->
<li class="plan plans-item">
<div class="plan-header">
<div class="plan-name">基礎プラン</div> 
</div>
<div class="plan-body">

<?php if ( get_field( 'price1' ) ) : ?>
<div class="plan-price"><?php the_field( 'price1' ); ?></div>
<?php endif; ?>

<p class="plan-note">*月額（税抜価格）</p>
<ul class="plan-details">
<li class="plan-detail">カリキュラム作成</li>
<li class="plan-detail">TOEFL学習サポート</li>
<li class="plan-detail">週一回のビデオMTG</li>
</ul>
</div>
</li><!-- /plan -->

<!-- plan -->
<li class="plan plans-item">
<div class="plan-header">
<div class="plan-name">演習プラン</div> 
</div>
<div class="plan-body">

<?php if ( get_field( 'price2' ) ) : ?>
<div class="plan-price"><?php the_field( 'price2' ); ?></div>
<?php endif; ?>

<p class="plan-note">*月額（税抜価格）</p>
<ul class="plan-details">
<li class="plan-detail">カリキュラム作成</li>
<li class="plan-detail">TOEFL学習サポート</li>
<li class="plan-detail">週一回のビデオMTG</li>
<li class="plan-detail">月二回の模試（解説付き）</li>
</ul>
</div>
</li><!-- /plan -->

<!-- plan -->
<li class="plan plans-item _recommend">
<div class="plan-header">
<div class="plan-name"><span>おすすめ</span><br>志望校対策プラン</div> 
</div>
<div class="plan-body">

<?php if ( get_field( 'price3' ) ) : ?>
<div class="plan-price"><?php the_field( 'price3' ); ?></div>
<?php endif; ?>

<p class="plan-note">*月額（税抜価格）</p>
<ul class="plan-details">
<li class="plan-detail">カリキュラム作成</li>
<li class="plan-detail">TOEFL学習サポート</li>
<li class="plan-detail">週一回のビデオMTG</li>
<li class="plan-detail">月二回の模試（解説付き）</li>
<li class="plan-detail">週一の英語面接対策</li>
</ul>
</div>
</li><!-- /plan -->

<!-- plan -->
<li class="plan plans-item">
<div class="plan-header">
<div class="plan-name">フレックスプラン</div> 
</div>
<div class="plan-body">

<?php if ( get_field( 'price1' ) ) : ?>
<div class="plan-price"><?php the_field( 'price1' ); ?></div>
<?php endif; ?>

<p class="plan-note">*月額（税抜価格）</p>
<div class="plan-details">
<div class="plan-detail _flexplan">＊別途ご相談ください</div>
</div>
</div>
</li><!-- /plan -->

</ul>
</div>
</div>
</section><!-- /plans -->

</main><!-- main -->

<?php get_footer(); ?>