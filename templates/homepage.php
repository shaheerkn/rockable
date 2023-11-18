<?php
/**
 * Template Name: Homeapage
 *
 * The template for displaying the work feed.
 */

get_header();

the_post();
?>
  <img src="<?php echo get_template_directory_uri()?>/assets/background-red.png" class="bg-el bg-el--red" />
  <img src="<?php echo get_template_directory_uri()?>/assets/background-blue.png" class="bg-el bg-el--blue" />

  <button class="switch-theme" aria-label="Change website theme">
    <img src="<?php echo get_template_directory_uri()?>/assets/glasses.png" class="to-dark-mode" />
    <img src="<?php echo get_template_directory_uri()?>/assets/dark-mode.png" class="to-light-mode" />
  </button>

  <div class="popup" aria-hidden="true">
    <div class="popup-bg"></div>
    <div class="contact-form">
      <!-- form here -->
    </div>
  </div>

  <section class="hero relative">
    <div class="container tcenter">
      <div class="site-brand">
        <p class="p tagline">WE ARE</p>
        <a href="#" class="brand">
           <img src="<?php echo get_template_directory_uri()?>/assets/brand-black.svg" />
        </a>
      </div>
      <div class="divider"></div>
      <div class="hero__content">
        <h1 class="h1">LOGO DESIGN IS WHAT WE DO.</h1>
        <p class="p">We have over 20 years of logo design experience, more than 3,000 happy clients worldwide, and an absolute passion for designing beautiful things.</p>
      </div>
    </div>
  </section>

  <section class="logos">
    <div class="divider"></div>
    <div class="container">
      <!-- Sequance [4, 11, 18] -->
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-1.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-2.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-3.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-4.svg" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-5.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-6.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-7.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-8.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-9.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-10.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-11.svg" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-12.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-13.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-14.svg" /></div>
    </div>
     <div class="divider"></div>
  </section>

  <section class="text tcenter">
    <div class="container">
      <div class="text__img"><img src="<?php echo get_template_directory_uri()?>/assets/us-flag.png" /></div>
      <h2 class="section-title">Designed in the USA.</h2>
      <p class="section-description">No outsourcing. No contests.</p>
      <p class="p">Everything we design is done right here, in the good ol’ U.S. of A. </p>
      <p class="p">We do not outsource our design work to other freelancers or foreign countries. We don’t host logo design “contests.” We work directly with our clients to produce a longterm logo design solution.</p>
    </div>
  </section>

  <section class="logos">
     <div class="divider"></div>
    <div class="container">
      <!-- [4, 11, 18] -->
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-1.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-2.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-3.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-4.svg" aria-hidden="true" alt="logo" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-5.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-6.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-7.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-8.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-9.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-10.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-11.svg" aria-hidden="true" alt="logo" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-12.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-13.svg" aria-hidden="true" alt="logo" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-14.svg" aria-hidden="true" alt="logo" /></div>
    </div>
     <div class="divider"></div>
  </section>

  <section class="text tcenter">
    <div class="container">
      <h2 class="section-title">Why work with ROCKABLE?</h2>
      <p class="section-description">Real people. Real relationships. Real results.</p>
      <p class="p">We’re regular people, just like you, although we do have extraordinary design chops. We have families we love, passions we pursue, life struggles and achievements—just like you. </p>
      <p class="p">You’re not just a number to us. We truly care about our clients and take the time to learn about your needs and struggles. Did we mention our design abilities are pretty gangster?</p>
    </div>
  </section>

   <section class="cards cards--simple-borders">
    <div class="container">
      <div class="cards__card">
        <h2 class="section-title">2003</h2>
        <h5 class="section-description">The year it all began.</h5>
        <p class="p">Humbly, in a basement.</p>
      </div>

      <div class="cards__card">
        <h2 class="section-title">3,000+</h2>
        <h5 class="section-description">Amazing clients, worldwide.</h5>
        <p class="p">Great relationships all over the world.</p>
      </div>

       <div class="cards__card">
        <h2 class="section-title">1</h2>
        <h5 class="section-description">The number that matters.</h5>
        <p class="p">It only takes 1 seasoned designer to craft your amazing logo.</p>
      </div>
    </div>
  </section>

  <section class="logos">
     <div class="divider"></div>
    <div class="container">
      <!-- [4, 11, 18] -->
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-1.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-2.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-3.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-4.svg" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-5.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-6.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-7.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-8.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-9.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-10.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-11.svg" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-12.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-13.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-14.svg" /></div>
    </div>
     <div class="divider"></div>
  </section>

  <section class="text tcenter">
    <div class="container">
      <h2 class="section-title">How does your logo design process work?</h2>
      <p class="section-description">Good question. We’ll keep it sweet and simple.</p>
    </div>
  </section>

  <section class="cards">
    <div class="container">
      <div class="cards__card">
        <h2 class="section-title">Let's Chat.</h2>
        <h5 class="section-description">Promise, we  won't bite.</h5>
        <p class="p">This is where we learn your challenges, history, culture, and exectations,</p>
        <p class="p">If you're up for a 10-minute call, shoot us a message using the "CONTACT OUR TEAM" button below."</p>
      </div>

      <div class="cards__card">
        <h2 class="section-title">The propsal.</h2>
        <h5 class="section-description">Promise, we  won't bite.</h5>
        <p class="p">This is where we learn your challenges, history, culture, and exectations,</p>
        <p class="p">If you're up for a 10-minute call, shoot us a message using the "CONTACT OUR TEAM" button below."</p>
      </div>

       <div class="cards__card">
        <h2 class="section-title">Project lunch</h2>
        <h5 class="section-description">Promise, we  won't bite.</h5>
        <p class="p">This is where we learn your challenges, history, culture, and exectations,</p>
        <p class="p">If you're up for a 10-minute call, shoot us a message using the "CONTACT OUR TEAM" button below."</p>
      </div>

      <div class="cards__card">
        <h2 class="section-title">Let's Chat.</h2>
        <h5 class="section-description">Promise, we  won't bite.</h5>
        <p class="p">This is where we learn your challenges, history, culture, and exectations,</p>
        <p class="p">If you're up for a 10-minute call, shoot us a message using the "CONTACT OUR TEAM" button below."</p>
      </div>

      <div class="cards__card">
        <h2 class="section-title">Let's Chat.</h2>
        <h5 class="section-description">Promise, we  won't bite.</h5>
        <p class="p">This is where we learn your challenges, history, culture, and exectations,</p>
        <p class="p">If you're up for a 10-minute call, shoot us a message using the "CONTACT OUR TEAM" button below."</p>
      </div>

      <div class="cards__card">
        <h2 class="section-title">Delivery time.</h2>
        <h5 class="section-description">Wrap up.</h5>
        <p class="p">Now that your new logo design is finalized, we’ll wrap up handy files for you to complete any project you have lined up. Files will include AI, PDF, and PNG. </p>
        <p class="p">If you’d like, we can also create a style-guide which is a handy tool to keep your new brand in check.</p>
      </div>
    </div>
  </section>

  <section class="logos">
     <div class="divider"></div>
    <div class="container">
      <!-- [4, 11, 18] -->
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-1.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-2.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-3.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-4.svg" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-5.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-6.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-7.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-8.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-9.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-10.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-11.svg" /></div>
      <div class="flex-break"></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-12.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-13.svg" /></div>
      <div class="logos__logo"><img src="<?php echo get_template_directory_uri()?>/assets/logo-14.svg" /></div>
    </div>
     <div class="divider"></div>
  </section>

  <section class="text text--with-btn tcenter">
    <div class="container">
      <h2 class="section-title">THAT’S HOW WE ROCK(able).</h2>
      <p class="section-description">Have you seen enough?</p>
      <p class="p">If you’re picking up what we’re laying down, give us a shout. We’d love to hear from you.</p>
      <div class="actual-position">
        <a href="#" class="btn button--sticky open-popup">CONTACT OUR TEAM</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>

