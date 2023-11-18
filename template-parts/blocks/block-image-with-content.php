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
    <div class="text__img">
      <?php
        if (get_sub_field('enable_image') == 'Yes'){
          theme_get_attachment( get_sub_field('image'), 'full', '', true );
        }
      ?>
    </div>
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
        <a href="#" class="btn button--sticky open-popup"><?php echo get_sub_field( 'button_text' ); ?></a>
      </div>
    <?php endif;?>
  </div>
</section>

<div class="popup" aria-hidden="true">
    <div class="popup-bg"></div>
    <div class="contact-form">
      <!-- form here -->
      <div class="contact-form__close"></div>
      <div class="contact-form__container">
        <p class="contact-form__p">We’d love to hear about your project and how we may be a great fit. Feel free to complete the form below, shoot us an e-mail, or give us a jingle.</p>
        <di class="contact-form__btns">
          <a href="tel:(612) 845-0467" class="contact-form__btn btn">(612) 845-0467</a>
          <a href="mailto:talktome@rockabledesign.com" class="contact-form__btn btn">talktome@rockabledesign.com</a>
        </di>
        <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
      </div>
    </div>
  </div>