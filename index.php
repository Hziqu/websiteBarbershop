<?php 
include "config/connection.php";

if (isset($_POST['submit'])) {
    $nama   = mysqli_real_escape_string($conn, $_POST['nama']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']);

    // Hindari nama tabel 'user' (reserved word)
    $query = "INSERT INTO users (nama, email, alamat, no_telp)
              VALUES ('$nama', '$email', '$alamat', '$no_telp')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi berhasil!'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "');</script>";
    }
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barberkahh | MENENG ANTENG BALI GANTENG</title>

    <link rel="icon" href="">

    <!-- Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/flaticon.css" />
    <link rel="stylesheet" href="assets/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    
  </head>
  <body class="text-text-dark antialiased bg-amber-50">

    <!-- NAVBAR -->
    <?php include('includes/navbar.php'); ?>

    <!-- HEADER -->
    <header class="relative bg-primary-dark">
      <div class="z-1 mx-auto sm:px-10 px-2 pt-15 bg-[url('./assets/images/bg-2.jpg')] bg-cover bg-center w-full h-[37rem] relative justify-center">
        <div class="absolute inset-0 bg-black opacity-60"></div>

        <div class="flex flex-col lg:flex-row justify-between sm:px-7 px-0 items-center relative z-10">
          <!-- Form -->
          <div data-aos="fade-right" class="border-white border p-6 sm:p-8 rounded-2xl sm:rounded-4xl w-full max-w-sm">
            <h2 class="text-white text-xl font-medium mb-4">Pesan Sekarang</h2>
            <form action="index.php" method="POST" class="space-y-4">
              <input type="text" name="nama" placeholder="Nama" class="w-full p-3 bg-white text-gray-400 placeholder-gray-400 border border-gray-700 focus:outline-none focus:ring-1 focus:ring-secondary-gold rounded-sm">
              <input type="email" name="email" placeholder="Email" class="w-full p-3 text-white placeholder-gray-400 border border-gray-100 focus:outline-none focus:ring-1 focus:ring-secondary-gold rounded-sm">
              <input type="text" name="alamat" placeholder="Alamat" class="w-full p-3 text-white placeholder-gray-400 border border-gray-100 focus:outline-none focus:ring-1 focus:ring-secondary-gold rounded-sm">

              <div class="w-full flex flex-col sm:flex-row items-center justify-center gap-4">
                <input type="tel" name="no_telp" placeholder="No. Telp" class="w-full sm:w-[67%] p-3 text-white placeholder-gray-400 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-secondary-gold rounded-md">
                <button class="px-6 py-3 text-yellow-600 hover:text-white border-2 border-yellow-600 font-semibold hover:bg-yellow-600 hover:text-primary-dark transition duration-300 rounded-md w-full sm:w-auto" type="submit" name="submit">
                  Kirim
                </button>
              </div>
            </form>
          </div>

          <!-- Hero Text -->
          <div data-aos="fade-left" class="max-w-xl w-full md:w-80 sm:w-full z-10 pb-10 lg:pb-0 text-center lg:text-right">
            <h1 class="ttext-3xl sm:text-4xl lg:text-8xl font-extrabold leading-tight text-white mt-10 lg:mt-0">
              MENENG ANTENG BALI <span class="text-yellow-600">GANTENG</span>
            </h1>
          </div>
        </div>
      </div>
    </header>

    <!-- SERVICE & MAP -->
    <section  class="bg-neutral-800 py-20">
      <div data-aos="fade-up" class="max-w-7xl mx-auto sm:px-16 px-2 grid grid-cols-1 lg:grid-cols-3 gap-12 text-white items-center justify-center">

        <!-- Deskripsi -->
        <div class="lg:col-span-1 pl-6">
          <h2 class="text-3xl font-bold mb-4">PELAYANAN DI <br class="hidden sm:block"> LUAR EKSPEKTASI</h2>
          <p class="text-gray-400 mb-6 text-sm">
            Komitmen kami melampaui sekadar potongan rambut biasa.
            Kami menawarkan pengalaman layanan yang menyeluruh, memastikan setiap pelanggan pulang dengan perasaan segar dan penuh percaya diri.
            Mulai dari potongan klasik hingga gaya modern, para ahli kami memberikan hasil terbaik dengan kualitas tinggi.
          </p>
          <a href="#" class="px-6 py-2 text-yellow-600 hover:text-white border-2 border-yellow-600 font-semibold hover:bg-yellow-600 transition duration-300 inline-block">
            Baca Selengkapnya
          </a>
        </div>

        <!-- Google Map -->
        <div data-aos="fade-up" class="relative sm:mx-5 mx-0 lg:col-span-1 w-full h-64 rounded-lg overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.718723552628!2d110.50347760000001!3d-7.3853846999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7b041f25f8bd%3A0x9d889a3b1b995017!2sBARBERKAH%20NOBOTENGAH!5e0!3m2!1sen!2sid!4v1760095726551!5m2!1sen!2sid" 
            class="absolute w-full h-full border-0" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <!-- Kontak -->
        <div class="lg:col-span-1 space-y-8 lg:text-right text-left px-10">
          <div>
            <div class="flex items-center justify-start lg:justify-end space-x-4 mb-2">
              <i class="fa-solid fa-location-dot text-xl"></i>
              <h3 class="text-xl font-semibold">LOKASI</h3>
            </div>
            <p class="text-gray-400 text-sm">
              Nobo Tengah Noborejo <br>Argomulyo Salatiga Rt 1 Rw 8
            </p>
          </div>

          <div>
            <div class="flex items-center justify-start lg:justify-end space-x-4 mb-2">
              <i class="fa-solid fa-phone text-xl"></i>
              <h3 class="text-xl font-semibold">KONTAK KAMI</h3>
            </div>
            <p class="text-2xl ">083152794153</p>
            <p class="text-gray-400 text-sm">info@BarberkahNoboTengah.com</p>
          </div>
        </div>
      </div>
    </section>

    <!-- MODEL POTONGAN -->
    <section class="bg-section-light py-20">
      <div class="max-w-7xl mx-auto sm:px-20 px-10">
        <div class="mb-12">
          <h2 data-aos="fade-up" class="text-4xl font-extrabold text-gray-800 tracking-wide">MODEL <br>POTONGAN</h2>
          <p class="text-gray-600 max-w-md mt-2" data-aos="fade-up">
            Potongan rambut di barbershop lebih dari sekadar merapikan; ini adalah seni yang menggabungkan presisi teknis dengan ekspresi gaya pribadi.
          </p>
        </div>

        <!-- Scroll Galeri -->
        <div class="relative mb-20" data-aos="fade-up">
          <div class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 scrollbar-hide">
            <div class="flex-none w-60 sm:w-72 aspect-[4/5] bg-gray-300 rounded-lg overflow-hidden snap-center">
              <img src="assets/images/work-1.jpg" alt="Work 1" class="w-full h-full object-cover">
            </div>
            <div class="flex-none w-60 sm:w-72 aspect-[4/5] bg-gray-300 rounded-lg overflow-hidden snap-center">
              <img src="assets/images/work-2.jpg" alt="Work 2" class="w-full h-full object-cover">
            </div>
            <div class="flex-none w-60 sm:w-72 aspect-[4/5] bg-gray-300 rounded-lg overflow-hidden snap-center">
              <img src="assets/images/work-3.jpg" alt="Work 3" class="w-full h-full object-cover">
            </div>
            <div class="flex-none w-60 sm:w-72 aspect-[4/5] bg-gray-300 rounded-lg overflow-hidden snap-center">
              <img src="assets/images/work-4.jpg" alt="Work 4" class="w-full h-full object-cover">
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 py-10 lg:grid-cols-2 gap-16">
          <!-- Testimoni -->
          <div data-aos="fade-up" class="relative p-8 bg-white shadow-xl rounded-lg sm:h-40 h-full border-l-4">
            <p class="italic text-lg text-gray-700 mb-6">
              "Harganya terjangkau, kualitasnya bagus, dan pelayanannya sangat ramah!"
            </p>
            <p class="font-bold text-base">Rava.I</p>
            <div class="absolute bottom-4 right-4 text-4xl opacity-50 font-serif">”</div>
          </div>

          <!-- Harga -->
          <div>
            <h2 data-aos="fade-up" class="text-3xl font-bold text-gray-800 mb-6">HARGA KAMI</h2>
            <div class="space-y-4">
              <div data-aos="fade-up" class="flex justify-between items-end border-b border-gray-300 pb-2">
                <span class="text-lg font-medium">UNDERCUT</span>
                <span class="text-xl font-bold text-gray-800">10K</span>
              </div>
              <div data-aos="fade-up" class="flex justify-between items-end border-b border-gray-300 pb-2">
                <span class="text-lg font-medium">CROP</span>
                <span class="text-xl font-bold text-gray-800">10K</span>
              </div>
              <div data-aos="fade-up" class="flex justify-between items-end border-b border-gray-300 pb-2">
                <span class="text-lg font-medium">FRENCH</span>
                <span class="text-xl font-bold text-gray-800">10K</span>
              </div>
              <div data-aos="fade-up" class="flex justify-between items-end border-b border-gray-300 pb-2">
                <span class="text-lg font-medium">TAPER/FADE</span>
                <span class="text-xl font-bold text-gray-800">10K</span>
              </div>
              <div data-aos="fade-up" class="flex justify-between items-end border-b border-gray-300 pb-2">
                <span class="text-lg font-medium">HAIRCUT</span>
                <span class="text-xl font-bold text-gray-800">10K</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROFIL -->
    <section class="py-15 bg-white">
      <div class="max-w-7xl mx-auto px-10 text-center">
        <h2 class="text-4xl font-extrabold pb-4" data-aos="fade-up">PROFIL BARBER</h2>

        <div class=" bg-white mt-24 relative" data-aos="fade-up">
          <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl -mt-24 flex items-center justify-center">
            <img src="assets/images/person_4.jpg" alt="Foto Barber" class="h-full w-full rounded-full object-cover">
          </div>

          <div class="mt-6 text-center" data-aos="fade-up">
            <h1 class="text-4xl font-medium text-gray-700">Nama Barber <span class="font-light text-gray-500">27</span></h1>
            <p class="font-light text-gray-600 mt-3">Bucharest, Romania</p>
            <p class="mt-2 text-gray-500">Solution Manager - Creative Tim Officer</p>
            <p class="mt-2 text-gray-500">University of Computer Science</p>
          </div>

          <div class="mt-12 flex flex-col justify-center" data-aos="fade-up">
            <p class="text-gray-600 text-center font-light">
              Saya adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti obcaecati veniam eaque...
            </p>
            <button class="text-indigo-500 py-2 px-4 font-medium mt-4">Show more</button>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>


    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>

  </body>
  </html>
