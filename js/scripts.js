document.addEventListener('DOMContentLoaded', () => {
  // =========================
  // 1) Countdown (Grand Opening)
  // =========================
  const targetDate = new Date('2025-12-05T18:00:00').getTime();
  const countdownContainer = document.querySelector('.countdown-container');

  function updateCountdown() {
    const now = Date.now();
    const distance = targetDate - now;

    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');

    if (distance <= 0) {
      if (countdownContainer) {
        countdownContainer.innerHTML = "<h1 class='countdownh1'>Closed Beta Started!</h1>";
      }
      clearInterval(countdown);
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (daysEl) daysEl.innerText = String(days).padStart(2, '0');
    if (hoursEl) hoursEl.innerText = String(hours).padStart(2, '0');
    if (minutesEl) minutesEl.innerText = String(minutes).padStart(2, '0');
    if (secondsEl) secondsEl.innerText = String(seconds).padStart(2, '0');
  }

  const countdown = setInterval(updateCountdown, 1000);
  updateCountdown();

  // =========================
  // 2) Navbar + Sub-nav (scroll/hover)
  // =========================
  const navbar = document.querySelector('.navbar');
  const subNav = document.querySelector('.sub-nav');
  let lastScrollTop = 0;
  const threshold = 70;

  function handleScroll() {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (navbar) {
      if (currentScroll > threshold) navbar.classList.add('scrolled');
      else navbar.classList.remove('scrolled');
    }

    if (subNav) {
      if (currentScroll > lastScrollTop && currentScroll > threshold) {
        subNav.classList.add('hidden');
      } else if (currentScroll < lastScrollTop && currentScroll <= threshold) {
        subNav.classList.remove('hidden');
      }
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  if (navbar && subNav) {
    navbar.addEventListener('mouseenter', () => {
      if (window.scrollY > threshold) subNav.classList.remove('hidden');
    });
    navbar.addEventListener('mouseleave', () => {
      if (window.scrollY > threshold) subNav.classList.add('hidden');
    });
    subNav.addEventListener('mouseenter', () => subNav.classList.remove('hidden'));
    subNav.addEventListener('mouseleave', () => {
      if (window.scrollY > threshold) subNav.classList.add('hidden');
    });
  }

  // =========================
  // 3) Navbar toggle (hamburger -> fullscreen menu)
  // =========================
  window.toggleMenu = function toggleMenu(hamburger) {
    if (!hamburger) return;
    hamburger.classList.toggle('active');
    const menu = document.getElementById('fullscreenMenu');
    if (menu) menu.classList.toggle('active');
  };

  // =========================
  // 4) Vote Modal
  // =========================
  const voteButton = document.querySelector('.vote-button');
  const voteModal = document.getElementById('voteModal');
  const closeModal = document.querySelector('.close-modal');

  if (voteButton && voteModal) {
    voteButton.addEventListener('click', () => {
      voteModal.style.display = 'block';
    });
  }

  if (closeModal && voteModal) {
    closeModal.addEventListener('click', () => {
      voteModal.style.display = 'none';
    });
  }

  if (voteModal) {
    window.addEventListener('click', (event) => {
      if (event.target === voteModal) voteModal.style.display = 'none';
    });
  }

  // =========================
  // 5) Radio menu -> conteúdo em abas
  // =========================
  const radios = document.querySelectorAll('.radio-menu input[type="radio"]');
  const contents = document.querySelectorAll('.content');

  function showContentByRadio(radioEl) {
    contents.forEach((c) => (c.style.display = 'none'));
    const active = document.getElementById(`${radioEl.id}-content`);
    if (active) active.style.display = 'block';
  }

  if (radios.length) {
    radios.forEach((radio) => {
      radio.addEventListener('change', () => showContentByRadio(radio));
    });

    // Inicial: tenta usar #feature1-content. Se não existir, usa o radio marcado.
    const defaultContent = document.getElementById('feature1-content');
    if (defaultContent) {
      contents.forEach((c) => (c.style.display = 'none'));
      defaultContent.style.display = 'block';
    } else {
      const checked = Array.from(radios).find((r) => r.checked) || radios[0];
      if (checked) showContentByRadio(checked);
    }
  }
});
