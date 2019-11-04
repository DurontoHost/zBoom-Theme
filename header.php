<?php global $zBoom; ?>
<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="SRToslim">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="all" />
	
	
	<link href='<?php echo $zBoom['opt-favicon']['url']; ?>' rel='icon' type='image/x-icon'/>

	<?php require_once('css.php'); ?>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo">
			<?php if ($zBoom['opt-logo-image']['url'] != ''){?>
				<a href="<?php bloginfo('home'); ?>"><img src="<?php echo $zBoom['opt-logo-image']['url']; ?>"></a>
			<?php } else { ?>
				<h4 class="site-title">
					<a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
				</h4>
				<span class="site-desc"><?php bloginfo('description'); ?></span>
			<?php } ?>						
		</div>
		
		<div id="search">
			<div class="button-search"></div>
			<form method="GET" action="<?php echo esc_url(bloginfo('home')); ?>" >
				<input type="text" name="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php 
				if(function_exists('wp_nav_menu')){
					wp_nav_menu(array(
						'theme_location' => 'primary'
					));
				}
			?>
		</div>		
	</div>
</nav>