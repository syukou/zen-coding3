<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TOP</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/module.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.top.css"/>
</head>
<body>
<div class="cm-container">

	<?php if (is_home()) { ?>
		<header class="header">
			<div class="header-inner">
				<nav class="header-gnav">
					<ul class="header-gnav-list cf">
						<li><a href="#">XXX</a></li>
						<li><a href="#">XXXX</a></li>
						<li><a href="#">XXXXX</a></li>
					</ul>
				</nav>
			</div>
		</header>
	<?php } else { ?>
		<header class="header">
			<div class="header-logos">
				<div class="cm-inner header-logos-inner cf">
					<h1 class="header-logos-img"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo_under.svg" alt="天心工房" width="350" height="126"></a></h1>
					<nav class="header-logos-nav">
						<ul class="cf">
							<li>
								<a href="#" class="header-logos-nav-list current">
									<div class="header-logos-nav-list-inner">
										<p class="header-logos-nav-list-head">ZEN-CODING</p>
										<p class="header-logos-nav-list-ruby">ブログ</p>
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="header-logos-nav-list">
									<div class="header-logos-nav-list-inner">
										<p class="header-logos-nav-list-head">ABOUT TENSHIN</p>
										<p class="header-logos-nav-list-ruby">天心工房について</p>
									</div>
								</a>
							</li>
							<li>
							<span class="header-logos-nav-list">
								<div class="header-logos-nav-list-inner">
									<p class="header-logos-nav-list-head">WORKS</p>
									<p class="header-logos-nav-list-ruby">制作実績</p>
								</div>
							</span>
							</li>
							<li>
							<span class="header-logos-nav-list">
								<div class="header-logos-nav-list-inner">
									<p class="header-logos-nav-list-head">CONTACT</p>
									<p class="header-logos-nav-list-ruby">お問い合わせ</p>
								</div>
							</span>
							</li>
							<li>
							<span class="header-logos-nav-list">
								<div class="header-logos-nav-list-inner">
									<p class="header-logos-nav-list-head">LINK</p>
									<p class="header-logos-nav-list-ruby">リンク</p>
								</div>
							</span>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	<?php } ?>