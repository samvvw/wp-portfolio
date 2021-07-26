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

const skillsMenu = document.querySelectorAll('.skills-menu .menu-item');

skillsMenu.forEach((skill) => {
  const svg = document.createElement('div');
  svg.classList.add('arrow-wrapper');
  svg.innerHTML = `
      <svg width="50" height="40" viewBox="0 0 50 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_dd)">
        <line x1="11" y1="20" x2="30" y2="20" stroke="#F2F2F2" stroke-width="4" stroke-linecap="round"/>
        <path d="M39.5 20.0933L40.5958 21.1176C41.1347 20.541 41.1347 19.6455 40.5958 19.0689L39.5 20.0933ZM29.9042 28.1622C29.3385 28.7674 29.3705 29.7166 29.9757 30.2823C30.5809 30.848 31.5301 30.816 32.0958 30.2108L29.9042 28.1622ZM32.0958 9.97569C31.5301 9.37049 30.5809 9.33848 29.9757 9.9042C29.3705 10.4699 29.3385 11.4191 29.9042 12.0243L32.0958 9.97569ZM38.4042 19.0689L29.9042 28.1622L32.0958 30.2108L40.5958 21.1176L38.4042 19.0689ZM29.9042 12.0243L38.4042 21.1176L40.5958 19.0689L32.0958 9.97569L29.9042 12.0243Z" fill="#F2F2F2"/>
        </g>
        <defs>
        <filter id="filter0_dd" x="0" y="0.5" width="50" height="39.1865" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feMorphology radius="2" operator="dilate" in="SourceAlpha" result="effect1_dropShadow"/>
        <feOffset/>
        <feGaussianBlur stdDeviation="3.5"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.94902 0 0 0 0 0.94902 0 0 0 0 0.94902 0 0 0 0.53 0"/>
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feMorphology radius="1" operator="dilate" in="SourceAlpha" result="effect2_dropShadow"/>
        <feOffset/>
        <feGaussianBlur stdDeviation="2"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.654902 0 0 0 0 0.94902 0 0 0 0 0.921569 0 0 0 1 0"/>
        <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow"/>
        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape"/>
        </filter>
        </defs>
      </svg>
    `;
  skill.insertBefore(svg, skill.childNodes[0]);
});
