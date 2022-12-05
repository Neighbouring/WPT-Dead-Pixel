<?php /* Template Name: 02 - Advertisement */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>

<?php wp_head(); ?>
<?php get_header(); ?>
<?php wp_body_open(); ?>

<section id="dead-pixel-content">

<?php $categoriaPost = new WP_Query( array('tax_query' => array( 'relation' => 'AND',
    array(
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => array( 'advertisement' ),
    ),
    // array(
    //   'taxonomy' => 'post_format',
    //   'field'    => 'slug',
    //   'terms'    => array( 'teste' ),
    // ),
  ) ) ); ?>
  
<?php if( $categoriaPost->have_posts() ): while( $categoriaPost->have_posts() ): $categoriaPost->the_post(); ?>

    <?php the_content(); ?>

        <div id="descricao-tecnica-job">
            <div id="col-1">
                <div id="txt-cliente" itemprop="cliente">
                    <?php the_field('cliente'); ?>
                </div>
                <div id="txt-campanha" itemprop="campanha">
                    <?php the_field('campanha'); ?>
                </div>
                <div id="txt-agencia" itemprop="agencia">
                    <?php the_field('agencia'); ?>
                </div>
                <div id="txt-ano" itemprop="ano">
                    <?php the_field('ano'); ?>
                </div>
            </div>
            <div id="col-2">
                <div id="txt-diretor">
                    Direção: <?php the_field('diretor'); ?>
                </div>
                <details id="ver-mais">
                    <summary id="txt-ver-mais" onclick="coordenadaMouse(event)">
                    Ficha Técnica ↓
                    </summary>
                    <p>
                        <?php the_field('ficha_tecnica'); ?>
                    </p>
                </details>
            </div>
        </div>

<?php endwhile; else: ?>

<h1> Conteúdo não localizado :-( </h1>
<?php endif; ?>

</section>

<footer>
	<?php wp_footer(); ?>
	<?php get_footer(); ?>
</footer>

</body>
</html>
