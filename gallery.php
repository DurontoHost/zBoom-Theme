<?php

/*
Template Name: Gallery
*/

?>

<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		
		<div class="row block03">
			
			<?php
				$zboomgalleryitems = new wp_query(array(
					'post_type' => 'zboomgallery',
					'posts_per_page' => -1
				));			
			?>
			
			<?php while($zboomgalleryitems->have_posts()) : $zboomgalleryitems->the_post(); ?>
				<div class="col-1-4">
					<div class="wrap-col">
						<article class="gimg">
							<?php the_post_thumbnail(); ?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php read_more(5); ?> ..... <a href="<?php the_permalink(); ?>"><button>More</button></a></p>
						</article>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>