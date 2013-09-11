<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); // wp_head ?>

</head>

<body <?php hybrid_body_attributes(); ?>>

	<div id="container">

		<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

		<header id="header">

			<hgroup id="branding">
				<h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup><!-- #branding -->

		</header><!-- #header -->

		<?php if ( get_header_image() ) echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="" />'; ?>

		<?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?>

		<div id="main">

			<?php get_template_part( 'breadcrumbs' ); // Loads the breadcrumbs.php template. ?>