document.addEventListener('DOMContentLoaded', function () {
  let themeBtnEl = document.querySelector('.switch-theme');
  let body = document.querySelector('body');

  themeBtnEl.addEventListener('click', ()=> {
    body.classList.toggle('active')
    themeBtnEl.classList.toggle('active')
  })

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

let openPopup = document.querySelectorAll('.open-popup');
let popup = document.querySelector('.popup');
let popupBg =  popup.querySelector('.popup-bg');
let closeBtn =  popup.querySelector('.contact-form__close');

if (openPopup && popup ) {
  function togglePopup(e) {
    e.preventDefault();
    popup.classList.toggle('show');
    sessionStorage.setItem('popupShown', popup.classList.contains('show'));
  }
  
  if (sessionStorage.getItem('popupShown') === 'true') {
    popup.classList.add('show');
  }
  
  if (openPopup.length && popup) {
    openPopup.forEach((btn) => {
      btn.addEventListener('click', togglePopup);
    });
  
    popupBg.addEventListener('click', togglePopup);
  
    closeBtn.addEventListener('click', togglePopup);
  }
}