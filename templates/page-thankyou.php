<?php
/**
 * Template Name: Thankyou
 */

get_header();
?>

	<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> logos">
		<div class="container">
			<?php
				the_field( 'image' );
				the_field( 'title' );
			?>
		</div>
	</section>

<?php
get_footer();
