<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<div id="post" role="main">

	<?php
		 /* Run the loop to output the page.
		  * If you want to overload this in a child theme then include a file
		  * called loop-page.php and that will be used instead.
		  */
		 get_template_part( 'loop', 'page' );
		 ?>

</div>

<?php get_footer(); ?>
