<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<?php wp_head(); ?>

	</head>
	<body id="top" <?php body_class(); ?>>

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" ">
					<div class="inner"> 
						<header>
							<h1><?php bloginfo( "name" ) ?></h1>
							<p><?php bloginfo( "description" ) ?><br />
							
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>