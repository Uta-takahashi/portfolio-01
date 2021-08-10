<?php get_header(); ?>

<!-- main -->
<main class="main">

<!-- mainvisual -->    
<div class="mainvisual">
<div class="mainvisual-inner">
<h2 class="mainvisual-heading">TOEFL対策はEngress</h2>
<p class="mainvisual-text">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
<div class="mainvisual-btn _request"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">資料請求</a></div>
<div class="mainvisual-btn _contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></div>
</div>
</div><!-- /mainvisual -->

<!-- about -->
<section class="about">
<div class="about-inner">
<h2 class="about-heading">TOEFL学習でこんな悩みありませんか？</h2>
<div class="about-texts">
<p class="about-text">勉強の習慣が<br class="_sp">身についていない</p>
<p class="about-text">勉強しているはず<br class="_sp">なのに点数が伸びない</p>
<p class="about-text">正しい勉強方法が<br class="_sp">わからない</p>
</div>

<!-- description -->
<div class="description about-content">
<div class="description-inner">
<div class="description-content">
<h2 class="description-heading">Engressは<br><span>TOEFLに特化したスクール</span>です</h2>
<p class="description-text">完全オーダーメイドで、<br class="_pc">１人１人の悩みに合わせた最適な指導で<br class="_sp">TOEFLの苦手分野を克服します。</p>
</div>
</div>
</div><!-- /description -->

</div>
</section><!-- /about -->

<!-- features -->
<section class="features">
<div class="features-inner">
<h2 class="features-title">TOEFL対策に特化したEngress3つの強み</h2>
<ul class="features-list">

<!-- feature -->
<li class="feature features-item">
<div class="feature-content">
<div class="feature-label">特長 １</div>
<h3 class="feature-heading">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
<p class="feature-text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
</div>
<div class="feature-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/feature01.jpg);"></div>
</li><!-- /feature -->

<!-- feature -->
<li class="feature features-item">
<div class="feature-content">
<div class="feature-label">特長 ２</div>
<h3 class="feature-heading">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
<p class="feature-text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
</div>
<div class="feature-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/feature02.jpg);"></div>
</li><!-- /feature -->

<!-- feature -->
<li class="feature features-item">
<div class="feature-content">
<div class="feature-label">特長 ３</div>
<h3 class="feature-heading">平均3ヶ月でTOEFL iBT20点アップ</h3>
<p class="feature-text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
</div>
<div class="feature-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/feature03.jpg);"></div>
</li><!-- /feature -->

</ul>
</div>
</section><!-- /features -->

<!-- aboutPlan -->
<div class="aboutPlan">
<div class="aboutPlan-inner">
<div class="aboutPlan-background">
<div class="aboutPlan-heading">Engressの料金プランはこちら</div>
<div class="aboutPlan-btn"><a href="<?php echo esc_url( home_url( '/plan/' ) ); ?>">料金を見てみる</a></div>
</div>
</div>
</div><!-- /aboutPlan -->

<!-- models -->
<section class="models">
<div class="models-inner">
<h2 class="models-title">TOEFL成功事例</h2>
<ul class="models-list">

<!-- 以下カスタムフィールド使用予定 -->
<!-- model -->
<li class="model models-item">

<?php if ( get_field( 'comment1' ) ) : ?>
<p class="model-comment"><?php the_field( 'comment1' ); ?></p>
<?php endif; ?>

<?php if ( get_field( 'icon1' ) ) : ?>
<div class="model-img" style="background-image: url(<?php the_field('icon1'); ?>);"></div>
<?php endif; ?>

<div class="model-info">

<?php if ( get_field( 'status1' ) ) : ?>
<div class="model-status"><?php the_field( 'status1' ); ?></div>
<?php endif; ?>

<?php if ( get_field( 'name1' ) ) : ?>
<div class="model-name"><?php the_field( 'name1' ); ?></div>
<?php endif; ?>

<?php if ( get_field( 'result1' ) ) : ?>
<div class="model-result"><?php the_field( 'result1' ); ?></div>
<?php endif; ?>
</div>
</li><!-- /model -->

<!-- model -->
<li class="model models-item">

<?php if ( get_field( 'comment2' ) ) : ?>
<p class="model-comment"><?php the_field( 'comment2' ); ?></p>
<?php endif; ?>

<?php if ( get_field( 'icon2' ) ) : ?>
<div class="model-img" style="background-image: url(<?php the_field('icon2'); ?>);"></div>
<?php endif; ?>

<div class="model-info">

<?php if ( get_field( 'status2' ) ) : ?>
<div class="model-status"><?php the_field( 'status2' ); ?></div>
<?php endif; ?>

<?php if ( get_field( 'name2' ) ) : ?>
<div class="model-name"><?php the_field( 'name2' ); ?></div>
<?php endif; ?>

<?php if ( get_field( 'result2' ) ) : ?>
<div class="model-result"><?php the_field( 'result2' ); ?></div>
<?php endif; ?>
</div>
</li><!-- /model -->

<!-- model -->
<li class="model models-item">

<?php if ( get_field( 'comment3' ) ) : ?>
<p class="model-comment"><?php the_field( 'comment3' ); ?></p>
<?php endif; ?>

<?php if ( get_field( 'icon3' ) ) : ?>
<div class="model-img" style="background-image: url(<?php the_field('icon3'); ?>);"></div>
<?php endif; ?>

<div class="model-info">

<?php if ( get_field( 'status3' ) ) : ?>
<div class="model-status"><?php the_field( 'status3' ); ?></div>
<?php endif; ?>

<?php if ( get_field( 'name3' ) ) : ?>
<div class="model-name"><?php the_field( 'name3' ); ?></div>
<?php endif; ?>

<?php if ( get_field( 'result3' ) ) : ?>
<div class="model-result"><?php the_field( 'result3' ); ?></div>
<?php endif; ?>
</div>
</li><!-- /model -->

</ul>
</div>
</section><!-- /models -->

<!-- flows -->
<section class="flows">
<div class="flows-inner">
<h2 class="flows-title">ご利用の流れ</h2>
<ul class="flows-list">

<!-- flow -->
<li class="flow flows-item">
<span class="flow-number">01</span>
<h3 class="flow-title">お問い合わせ</h3>
<p class="flow-desc">まずはフォームまたはお電話からお申し込みください。</p>
</li><!-- /flow -->

<!-- flow -->
<li class="flow flows-item">
<span class="flow-number">02</span>
<h3 class="flow-title">ヒアリング</h3>
<p class="flow-desc">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
</li><!-- /flow -->

<!-- flow -->
<li class="flow flows-item">
<span class="flow-number">03</span>
<h3 class="flow-title">学習プランのご提供</h3>
<p class="flow-desc">目標達成のために最適な学習プランをご提案致します。</p>
</li><!-- /flow -->

<!-- flow -->
<li class="flow flows-item">
<span class="flow-number">04</span>
<h3 class="flow-title">ご入会</h3>
<p class="flow-desc">お申込み完了後、レッスンがスタートします。</p>
</li><!-- /flow -->

</ul>
</div>
</section><!-- /flows -->

<!-- faq -->
<section class="faq">
<div class="faq-inner">
<h2 class="faq-title">よくある質問</h2>
<ul class="faq-list">

<!-- accordion -->
<li class="accordion faq-item">
<dt class="accordion-head _active"><p class="accordion-question">Engressはサラリーマンでも学習を続けられるでしょうか？</p></dt>
<dd class="accordion-body"><p class="accordion-answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p></dd>
</li><!-- accordion -->

<!-- accordion -->
<li class="accordion faq-item">
<dt class="accordion-head"><p class="accordion-question">教材はオリジナルのものを使用しているのでしょうか？</p></dt>
<dd class="accordion-body"><p class="accordion-answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p></dd>
</li><!-- accordion -->

<!-- accordion -->
<li class="accordion faq-item">
<dt class="accordion-head"><p class="accordion-question">講師に日本人はいますか？</p></dt>
<dd class="accordion-body"><p class="accordion-answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p></dd>
</li><!-- accordion -->

<!-- accordion -->
<li class="accordion faq-item">
<dt class="accordion-head"><p class="accordion-question">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p></dt>
<dd class="accordion-body"><p class="accordion-answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p></dd>
</li><!-- accordion -->

</ul>
</div>
</section><!-- /faq -->

<!-- newPosts -->
<section class="newPosts">
<div class="newPosts-inner">

<!-- topBlogs -->
<div class="topBlogs">
<h2 class="topBlogs-title">ブログ</h2>
<div class="topBlogs-list">

<?php get_template_part('template-parts/top-blogs'); ?>

</div>
</div><!-- /topBlogs -->

<!-- topNews -->
<div class="topNews">
<h2 class="topNews-title">お知らせ</h2>
<div class="topNews-list">

<?php get_template_part('template-parts/top-news'); ?>

</div>
</div><!-- /topNews -->

</div>
</section><!-- /newPosts -->

</main><!-- main -->

<?php get_footer(); ?>