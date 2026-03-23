document.addEventListener('DOMContentLoaded', function() {

  // Reveal
  const obs = new IntersectionObserver(e => e.forEach(el => {
    if (el.isIntersecting) el.target.classList.add('on');
  }), { threshold: 0.1 });
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const t = document.querySelector(a.getAttribute('href'));
      if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  // Swiper galerie À propos
  new Swiper('.apropos-swiper', {
    loop: true,
    grabCursor: true,
    pagination: { el: '.swiper-pagination', clickable: true },
  });

  // Swipers page compétences
  new Swiper('.comp-swiper--design', {
    loop: true,
    grabCursor: true,
    pagination: { el: '.swiper-pagination', clickable: true },
  });

  new Swiper('.comp-swiper--event', {
    loop: true,
    grabCursor: true,
    pagination: { el: '.swiper-pagination', clickable: true },
  });

  // Panel mobile
  const burger   = document.getElementById('burger');
  const panel    = document.getElementById('mobile-panel');
  const overlay  = document.getElementById('mobile-overlay');
  const closeBtn = document.getElementById('mobile-panel-close');

  function openPanel() {
    burger.classList.add('open');
    panel.classList.add('open');
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closePanel() {
    burger.classList.remove('open');
    panel.classList.remove('open');
    overlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  if(burger) burger.addEventListener('click', openPanel);
  if(closeBtn) closeBtn.addEventListener('click', closePanel);
  if(overlay) overlay.addEventListener('click', closePanel);

  if(panel) {
    panel.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closePanel);
    });
  }

});