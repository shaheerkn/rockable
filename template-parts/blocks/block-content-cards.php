<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
if (get_sub_field('simple_border') == 'Yes'){
  $classes .= ' ' . 'cards--simple-borders';
}
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> cards">
  <div class="container container--large">
    <?php while( have_rows( 'cards' ) ) : the_row(); ?>
      <div class="cards__card"  data-aos="fade-up" data-aos-duration="1000">
        <?php
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
    <?php endwhile; ?>
  </div>
</section>