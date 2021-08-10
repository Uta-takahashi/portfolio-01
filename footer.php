<!-- footer.php -->

<!-- page-contact or 404 の場合 cta, info を表示させない -->

<?php if ( !is_404() && !is_page( 'contact' ) ) : ?>

<!-- cta -->
<div class="cta">
<div class="cta-inner">
<div class="cta-heading">まずは無料で資料請求から</div>
<div class="cta-btn _request"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">資料請求</a></div>
<div class="cta-btn _contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></div>
</div>
</div><!-- /cta -->

<!-- info -->
<div class="info">
<div class="info-inner">
<div class="info-body">
<p class="info-text">お電話でのお問い合わせはこちら</p>
<p class="info-tell">0123-456-7890</p>
<p class="info-time">平日  08:00~20:00</p>
</div>
</div>
</div><!-- /info -->

<?php endif; ?>

<!-- footer -->
<footer class="footer">
<div class="footer-bg">
<div class="footer-inner">
<!-- fnav -->
<nav class="fnav footer-nav">

<!-- フッターメニュの表示 -->
<?php
wp_nav_menu(
array(
'depth' => 1,
'theme_location' => 'fnav',
'container' => 'false',
'menu_class' => 'fnav-list',
)
);
?>

</nav><!-- /fnav -->


<div class="footer-info">
<div class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Engreeのロゴとサイト名"></a></div>
<div class="footer-tell"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z"/></svg><p>0123-456-7890</p></div>
<div class="footer-time">平日08:00〜20:00</div>
</div>
</div>
</div>
<div class="footer-footer">
<p class="footer-copyright">© 2020 Engress.</p>
</div>
</footer><!-- /footer -->

<?php wp_footer(); ?>
</body>
</html>