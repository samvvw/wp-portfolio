const openBtn = document.querySelector('#open-menu-btn');
const closeBtn = document.querySelector('#close-menu-btn');

const drawer = document.querySelector('.main-menu-wrapper');

openBtn.addEventListener('click', () => {
  drawer.classList.toggle('menu-open');
});
closeBtn.addEventListener('click', () => {
  drawer.classList.toggle('menu-open');
});
