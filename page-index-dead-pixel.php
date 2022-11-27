<?php /* Template Name: Dead Pixel */ ?>

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

<?php 
    if (have_posts()) : while (have_posts()) : the_post(); the_content();
    endwhile;
else:
?>
<h1> Conteúdo não localizado :-( </h1>
<?php endif; ?>

</section>

<footer>
	<?php wp_footer(); ?>
	<?php get_footer(); ?>
</footer>

</body>
</html>

