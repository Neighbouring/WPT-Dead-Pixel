<h1>FOOTER AQUI</h1>

<?php if ( get_theme_mod( 'blank_show_copyright', true ) ) : ?>

		<?php echo wp_kses_post( get_theme_mod( 'blank_copyright', __( 'Intentionally Blank - Proudly powered by WordPress', 'intentionally-blank' ) ) ); ?>

	<?php endif; ?>