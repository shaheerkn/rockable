<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
if (get_sub_field('enable_button') == 'Yes'){
  $classes .= ' ' . 'text--with-btn';
}
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> text tcenter text--with-btn">
  <div class="container">
    <?php if (get_sub_field('enable_image') == 'Yes'){ ?>
      <div class="text__img" data-aos="fade-up" data-aos-duration="1000">
        <?php
          if (get_sub_field('enable_image') == 'Yes'){
            theme_get_attachment( get_sub_field('image'), 'full', '', true );
          }
        ?>
      </div>
    <?php }  ?>
    <?php
      theme_the_field( 'title', '<h2 class="section-title">', '</h2>', true );
      theme_the_field( 'subtitle', '<p class="section-description">', '</p>', true );
    ?>
    <?php if ( get_sub_field( 'content' )): ?>
      <div class="content">
        <?php theme_the_field( 'content', '', '', true ); ?>
      </div>
    <?php endif; ?>

    <?php if ( get_sub_field('enable_button') == 'Yes' ): ?>
      <div class="actual-position">
        <a href="<?php echo get_sub_field( 'contact_button' )['url']; ?>" class="btn button--sticky"><?php echo get_sub_field( 'contact_button' )['title']; ?></a>
      </div>
    <?php endif;?>
  </div>
</section>