<?php
  $classes = 'layout-' . get_query_var('layout_index');
  if( get_sub_field( 'section_classes' ) ){
    $classes .= ' ' . get_sub_field( 'section_classes' );
  }
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> hero relative">
  <div class="container tcenter">
    <div class="site-brand" data-aos="zoom-out" data-aos-duration="1000">
      <?php
        theme_the_field( 'pre_title', '<p class="p tagline">', '</p>', true );
        theme_the_field( 'title', '<h2 class="h2 brand">', '</h2>', true );
      ?>
      <a href="/" class="brand">
        <img src="<?php echo get_template_directory_uri() ?>/assets/brand-black.svg" />
      </a> 
    </div>
    <div class="hero__content"  data-aos="fade-up" data-aos-duration="1000">
      <?php
        theme_the_field( 'title_two', '<h1 class="h1">', '</h1>', true );
        theme_the_field( 'content', '<p class="p">', '</p>', true );
      ?>
    </div>
  </div>
</section>