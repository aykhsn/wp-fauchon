<?php
	$page = get_page_by_path('custom-fields');
	$id = $page->ID;
?>
<?php get_header(); ?>
<main id="content" role="main">
	<section class="fc-section fc-section_sns">
		<ul class="fc-list-style--none">
			<li>
				<a href="https://www.facebook.com/FauchonJapan/" target="_blank">
					<img class="fc-sns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon.png">
					<img class="fc-sns-icon--hover" src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon_pink.png">
				</a>
			</li>
			<li>
				<a href="https://www.instagram.com/fauchon_japan/" target="_blank">
					<img class="fc-sns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/instagram-icon.png">
					<img class="fc-sns-icon--hover" src="<?php echo get_template_directory_uri(); ?>/assets/instagram-icon_pink.png">
				</a>
			</li>
			<li>
				<a href="https://twitter.com/fauchon_jp" target="_blank">
					<img class="fc-sns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/twitter-icon.png">
					<img class="fc-sns-icon--hover" src="<?php echo get_template_directory_uri(); ?>/assets/twitter-icon_pink.png">
				</a>
			</li>
			<li>
				<a href="https://page.line.me/129jtmfi?openQrModal=true" target="_blank">
					<img class="fc-sns-icon" src="<?php echo get_template_directory_uri(); ?>/assets/line-icon.jpg">
					<img class="fc-sns-icon--hover" src="<?php echo get_template_directory_uri(); ?>/assets/line-icon_pink.png">
				</a>
			</li>
		</ul>
	</section>
	<section id="mainVisual" class="fc-section fc-section_mainVisual">
		<img src="<?php the_field('main-visual_img', $id); ?>" />
	</section>
	<section id="1stSection" class="fc-section">
		<div class="fc-section-header">
			<div class="fc-section-header_title">
				<h1>FAUCHON <span>LIVE</span></h1>
				<h2>フォションと繋がる</h2>
			</div>
		</div>
		<div><?php echo do_shortcode('[instagram-feed num=4]'); ?></div>
	</section>
	<section id="2ndSection" class="fc-section">
		<div class="fc-section-header">
			<div class="fc-section-header_title">
				<h1>BRAND <span>HISTORY</span></h1>
				<h2>フォションについて</h2>
			</div>
		</div>
		<div class="fc-section-content">
			<div class="fc-section-content_innerLeft">
				<img src="<?php the_field('2nd-section_img', $id); ?>" />
			</div>
			<div class="fc-section-content_innerRight">
				<p><?php the_field('2nd-section_text', $id); ?></p>
			</div>
		</div>
	</section>
	<section id="3rdSection" class="fc-section">
		<div class="fc-section-header">
			<div class="fc-section-header_title">
				<h1>LES <span>BOUTIQUES</span></h1>
				<h2>お店を探す</h2>
			</div>
		</div>
		<div class="fc-section-content">
			<div class="fc-section-content_innerLeft">
				<ul class="fc-shopList">
					<li>
						<a href="<?php the_field('shoplist-1_link', $id); ?>">
							<?php the_field('shoplist-1_area', $id); ?>
							<span><?php the_field('shoplist-1_count', $id); ?></span>
						</a>
					</li>
					<li>
						<a href="<?php the_field('shoplist-2_link', $id); ?>">
							<?php the_field('shoplist-2_area', $id); ?>
							<span><?php the_field('shoplist-2_count', $id); ?></span>
						</a>
					</li>
					<li>
						<a href="<?php the_field('shoplist-3_link', $id); ?>">
							<?php the_field('shoplist-3_area', $id); ?>
							<span><?php the_field('shoplist-3_count', $id); ?></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="fc-section-content_innerRight">
				<img src="<?php the_field('3rd-section_img', $id); ?>" />
			</div>
		</div>
	</section>
	<section id="banner" class="fc-section">
		<div class="fc-section-content">
			<div class="fc-section-content_innerLeft">
				<a href="<?php the_field('banner-1_link', $id); ?>">
					<img src="<?php the_field('banner-1_img', $id); ?>" />
				</a>
			</div>
			<div class="fc-section-content_innerRight">
				<a href="<?php the_field('banner-2_link', $id); ?>">
					<img src="<?php the_field('banner-2_img', $id); ?>" />
				</a>
			</div>
	</section>
</main>
<?php get_footer(); ?>