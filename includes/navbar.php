<!-- NAVBAR -->
  <nav class="sticky top-0 z-50 bg-neutral-800 shadow-lg px-6 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="text-white text-xl font-bold tracking-widest justify-center text-center flex items-center"><a href="index.php" class="justify-center text-center flex items-center gap-3"><span class="flaticon-scissors-in-a-hair-salon-badge text-4xl"></span>Barberkahh</a></div>

    <!-- Menu Links (Desktop) -->
    <div class="hidden lg:flex space-x-8 text-sm text-white">
      <a href="index.php" class="hover:text-yellow-600 transition duration-300">HOME</a>
      <a href="services.php" class="hover:text-yellow-600 transition duration-300">LAYANAN</a>
      <a href="galeri.php" class="hover:text-yellow-600 transition duration-300">GALERI</a>
      <a href="about.php" class="hover:text-yellow-600 transition duration-300">TENTANG KAMI</a>
      <a href="#" class="hover:text-yellow-600 transition duration-300">KONTAK</a>
    </div>

    <!-- Hamburger Button -->
    <button id="menu-btn" class="lg:hidden text-white text-2xl focus:outline-none">
      ☰
    </button>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="z-2 hidden fixed inset-0 pt-24 bg-white text-gray-800 flex-col items-start px-8 py-10 space-y-6 shadow-lg h-[28rem]">

    <a href="index.php" class="text-yellow-600 font-semibold text-lg">HOME</a>
    <a href="#" class="hover:text-yellow-600 text-lg">LAYANAN</a>
    <a href="#" class="hover:text-yellow-600 text-lg">GALERI</a>
    <a href="#" class="hover:text-yellow-600 text-lg">TENTANG KAMI</a>
    <a href="#" class="hover:text-yellow-600 text-lg">KONTAK</a>
  </div>