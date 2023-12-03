const themeBtnEl = document.querySelector( '.switch-theme' );
const body = document.querySelector( 'body' );

document.addEventListener( 'DOMContentLoaded', function() {
    AOS.init();

    themeBtnEl.addEventListener( 'click', () => {
      body.classList.toggle('active');
      themeBtnEl.classList.toggle('active');
      const theme = body.classList.contains('active') ? 'active' : '';
      sessionStorage.setItem('theme', theme);
    });

    const actualPosition = document.querySelector( '.text--with-btn .actual-position' );
    const buttonSticky = document.querySelector( '.text--with-btn .button--sticky' );
    const innerHeight = window.innerHeight - 130;

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

let designed = document.querySelector('#designed');
let process = document.querySelector('#process');
let sectionNav = document.querySelector('.section-nav');


if (designed || process) {
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".section-nav a");

        function activateNavLink(link) {
            if (link) {
                navLinks.forEach(navLink => navLink.classList.remove("active"));
                link.classList.add("active");
               
            }
        }

        sectionNav.addEventListener('click', ()=> {
            sectionNav.classList.add('active')
        })


        function isElementInViewport(el) {
            const scroll = window.scrollY || window.pageYOffset;
            const elementTop = el.offsetTop;
            const elementBottom = elementTop + el.clientHeight;

            return (
                elementTop <= (window.innerHeight + scroll) &&
                elementBottom >= scroll
            );
        }

        function highlightNavItem() {
            sections.forEach(section => {
                const top = section.offsetTop - 50;
                const bottom = top + section.offsetHeight;
                const id = section.getAttribute("id");
                const link = document.querySelector(`.section-nav a[href="#${id}"]`);
                console.log(isElementInViewport(section))
                 sectionNav.classList.remove('active');
                
                if (isElementInViewport(section)) {
                    activateNavLink(link);
                }
            });
        }

        navLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href");
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 130,
                        behavior: "smooth"
                    });
                    activateNavLink(this);
                }
            });
        });

        window.addEventListener("scroll", highlightNavItem);
        window.addEventListener("resize", highlightNavItem);

        document.addEventListener('click', function(event) {
            if (!sectionNav.contains(event.target)) {
                sectionNav.classList.remove('active');
            }
        });
    });
} else {
    sectionNav.style.display = "none"
}