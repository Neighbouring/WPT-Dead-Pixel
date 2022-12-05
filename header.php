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



<!-- MODAL INFO -->
<div id="btnFechar" onClick="modalFechar()">
		<span id="fechar">✕</span>
</div>
<div id="modalInstitucional">
	<div id="modalFlex">
		<p id="infoInstitucional">
			O Estúdio Dead Pixel surgiu em 2013, em um momento no qual formatos não convencionais e demandas de entregas surgiam como consequência de novos hábitos de consumo de imagem do público em geral. Com filmes verticais ou quadrados, gifs, stickers ou filtros, nos especializamos em solucionar problemas para uma nova publicidade ainda em fase de teste por parte das agências e dos clientes.
			<br><br>
			Nós aprendemos na prática a atender a essas exigências e entregar peças, para diversos canais de comunicação com as mais diferentes durações, que se destacavam sempre pela linguagem diferenciada e por uma pós-produção refinada atendendo às necessidades dos clientes.
		</p>

		<div id="modalImagens">
			<div id="modalIMG1">
				<img
					id="imgEquipe"
					src="<?php echo get_template_directory_uri(); ?>
					/assets/img/institucional/kiko-costato.png"
				/>
				<small>
				Kiko Costato
				<br>
				Sócio / Diretor
				</small>
			</div>
			<div id="modalIMG2">
				<img
					id="imgEquipe"
					src="<?php echo get_template_directory_uri(); ?>
					/assets/img/institucional/andre-ferezini.png"
				/>
				<small>
				André Ferezini
				<br>
				Diretor
				</small>
			</div>
			<div id="modalIMG3">
				<img
					id="imgEquipe"
					src="<?php echo get_template_directory_uri(); ?>
					/assets/img/institucional/gustavo-michelucci.png"
				/>
				<small>
				Gustavo Michelucci
				<br>
				Sócio / Diretor
				</small>
			</div>
		</div>
		<p id="infoContato">
			<a href="mailto:contato@estudiodeadpixel.tv">
				contato@estudiodeadpixel.tv
			</a>
			<br>
			<span itemprop="telefone">
				<a href="tel:+551135540945">+55 11 3554 0945</a>
			</span>
			<br>
			Rua Cardoso de Almeida, 1593 - Perdizes - São Paulo/SP
		</p>
		
		<br><br>
		<p id="infoCNPJ">
			<small>
			Estúdio DEAD PIXEL Ltda.
			<br>
			CNPJ: 20.247.747/0001-56
			</small>
		</p>
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
<!-- MENU MOBILE FECHAR -->
<menu id="menuMobile">
		<div id="btnFecharMMobile" onClick="menuMobileFechar()">
			<span id="fechar">✕</span>
		</div>
		<div id="btnAbreMMobile" onClick="menuMobileAbrir()">
			<span id="fechar">☰</span>
		</div>
</menu>

<div id="nav-menu" class="nav-menu-m">
	<div id="nav-menu-dead-pixel">
		<nav>
					<?php wp_nav_menu(
			array(
				'theme_location' => 'header-menu'
			)
		);
		?>
		</nav>

	</div>
	<div id="sm-menu">
		<span>
			<a href="https://www.instagram.com/estudiodeadpixel/"
			id="linkIcoSM"
			target="_blank">
			<img id="ico-sm-ig" src="
				<?php echo get_template_directory_uri(); ?>
				/assets/svg/ico-sm-ig.svg" width="" height="" alt="" />
			</a>
		</span>
		<span>
			<a href="https://vimeo.com/estudiodeadpixel"
			id="linkIcoSM"
			target="_blank">
			<img id="ico-sm-vimeo" src="
				<?php echo get_template_directory_uri(); ?>
				/assets/svg/ico-sm-vimeo.svg" width="" height="" alt="" />
			</a>
		</span>
	</div>
</div>

</header>