let themeBtnEl = document.querySelector('.switch-theme');
let body = document.querySelector('body');

document.addEventListener('DOMContentLoaded', function () {
  AOS.init();


  themeBtnEl.addEventListener('click', () => {
    body.classList.toggle('active');
    themeBtnEl.classList.toggle('active');
    const theme = body.classList.contains('active') ? 'active' : '';
    sessionStorage.setItem('theme', theme);
  });

  let actualPosition = document.querySelector('.text--with-btn .actual-position');
  let buttonSticky = document.querySelector('.text--with-btn .button--sticky');
  
  let innerHeight = window.innerHeight - 130;

  
  if (actualPosition && buttonSticky) {
  buttonSticky.classList.add('button--active');

  window.addEventListener('scroll', ()=> {
    if (actualPosition.getBoundingClientRect().y < innerHeight) {
      buttonSticky.classList.remove('button--active')
    } else {
      buttonSticky.classList.add('button--active')
    }
  })
}
})

 if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
  }




const savedTheme = sessionStorage.getItem('theme');
  if (savedTheme) {
    body.classList.add(savedTheme);
    themeBtnEl.classList.add('active');
  }
