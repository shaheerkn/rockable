<section <?php theme_section_id(); ?> class="thankyou contact-form">
	<div class="container">
		<img src="<?php the_sub_field( 'image' ); ?>" alt="">
		<h2>
			<?php
				the_sub_field( 'title' );
			?>
		</h2>

		<p>
			<?php
				the_sub_field( 'description' );
			?>
		</p>
	</div>
</section>