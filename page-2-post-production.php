<?php /* Template Name: 02 - Post Production */ ?>

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
      'terms'    => array( 'post-production' ),
    ),
    // array(
    //   'taxonomy' => 'post_format',
    //   'field'    => 'slug',
    //   'terms'    => array( 'teste' ),
    // ),
  ) ) ); ?>
  
<?php if( $categoriaPost->have_posts() ): while( $categoriaPost->have_posts() ): $categoriaPost->the_post(); ?>
  
    <?php the_title() ?>
    <?php the_content() ?>
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