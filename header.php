<!-- LOADING -->
<div id="loadingIntro">
	<div id="loadingLogo">
	<img id="logo-svg-file" src="
		<?php echo get_template_directory_uri(); ?>
		/assets/svg/Dead-Pixel-Logotipo-WT01.svg" width="" height="" alt="" />
		<!-- <img src="https://media3.giphy.com/media/TADJ0HCgG7oxW/giphy.gif" /> -->
		<!-- <img src="https://media.giphy.com/media/3oKIPjB2wHeDZj727K/giphy.gif" /> -->
		
	<!-- <div id="info-carregando">
	[ LOADING ]
	</div> -->
	</div>
</div>

<!-- HEADER -->
<header id=header-dead-pixel>
<div id="logo-dead-pixel">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img id="logo-svg-file" src="
		<?php echo get_template_directory_uri(); ?>
		/assets/svg/Dead-Pixel-Logotipo-WT01.svg" width="" height="" alt="" />
	</a>
</div>
<div id="nav-menu-dead-pixel">
<?php wp_nav_menu(
		array(
			'theme_location' => 'header-menu'
		)
	);
	?>
</div>
</header>