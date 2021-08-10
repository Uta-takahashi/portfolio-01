<?php get_header(); ?>

<div class="page404">
<div class="page404-inner">
<p class="page404-title">404 Not Found</p>
<p class="page404-text">お探しのページが見つかりませんでした</p>
<p class="page404-text2">申し訳ありませんが、お探しのページが存在しないか、アクセスできませんでした。<br>入力されたURLが正しいかご確認ください。</p>
<div class="page404-btn"><a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a></div>
</div>
</div>

<?php get_footer(); ?>
