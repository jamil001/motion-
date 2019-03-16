<?php 

function motion_theme_setup(){
	load_theme_textdomain( "motion");
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	$motion_custom_header = array(
		'header-text'        => true,
		'default-text-color' => '#FFFFFF',
		'width'              => 1200,
		'height'             => 600,
		'flex-height'        => true,
		'flex-width'         => true,

	);
	add_theme_support( "custom-header", $motion_custom_header );
	
}
add_action( "after_setup_theme", "motion_theme_setup" );

function motion_assets(){
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri("/assets/css/font-awesome.min.css"), null, '1.0.1'   );
	wp_enqueue_style( 'fonts-css','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Passion+One:400', null, '1.0.1'   );
	wp_enqueue_style( 'main-css', get_theme_file_uri("/assets/css/main.css"), null  );
	wp_enqueue_style( 'motion-css', get_stylesheet_uri());


	//wp_enqueue_script( 'min-js', get_theme_file_uri( '/assets/js/jquery.min.js' ), null, '2.2.1', true );
	wp_enqueue_script( 'scrolly-js', get_theme_file_uri( '/assets/js/jquery.scrolly.min.js' ), array("jquery"), '2.5.2', true );
	wp_enqueue_script( 'poptrox-js', get_theme_file_uri( '/assets/js/jquery.poptrox.min.js' ), null, array("jquery"), true );
	wp_enqueue_script( 'skel-js', get_theme_file_uri( '/assets/js/skel.min.js' ), null, array("jquery"), true );
	wp_enqueue_script( 'util-js', get_theme_file_uri( '/assets/js/util.js' ), null, array("jquery"), true );
	wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/js/main.js' ), null, array("jquery"), true );
}
add_action( "wp_enqueue_scripts", "motion_assets" );

function motion_widgets(){
	
	register_sidebar(array(
		'name'          => __( 'Footer Top Section ', 'motion' ),
		'id'            => 'footer-top',
		'description'   => __( 'Footer Top Section Area ', 'motion' ),
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
	

	
}
add_action( "widgets_init", "motion_widgets" );


function mamurjor_header(){
	if (is_front_page()) {
		if (current_theme_supports("custom-header")) {
			?>
				
				<style>
					
					#banner{
						background-image: url(<?php echo header_image(); ?>);
						background-size: cover;
					}


				</style>


			<?php
		} 
		
	} 
	
}
add_action( "wp_head", "mamurjor_header");