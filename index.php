<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="dead-pixel" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php wp_head(); ?>
<?php get_header(); ?>

<main>

    <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
        
        <!-- <?php the_permalink(); ?> -->
        <!-- <?php the_title(); ?> -->
        <!-- <?php the_post_thumbnail( 'full' ); ?> -->
        <!-- <?php the_excerpt(); ?> -->
        <!-- <?php content_url(); ?> -->
        <!-- <?php get_the_content(); ?> -->

        <?php the_content(); ?>

        <div id="descricao-tecnica-job">
            <div id="col-1">
                <div id="txt-cliente">
                    <?php the_field('cliente'); ?>
                </div>
                <div id="txt-campanha">
                    <?php the_field('campanha'); ?>
                </div>
                <div id="txt-agencia">
                    <?php the_field('agencia'); ?>
                </div>
                <div id="txt-ano">
                    <?php the_field('ano'); ?>
                </div>
            </div>
            <div id="col-2">
                <!-- <div id="txt-diretor">
                    <?php the_field('diretor'); ?>
                </div> -->
                <details id="ver-mais">
                    <summary id="txt-ver-mais" onclick="coordenadaMouse(event)">
                    <?php the_field('diretor'); ?> ↓
                    </summary>
                    <p id="ficha-tecnica-job">
                        <pre id="ficha-tecnica-job"><?php the_field('ficha_tecnica'); ?></pre>
                    </p>
                </details>
            </div>
        </div>

    <?php endwhile; endif; ?>

</main>

<footer id="rodape">
	<?php wp_footer(); ?>
	<?php get_footer(); ?>
</footer>

</body>
</html>
