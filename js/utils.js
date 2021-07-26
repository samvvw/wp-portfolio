const logos = document.querySelectorAll('.logo-svg-wrapper path');

const pathLs = [];

logos.forEach((logo) => {
  pathLs.push(logo.getTotalLength());
});

if (
  (window.location.pathname === '/PortfolioSamVillegas/' &&
    window.location.search.length <= 0) ||
  window.location.pathname === '/'
) {
  logos.forEach((logo, i) => {
    logo.style.strokeDasharray = `${pathLs[i]}px`;
    logo.style.strokeDashoffset = `${pathLs[i]}px`;
    logo.style.fill = `transparent`;
  });
} else {
  logos.forEach((logo) => {
    logo.style.fill = '#A7F2EB';
  });
}
logos.forEach((logo) => {
  logo.style.stroke = `white`;
  logo.style.strokeWidth = `1px`;
});

function setStroke(percentage, index) {
  const stroke = pathLs[index] - (percentage / 100) * pathLs[index];
  return stroke;
}

window.addEventListener('load', () => {
  if (
    (window.location.pathname === '/PortfolioSamVillegas/' &&
      window.location.search.length <= 0) ||
    window.location.pathname === '/'
  ) {
    logos.forEach((logo, i) => {
      setTimeout(() => {
        logo.style.transition =
          'stroke-dashoffset 1s cubic-bezier(.34,-1.61,.55,1.83) 0s, fill 2s ease-in-out 2s, stroke-dasharray 3s ease-out 1s, opacity 1s ease-out';
        logo.style.fill = '#A7F2EB';
        // logo.style.strokeDasharray = '0';
        logo.style.strokeDashoffset = `${setStroke(100, i)}px`;
      }, 300 * i);
    });
    const svgWrapper = document.querySelector('.logo-svg-wrapper');
    const siteTagline = document.querySelector('.site-tagline');
    const spanLine = document.querySelector('#over-line');
    const customLogoWrapper = document.querySelector('.logo-wrapper-custom h1');
    const delay = 3500;
    setTimeout(() => {
      svgWrapper.style.transition = 'opacity .01s ease-out';
      svgWrapper.style.opacity = 0;
    }, delay);
    setTimeout(() => {
      svgWrapper.style.opacity = 1;
    }, delay + 200);
    setTimeout(() => {
      svgWrapper.style.opacity = 0.5;
    }, delay + 400);
    setTimeout(() => {
      svgWrapper.style.opacity = 1;
    }, delay + 500);
    setTimeout(() => {
      svgWrapper.style.opacity = 0.5;
      spanLine.style.opacity = 1;
      siteTagline.style.opacity = 0.5;
      siteTagline.style.textShadow =
        '0px 0px 2px #a7f2eb, 0px 0px 4px rgba(242, 242, 242, 0.53)';
    }, delay + 600);
    setTimeout(() => {
      svgWrapper.style.opacity = 1;
      spanLine.style.opacity = 0.5;
      siteTagline.style.opacity = 0;
    }, delay + 700);
    setTimeout(() => {
      svgWrapper.style.opacity = 0;
      spanLine.style.opacity = 1;
      siteTagline.style.opacity = 0.9;
    }, delay + 900);
    setTimeout(() => {
      svgWrapper.style.display = 'none';
      customLogoWrapper.style.opacity = 1;
      siteTagline.style.opacity = 1;
      siteTagline.style.textShadow = 'none';
    }, delay + 950);
  } else {
    const svgWrapper = document.querySelector('.logo-svg-wrapper');
    const siteTagline = document.querySelector('.site-tagline');
    const spanLine = document.querySelector('#over-line');
    const customLogoWrapper = document.querySelector('.logo-wrapper-custom h1');
    svgWrapper.style.display = 'none';
    customLogoWrapper.style.opacity = 1;
    siteTagline.style.opacity = 1;
    spanLine.style.opacity = 1;
  }
});
