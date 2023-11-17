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
  window.addEventListener('scroll', ()=> {
    if (actualPosition.getBoundingClientRect().y < innerHeight) {
      buttonSticky.classList.remove('button--active')
    } else if (window.scrollY > 100) {
      buttonSticky.classList.add('button--active')
    } else {
      buttonSticky.classList.remove('button--active')
    }
  })

  let openPopup = document.querySelectorAll('.open-popup');
  let popup = document.querySelector('.popup');
  let popupBg =  popup.querySelector('.popup-bg');

  if (openPopup.length && popup) {
    openPopup.forEach((btn)=> {
      btn.addEventListener('click', ()=> {
        popup.classList.toggle('show')
  
        popupBg.addEventListener('click', ()=> {
           popup.classList.remove('show')
        })
      })
  
    })
  }
  }
})