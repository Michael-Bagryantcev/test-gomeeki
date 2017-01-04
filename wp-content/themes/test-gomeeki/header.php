<?php
/**
 * The header for our theme
 *
 * @package Gomeeki
 * @subpackage Test Gomeeki
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo bloginfo('name') . (is_front_page() ? '' : ' - ' . get_the_title()); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->	
            <?php 
            wp_nav_menu(
            	array(
            		'theme_location' => 'primary', 
            		'container_class' => 'collapse navbar-collapse',
            		'container_id' => 'bs-example-navbar-collapse-1',
            		'menu_class' => 'nav navbar-nav navbar-right',
            	)
            ); ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><!-- Page Header -->


    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            	    <?php
				    if (is_front_page()) {
				    	?>				    	
                    	<div class="site-heading">
	                        <h1><?php echo bloginfo('name'); ?></h1>
	                        <hr class="small">
	                        <span class="subheading"><?php echo bloginfo('description'); ?></span>
	                    </div>
                        <?php
                    } elseif (is_page()) {
                    	?>
                    	<div class="page-heading">
	                        <h1><?php the_title(); ?></h1>
	                        <hr class="small">
	                        <span class="subheading"><?php echo get_field('subheading'); ?></span>
	                    </div>
                    	<?php
                    } else {
                    	if (have_posts()) {
                    		the_post();
                    	}
                    	?>
	                    <div class="post-heading">
	                        <h1><?php the_title(); ?></h1>
	                        <h2 class="subheading"><?php echo get_field('subheading'); ?></h2>
	                        <span class="meta">Posted by <?php the_author_posts_link(); ?> on <?php the_date(); ?></span>
	                    </div>
                    	<?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
