<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<h1>404 Not Found</h1>
					<h3>Search again....</h3>
					<h1>OR</h1>
					<p>Return to <a href="<?php esc_url(bloginfo('home')); ?>">Home</a></p>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>