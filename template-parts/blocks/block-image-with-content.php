<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> text tcenter">
  <div class="container">
    <?php
      theme_get_attachment( get_sub_field('image'), 'full', '', true );
      theme_the_field( 'title', '<h2 class="section-title">', '</h2>', true );
      theme_the_field( 'subtitle', '<p class="section-description">', '</p>', true );
      if ( get_sub_field( 'content' )){
    ?>
      <div class="content">
        <?php theme_the_field( 'content', '', '', true ); ?>
      </div>

    <?php
      }
    ?>
  </div>
</section>