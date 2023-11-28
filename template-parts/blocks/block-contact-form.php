<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
?>
<section <?php theme_section_id(); ?> class="contact-form-section <?php echo $classes; ?>">
<div class="container">
    <h1 class="h1">We’d love to hear from you!</h1>
    <div class="contact-form">
      <div class="contact-form__container">
        <p class="contact-form__p p">We’d love to hear about your project and how we may be a great fit. Feel free to complete the form below, shoot us an e-mail, or give us a jingle.</p>
        <div class="contact-form__btns">
          <a href="tel:(612) 845-0467">(612) 845-0467</a>
          <a href="mailto:talktome@rockabledesign.com">talktome@rockabledesign.com</a>
        </div>

        <?php
          echo do_shortcode( get_sub_field( 'shortcode' ) );
        ?>
    </div>
  </div>
</section>