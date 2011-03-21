<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/priceless.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/priceless.js"></script>			
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="background">
	<?php
		 /**
		  * Get a background for the page.
		  * Backgrounds selected from the attachments of a special page on the
		  * site. The page must have a custom key defined called
		  * "isMemoriesCollection."
		  */
		 $memoriesPages =& get_pages( 'meta_key=isMemoriesCollection&meta_value=true' );
		 $images =& get_children(
		    'post_type=attachment&'.
		    'post_mime_type=image&'.
		    'post_parent='.($memoriesPages[0]->ID));
		 if ( empty($images) ) {
		    echo 'No memories found for the background!';
		 } else {
        $image = $images[array_rand($images)];
        $src = wp_get_attachment_image_src( $image->ID, 'full' );
        echo '<img src="'.$src[0].'" />';
	   }
	?>
</div>
<div id="wrapper">
	<div id="header">
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</div>
	<div id="nav" role="navigation">
		<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<div class="skip-link screen-reader-text">
			<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>">
				<?php _e( 'Skip to content', 'twentyten' ); ?>
			</a>
		</div>
		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
	</div>
