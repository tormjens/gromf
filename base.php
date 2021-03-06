<?php get_template_part('templates/head'); ?>


<body <?php body_class(); ?>>



	<!--[if lt IE 8]>
		<div class="alert-box warning">
			<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
		</div>
	<![endif]-->




	<?php
		// Header
	  	do_action('get_header');
	  	get_template_part('templates/header');
	?>




  	<div class="content row" role="document">
		<main class="main <?php echo roots_main_class(); ?> columns" role="main">
		  	<?php include roots_template_path(); ?>
		</main><!-- /.main -->
		<?php if (roots_display_sidebar()) : ?>
		  	<aside class="sidebar <?php echo roots_sidebar_class(); ?> columns" role="complementary">
				<?php include roots_sidebar_path(); ?>
		  	</aside><!-- /.sidebar -->
		<?php endif; ?>
	</div><!-- /.content -->


	<?php
		// Navigation
		// is loaded after content
	  	get_template_part('templates/navigation');
	?>


  	<?php get_template_part('templates/footer'); ?>





</body>
</html>
