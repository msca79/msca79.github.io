/* nav.js – csak a mobilmenühöz kell, asztali dropdown tiszta CSS */

const burger    = document.querySelector('.burger');
const mobileNav = document.getElementById('mobile-nav');
const mobToggles = document.querySelectorAll('.mob-toggle');

/* Burger – mobilmenü ki/be */
burger.addEventListener('click', () => {
  const open = burger.getAttribute('aria-expanded') === 'true';
  burger.setAttribute('aria-expanded', String(!open));
  mobileNav.hidden = open;
});

/* Almenük nyitása mobilon */
mobToggles.forEach(btn => {
  btn.addEventListener('click', () => {
    const open = btn.getAttribute('aria-expanded') === 'true';
    const sub  = btn.nextElementSibling;

    /* zárjuk a többit */
    mobToggles.forEach(other => {
      if (other !== btn) {
        other.setAttribute('aria-expanded', 'false');
        other.nextElementSibling.hidden = true;
      }
    });

    btn.setAttribute('aria-expanded', String(!open));
    sub.hidden = open;
  });
});
