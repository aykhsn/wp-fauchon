<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner" class="fc-header">
	<div id="branding">
		<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization" class="fc-header-title">
			<h1>
				<a href="/">
					<img alt="FAUCHON PARIS" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png">
				</a>
			</h1>
		</div>
		<nav>
			<ul>
				<li>
					<a href="https://www.takashimaya.co.jp/shopping/search.html?search_word=fauchon&search_location_type=1" target="_blank">
						GIFT & SWEETS
						<span>お買い物</span>
					</a>
				</li>
				<li>
					<a href="/fromage/">
						FROMAGE
						<span>フロマージュ</span>
					</a>
				</li>
				<li>
					<a href="/#2ndSection">
						BRAND HISTORY
						<span>フォションについて</span>
					</a>
				</li>
				<li>
					<a href="/#3rdSection">
						BOUTIQUES
						<span>お店を探す</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
		</nav> -->
</header>
<div id="container">