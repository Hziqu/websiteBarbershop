  window.addEventListener('load', () => {
    AOS.init({
      duration: 100, // durasi animasi (ms)
      once: true,    // kalau mau muncul sekali saja
    });
  });


// Tahun otomatis
document.getElementById("currentYear").textContent = new Date().getFullYear();

// Toggle menu mobile
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    // Toggle tampilan menu
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('flex');

    // Ubah ikon burger jadi X ketika terbuka
    if (mobileMenu.classList.contains('flex')) {
      menuBtn.textContent = '✕';
    } else {
      menuBtn.textContent = '☰';
    }
  });
