<?php global $zBoom; ?>
<style type="text/css">
	body{
		background-color: <?php echo $zBoom['opt-body-background']['background-color']; ?> !important;
		background-image: url(<?php echo $zBoom['opt-body-background']['background-image']; ?>) !important;
		background-repeat: <?php echo $zBoom['opt-body-background']['background-repeat']; ?> !important;
		background-attachment: <?php echo $zBoom['opt-body-background']['background-attachment']; ?> !important;
		background-size: <?php echo $zBoom['opt-body-background']['background-size']; ?> !important;
		background-position: <?php echo $zBoom['opt-body-background']['background-position']; ?> !important;
	}
	header .wrap-header {
	    background: <?php echo $zBoom['opt-header-background']; ?> !important;
	}
	header .wrap-header .site-title h4{
	    color: <?php echo $zBoom['opt-title-text-color']; ?> !important;
	}
	header .wrap-header .site-title h4:hover{
	    color: <?php echo $zBoom['opt-title-hover-color']; ?> !important;
	}
	header .wrap-header .site-title span{
	    color: <?php echo $zBoom['opt-subtitle-text-color']; ?> !important;
	}
	.copyright {
		background: <?php echo $zBoom['opt-footer-background']; ?> !important;
	}
	.copyright p {
		color: <?php echo $zBoom['opt-footer-text-color']; ?> !important;
	}
	.copyright p a{
		color: <?php echo $zBoom['opt-footer-link-color']; ?> !important;
	}
	.copyright p a:hover{
		color: <?php echo $zBoom['opt-footer-hover-color']; ?> !important;
	}
	nav .wrap-nav{
		border-style: <?php echo $zBoom['opt-menu-border']['border-style']; ?> !important;
		border-width: <?php echo $zBoom['opt-menu-border']['border-top']; ?> !important;
		border-color: <?php echo $zBoom['opt-menu-border']['border-color']; ?> !important;
	}

	header .wrap-header{
		border-style: <?php echo $zBoom['opt-header-border']['border-style']; ?> !important;
		border-width: <?php echo $zBoom['opt-header-border']['border-top']; ?> !important;
		border-color: <?php echo $zBoom['opt-header-border']['border-color']; ?> !important;
	}

	.featured .wrap-featured{
		border-style: <?php echo $zBoom['opt-slider-border']['border-style']; ?> !important;
		border-width: <?php echo $zBoom['opt-slider-border']['border-top']; ?> !important;
		border-color: <?php echo $zBoom['opt-slider-border']['border-color']; ?> !important;
	}

	#content .wrap-content{
		border-style: <?php echo $zBoom['opt-content-border']['border-style']; ?> !important;
		border-width: <?php echo $zBoom['opt-content-border']['border-top']; ?> !important;
		border-color: <?php echo $zBoom['opt-content-border']['border-color']; ?> !important;
	}

	.wrap-footer{
		border-style: <?php echo $zBoom['opt-footer-border']['border-style']; ?> !important;
		border-width: <?php echo $zBoom['opt-footer-border']['border-top']; ?> !important;
		border-color: <?php echo $zBoom['opt-footer-border']['border-color']; ?> !important;
	}

	.block09 .heading h2{
		color: <?php echo $zBoom['opt-default-footer-widget-htext-color']; ?> !important;
	}

	.block09 .content{
		color: <?php echo $zBoom['opt-default-footer-widget-ctext-color']; ?> !important;
	}

	.block09 .content a{
		color: <?php echo $zBoom['opt-default-footer-widget-link-color']; ?> !important;
	}

	.block09 .content a:hover{
		color: <?php echo $zBoom['opt-default-footer-widget-link-hover']; ?> !important;
	}
	
	<?php echo $zBoom['custom-css-edit']; ?>
		
</style>