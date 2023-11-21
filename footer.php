<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rockable
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container tcenter">
				<a href="#" class="brand" data-aos="fade-up">
           <img src="<?php echo get_template_directory_uri()?>/assets/brand-black.svg" />
        </a>
				<p>
					LOGO DESIGN AWESOMENESS SINCE 2003.
				</p>
				<p> © ROCKABLE DESIGN</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
