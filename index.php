<?php get_header(); ?>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">


							<?php while (have_posts()) :
								the_post();    ?>


								<div class="box">
									<?php 
										    $yt = get_the_content( ); 
										    $emb = explode('/',$yt);
										    
										?>
									<a href="https://youtu.be/<?php echo $emb[3];?>" class="image fit"><?php the_post_thumbnail('medium'); ?></a>
									<div class="inner">
										<h3><?php the_title( ); ?></h3>
										<p> <?php the_excerpt(); ?></p>

								

										<a href="https://youtu.be/<?php echo $emb[3];?>" class="button fit" data-poptrox="youtube,800x400">Watch</a>
									</div>
								</div>

							
							<?php endwhile; ?>
							
							
							

							

						</div>

					</div>
				</div>

<?php get_footer(); ?>