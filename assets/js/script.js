/* ============================
   DOM ELEMENTS
   ============================ */
const header = document.getElementById('header');
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');
const scrollTopBtn = document.getElementById('scrollTop');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const galleryItems = document.querySelectorAll('.gallery-item');
const contactForm = document.getElementById('contactForm');

let currentImageIndex = 0;
const galleryImages = [];

galleryItems.forEach((item) => {
  const img = item.querySelector('img');
  galleryImages.push(img.src);
});

/* ============================
   STICKY HEADER
   ============================ */
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }

  // Scroll to top visibility
  if (scrollTopBtn) {
    if (window.scrollY > 500) {
      scrollTopBtn.classList.add('visible');
    } else {
      scrollTopBtn.classList.remove('visible');
    }
  }

  // Active nav link on scroll
  updateActiveNav();
});

/* ============================
   MOBILE MENU
   ============================ */
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  nav.classList.toggle('active');
  document.body.classList.toggle('nav-open');
});

// Close mobile menu on link click
nav.querySelectorAll('.nav-list > li > a').forEach((link) => {
  link.addEventListener('click', (e) => {
    // Handle dropdown toggle on mobile
    const parent = link.parentElement;
    if (parent.classList.contains('menu-item-has-children') && window.innerWidth <= 768) {
      e.preventDefault();
      parent.classList.toggle('open');
      return;
    }
    closeMobileMenu();
  });
});

// Close on overlay click
document.addEventListener('click', (e) => {
  if (
    nav.classList.contains('active') &&
    !nav.contains(e.target) &&
    !hamburger.contains(e.target)
  ) {
    closeMobileMenu();
  }
});

function closeMobileMenu() {
  hamburger.classList.remove('active');
  nav.classList.remove('active');
  document.body.classList.remove('nav-open');
}

/* ============================
   DROPDOWN (mobile click for sub-links)
   ============================ */
document.querySelectorAll('.sub-menu a').forEach((link) => {
  link.addEventListener('click', () => {
    closeMobileMenu();
  });
});

/* ============================
   ACTIVE NAV LINK ON SCROLL
   ============================ */
function updateActiveNav() {
  const sections = document.querySelectorAll('section[id]');
  const scrollPos = window.scrollY + 120;

  sections.forEach((section) => {
    const top = section.offsetTop;
    const height = section.offsetHeight;
    const id = section.getAttribute('id');

    if (scrollPos >= top && scrollPos < top + height) {
      document.querySelectorAll('.nav-list > li').forEach((item) => {
        item.classList.remove('current-menu-item');
        const link = item.querySelector(':scope > a');
        if (link && link.getAttribute('href') === '#' + id) {
          item.classList.add('current-menu-item');
        }
      });
    }
  });
}

/* ============================
   SCROLL TO TOP
   ============================ */
if (scrollTopBtn) {
  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ============================
   GALLERY LIGHTBOX
   ============================ */
if (lightbox) {
  galleryItems.forEach((item) => {
    item.addEventListener('click', () => {
      currentImageIndex = parseInt(item.dataset.index);
      openLightbox(currentImageIndex);
    });
  });

  function openLightbox(index) {
    lightboxImg.src = galleryImages[index];
    lightboxImg.alt = galleryItems[index].querySelector('img').alt;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
  }

  function prevImage() {
    currentImageIndex =
      (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    lightboxImg.src = galleryImages[currentImageIndex];
  }

  function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    lightboxImg.src = galleryImages[currentImageIndex];
  }

  document.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
  document.querySelector('.lightbox-prev').addEventListener('click', prevImage);
  document.querySelector('.lightbox-next').addEventListener('click', nextImage);

  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') prevImage();
    if (e.key === 'ArrowRight') nextImage();
  });
}

/* ============================
   SWIPER (Partners)
   ============================ */
if (typeof Swiper !== 'undefined' && document.querySelector('.partners-swiper')) {
  new Swiper('.partners-swiper', {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      480: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      1024: { slidesPerView: 5 },
    },
  });
}

/* ============================
   SCROLL ANIMATIONS
   ============================ */
const fadeElements = document.querySelectorAll('.fade-in');

const observerOptions = {
  threshold: 0.15,
  rootMargin: '0px 0px -40px 0px',
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

fadeElements.forEach((el) => observer.observe(el));

/* ============================
   COUNTER ANIMATION
   ============================ */
const counterElements = document.querySelectorAll('.figure-number[data-count]');

if (counterElements.length > 0) {
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counterElements.forEach((el) => counterObserver.observe(el));
}

function animateCounter(element) {
  const target = parseInt(element.dataset.count);
  const suffix = element.dataset.suffix || '';
  const duration = 2000;
  const startTime = performance.now();

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);

    // Ease-out cubic
    const eased = 1 - Math.pow(1 - progress, 3);
    const current = Math.round(eased * target);

    element.textContent = current + suffix;

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

/* ============================
   CONTACT FORM
   ============================ */
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // Simple validation
    let isValid = true;
    const required = contactForm.querySelectorAll('[required]');

    required.forEach((field) => {
      field.classList.remove('error');
      if (!field.value.trim()) {
        field.classList.add('error');
        isValid = false;
      }
    });

    // Email validation
    const email = contactForm.querySelector('#email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.value && !emailRegex.test(email.value)) {
      email.classList.add('error');
      isValid = false;
    }

    if (isValid) {
      // Simulate submission
      const btn = contactForm.querySelector('button[type="submit"]');
      const originalText = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-check"></i> Message envoyé !';
      btn.style.background = '#38a169';
      btn.style.borderColor = '#38a169';
      btn.disabled = true;

      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        btn.style.borderColor = '';
        btn.disabled = false;
        contactForm.reset();
      }, 3000);
    }
  });

  // Remove error on input
  contactForm.querySelectorAll('input, select, textarea').forEach((field) => {
    field.addEventListener('input', () => {
      field.classList.remove('error');
    });
  });
}

/* ============================
   CALLBACK FORM (sidebar)
   ============================ */
const callbackForm = document.getElementById('callbackForm');

if (callbackForm) {
  callbackForm.addEventListener('submit', (e) => {
    e.preventDefault();

    let isValid = true;
    const required = callbackForm.querySelectorAll('[required]');

    required.forEach((field) => {
      field.classList.remove('error');
      if (!field.value.trim()) {
        field.classList.add('error');
        isValid = false;
      }
    });

    if (isValid) {
      const btn = callbackForm.querySelector('button[type="submit"]');
      const originalText = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-check"></i> Demande envoyée !';
      btn.style.background = '#38a169';
      btn.style.borderColor = '#38a169';
      btn.disabled = true;

      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        btn.style.borderColor = '';
        btn.disabled = false;
        callbackForm.reset();
      }, 3000);
    }
  });

  callbackForm.querySelectorAll('input, select, textarea').forEach((field) => {
    field.addEventListener('input', () => {
      field.classList.remove('error');
    });
  });
}
