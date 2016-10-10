<?php

if ( function_exists( 'register_sidebar' ) ) {
	if ( ! function_exists( 'newsmag_register_sidebars' ) ) {
		function newsmag_register_sidebars() {

			#
			#    Register sidebars
			#
			register_sidebar( array(
				                  'id'            => 'homepage-slider',
				                  'name'          => __( 'Homepage Slider', 'newsmag' ),
				                  'description'   => __( 'This sidebar holds the header sidebar area on the homepage.', 'newsmag' ),
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>',
				                  'before_title'  => '<h3>',
				                  'after_title'   => '</h3>',
			                  ) );

			register_sidebar( array(
				                  'id'            => 'sidebar',
				                  'name'          => __( 'Blog Sidebar', 'newsmag' ),
				                  'description'   => __( 'This is the blog sidebar. If you\'ve set a posts page under Settings -> Reading, that\'s where your sidebar will be showing up', 'newsmag' ),
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>',
				                  'before_title'  => '<h3>',
				                  'after_title'   => '</h3>',
			                  ) );

			register_sidebar( array(
				                  'id'            => 'content-area',
				                  'name'          => __( 'Content Area', 'newsmag' ),
				                  'description'   => __( 'The sidebar holds the entire homepage content, place "Newsmag - Homepage builder" widgets here, please consider the column arrangement.', 'newsmag' ),
				                  'before_title'  => '<h3 class="widget-title"><span>',
				                  'after_title'   => '</span></h3>',
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>'
			                  )
			);

			register_sidebar( array(
				                  'id'            => 'footer-1',
				                  'name'          => __( 'Footer 1', 'newsmag' ),
				                  'description'   => __( 'This is your footer sidebar. By default, we\'ve defined a maximum of 4 sidebars but if you want to use less make sure you change the settings in: Footer -> Footer columns.', 'newsmag' ),
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>',
				                  'before_title'  => '<h3 class="widget-title">',
				                  'after_title'   => '</h3>',
			                  ) );

			register_sidebar( array(
				                  'id'            => 'footer-2',
				                  'name'          => __( 'Footer 2', 'newsmag' ),
				                  'description'   => __( 'This is your footer sidebar. By default, we\'ve defined a maximum of 4 sidebars but if you want to use less make sure you change the settings in: Footer -> Footer columns.', 'newsmag' ),
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>',
				                  'before_title'  => '<h3 class="widget-title">',
				                  'after_title'   => '</h3>',
			                  ) );

			register_sidebar( array(
				                  'id'            => 'footer-3',
				                  'name'          => __( 'Footer 3', 'newsmag' ),
				                  'description'   => __( 'This is your footer sidebar. By default, we\'ve defined a maximum of 4 sidebars but if you want to use less make sure you change the settings in: Footer -> Footer columns.', 'newsmag' ),
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>',
				                  'before_title'  => '<h3 class="widget-title">',
				                  'after_title'   => '</h3>',
			                  ) );

			register_sidebar( array(
				                  'id'            => 'footer-4',
				                  'name'          => __( 'Footer 4', 'newsmag' ),
				                  'description'   => __( 'This is your footer sidebar. By default, we\'ve defined a maximum of 4 sidebars but if you want to use less make sure you change the settings in: Footer -> Footer columns.', 'newsmag' ),
				                  'before_widget' => '<div id="%1$s" class="widget %2$s">',
				                  'after_widget'  => '</div>',
				                  'before_title'  => '<h3 class="widget-title">',
				                  'after_title'   => '</h3>',
			                  ) );

		} // function newsmag_register_sidebars end

		add_action( 'widgets_init', 'newsmag_register_sidebars' );

	} // function exists (newsmag_register_sidebars) check
} // function exists (register_sidebar) check
