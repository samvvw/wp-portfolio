const openBtn = document.querySelector('#open-menu-btn');
const closeBtn = document.querySelector('#close-menu-btn');

const drawer = document.querySelector('.main-menu-wrapper');

openBtn.addEventListener('click', () => {
  drawer.classList.toggle('menu-open');
  if (drawer.classList.contains('menu-close')) {
    drawer.classList.toggle('menu-close');
  }
});
closeBtn.addEventListener('click', () => {
  drawer.classList.toggle('menu-close');
  drawer.classList.toggle('menu-open');
});

window.addEventListener('resize', () => {
  if (window.innerWidth >= 700) {
    drawer.classList.remove('menu-close');
    drawer.classList.remove('menu-open');
  }
});
