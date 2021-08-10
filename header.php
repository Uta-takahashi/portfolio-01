<!-- header.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="Engress">
<meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール">

<!-- インデックス防止 -->
<meta name="robots" content="noindex">
<title></title>

<!-- icon -->
<!-- <link rel="icon" type="image/x-icon" href="./img/icon.ico"> -->

<?php wp_head(); ?>
</head>
<body>

<!-- header -->
<header class="header js-header">
<div class="header-inner">
<div class="header-wrapper drawer">

<?php if (is_home() || is_front_page() ) : //トップページではロゴをh1に、それ以外のページではdivに。 ?>
<h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Engreeのロゴとサイト名"></a></h1>
<?php else : ?>
<div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Engreeのロゴとサイト名"></a></div>
<?php endif; ?>

<div class="header-toggle drawer-toggle js-toggle">
<span class="drawer-icon"></span>
<span class="drawer-icon"></span>
<span class="drawer-icon"></span>
</div>

<!-- gnav -->
<nav class="gnav header-nav js-nav">
<div class="gnav-logo _pc"><a href="./index.html"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Engreeのロゴとサイト名"></a></div>
<!-- ヘッダーメニュの表示 -->
<?php
wp_nav_menu(
array(
'depth' => 1,
'theme_location' => 'gnav',
'container' => 'false',
'menu_class' => 'gnav-list',
)
);
?>

<div class="gnav-contact _pc">
<div class="gnav-info">
<div class="gnav-time">平日08:00〜20:00</div>
<div class="gnav-tell"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z"/></svg><p>0123-456-7890</p></div>
</div>
<div class="gnav-btns">
<div class="gnav-btn _request"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">資料請求</a></div>
<div class="gnav-btn _contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></div>
</div>
</div>
</nav><!-- /gnav -->

<div class="header-contact _sp">
<div class="header-info">
<div class="header-time">平日08:00〜20:00</div>
<div class="header-tell"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.48 22.926l-1.193.658c-6.979 3.621-19.082-17.494-12.279-21.484l1.145-.637 3.714 6.467-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zm-9.808-22.926l-1.68.975 3.714 6.466 1.681-.975-3.715-6.466zm8.613 14.997l-1.68.975 3.714 6.467 1.681-.975-3.715-6.467z"/></svg><p>0123-456-7890</p></div>
</div>
<div class="header-btn _request"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">資料請求</a></div>
<div class="header-btn _contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></div>
</div>

</div>
<div class="header-overlay js-overlay"></div>
</div>
</header><!-- /header -->