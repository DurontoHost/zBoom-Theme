<?php get_header(); ?>

<?php
/*Template Name: Contact
*/
?>
<?php global $zBoom; ?>


<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<?php if($zBoom['opt-web-layout'] == 1) : ?>
				<div class="col-3-3">
					<div class="wrap-col">
						<?php while(have_posts()) : the_post(); ?>
							<article>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><hr>
								</br>							
								<?php the_content(); ?>
							</article>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if($zBoom['opt-web-layout'] == 2) : ?>
				<div class="col-1-3">
					<div class="wrap-col">
						<?php dynamic_sidebar('contact-sidebar'); ?>
					</div>
				</div>
				<div class="col-2-3">
					<div class="wrap-col">
						<?php while(have_posts()) : the_post(); ?>
							<article>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><hr>
								</br>							
								<?php the_content(); ?>				
							</article>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if($zBoom['opt-web-layout'] == 3) : ?>			
				<div class="col-2-3">
					<div class="wrap-col">
						<?php while(have_posts()) : the_post(); ?>
							<article>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><hr>
								</br>							
								<?php the_content(); ?>				
							</article>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="col-1-3">
					<div class="wrap-col">
						<?php dynamic_sidebar('contact-sidebar'); ?>
					</div>
				</div>
			<?php endif; ?>			
		</div>
	</div>
</section>
<?php get_footer(); ?>