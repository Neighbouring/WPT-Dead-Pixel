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
<div id="modalInstitucional" class="modal">
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
				<small id="nomeEquipe">
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
				<small id="nomeEquipe">
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
				<small id="nomeEquipe">
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
			<span id="fechar">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
				<line x1="4" y1="6" x2="20" y2="6"></line>
				<line x1="4" y1="12" x2="20" y2="12"></line>
				<line x1="4" y1="18" x2="20" y2="18"></line>
			</svg>
			</span>
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
			<a
			id="btnINFO"
			target="_blank">
			INFO
			</a>
		</span>
		<span id="icoInsta">
			<a href="https://www.instagram.com/estudiodeadpixel/"
			id="linkIcoSM"
			target="_blank">
			<img id="ico-sm-ig" src="
				<?php echo get_template_directory_uri(); ?>
				/assets/svg/ico-sm-ig.svg" width="" height="" alt="" />
			</a>
		</span>
		<span id="icoVimeo">
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