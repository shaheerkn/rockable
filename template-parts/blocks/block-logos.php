<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> logos">
  <div class="container">
    <?php while (have_rows( 'logos' ) ) : the_row(); ?>
      <div class="logos__logo" data-aos="fade-up" data-aos-duration="1000">
        <?php theme_get_attachment( get_sub_field( 'logo' ) , 'full', '', true ); ?>
      </div>
      <?php
        $row_index = get_row_index();
        if ( $row_index == 4 || $row_index == 11 || $row_index == 18 || $row_index == 25 || $row_index == 32){
          echo '<div class="flex-break"></div>';
        }
      ?>
    <?php endwhile; ?>
  </div>
</section>