<?php global $zBoom; ?>
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<?php if($zBoom['opt-footer-widget'] == 1) : ?>
		<div class="row block09">
			<?php dynamic_sidebar('footer-widget'); ?>
		</div>
		<?php endif; ?> 
		<div class="row copyright">
			<div class="copytext">
				<p>
					<a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
					<?php echo $zBoom['opt-copyright-text']; ?> - 
					<?php echo the_time('Y'); ?> | All right reserve by
					<a href="<?php echo $zBoom['opt-developer-url']; ?>"><?php echo $zBoom['opt-developer-name']; ?></a>				
				</p>
			</div>
			<div class="social">
				<ul>
					<?php if(!empty($zBoom['opt-social-network']['Facebook'])):?>
						<li><a href="https://facebook.com/<?php echo $zBoom['opt-social-network']['Facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($zBoom['opt-social-network']['Twitter'])):?>
						<li><a href="https://twitter.com/<?php echo $zBoom['opt-social-network']['Twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($zBoom['opt-social-network']['Youtube'])):?>
						<li><a href="<?php echo $zBoom['opt-social-network']['Youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($zBoom['opt-social-network']['GitHub'])):?>
						<li><a href="<?php echo $zBoom['opt-social-network']['GitHub']; ?>" target="_blank"><i class="fab fa-github"></i></a></li>
					<?php endif; ?>
					<?php if(!empty($zBoom['opt-social-network']['Skype'])):?>
						<li><a href="skype:<?php echo $zBoom['opt-social-network']['Skype']; ?>" target="_blank"><i class="fab fa-skype"></i></a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>		
	</div>
</footer>

	
<?php wp_footer(); ?>
</body>
</html>