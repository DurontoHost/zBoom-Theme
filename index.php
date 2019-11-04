<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php while(have_posts()) : the_post(); ?>
						<article class="bimg">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y | g:i a'); ?> with <?php comments_popup_link(); ?>]</div>
							<p><?php read_more(25); ?> ..... <a href="<?php the_permalink(); ?>"><button>Read More</button></a></p>
						</article>
					<?php endwhile; ?>
				
					<div id="pagi">
						<?php the_posts_pagination(array(
							'prev_text' => __('Prev', 'zboom'), 
							'next_text' => __('Next', 'zboom'),
							'screen_reader_text' => ' ',
							//'before_page_number' => 'Page '
						)); ?>
					</div>
					
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>