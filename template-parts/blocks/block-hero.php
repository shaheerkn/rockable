<?php
  $classes = 'layout-' . get_query_var('layout_index');
  if( get_sub_field( 'section_classes' ) ){
    $classes .= ' ' . get_sub_field( 'section_classes' );
  }
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> hero relative">
  <div class="container tcenter">
    <div class="site-brand">
      <p class="p tagline">WE ARE</p>
      <a href="#" class="brand">
        <img src="<?php echo get_template_directory_uri() ?>/assets/brand-black.svg" />
      </a>
    </div>
    <div class="divider"></div>
    <div class="hero__content">
      <h1 class="h1">LOGO DESIGN IS WHAT WE DO.</h1>
      <p class="p">We have over 20 years of logo design experience, more than 3,000 happy clients worldwide, and an absolute passion for designing beautiful things.</p>
    </div>
  </div>
</section>