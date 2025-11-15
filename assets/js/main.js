  window.addEventListener('load', () => {
    AOS.init({
      duration: 800, // durasi animasi (ms)
      once: true,    // kalau mau muncul sekali saja
    });
  });


// Tahun otomatis
document.getElementById("currentYear").textContent = new Date().getFullYear();

const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.contains('translate-y-0');

    if (!isOpen) {
      // Buka menu dengan animasi slide + fade
      mobileMenu.classList.remove('-translate-y-full', 'opacity-0');
      mobileMenu.classList.add('translate-y-0', 'opacity-100');
      menuBtn.textContent = '✕';
    } else {
      // Tutup menu
      mobileMenu.classList.remove('translate-y-0', 'opacity-100');
      mobileMenu.classList.add('-translate-y-full', 'opacity-0');
      menuBtn.textContent = '☰';
    }
  });

    // Simple slider logic
    const slides = Array.from(document.querySelectorAll('.slide'));
    const indicators = Array.from(document.querySelectorAll('.indicator'));
    let current = 0;
    const show = (index) => {
      slides.forEach((s,i) => s.classList.toggle('active', i === index));
      indicators.forEach((ind,i) => ind.classList.toggle('bg-gray-800', i === index));
      current = index;
    };

    document.getElementById('prevBtn').addEventListener('click', () => show((current - 1 + slides.length) % slides.length));
    document.getElementById('nextBtn').addEventListener('click', () => show((current + 1) % slides.length));

    indicators.forEach(ind => ind.addEventListener('click', e => show(Number(e.currentTarget.dataset.index))));

    // Autoplay (optional) — comment out if not wanted
    let autoplay = true;
    if (autoplay) {
      setInterval(() => show((current + 1) % slides.length), 5000);
    }
  