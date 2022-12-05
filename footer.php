<!-- <h1>FOOTER AQUI</h1> -->
<div id="sbOnline"> 👌🏽 Conexão estabelecida! </div>
<div id="sbOffline"> 🦖 Conexão perdida! </div>

<div id="footer-dead-pixel">
	<div id="menu-rodape">
		<?php wp_nav_menu(
				array(
					'theme_location' => 'footer-menu'
				)
				); 
			?>
	</div>
	<div id="copyrightRodape">
		<?php if ( get_theme_mod( 'blank_show_copyright', true ) ) : ?>
			<small>
				<?php echo "Desenvolvido na Cidade da Garoa com ❤ por Neighbouring" ?>	
			</small>
		<?php endif; ?>
	</div>
</div>
