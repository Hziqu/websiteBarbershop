<?php
// =======================
//  DATABASE CONNECTION
// =======================
include "config/connection.php";

// profil connec
$queryProfil = mysqli_query($conn, "SELECT * FROM profil LIMIT 1");
$profil = mysqli_fetch_assoc($queryProfil);

// testimoni connec
$testimoni = mysqli_query($conn, "SELECT * FROM testimoni ORDER BY id_testi ASC");

// about connec
$about = mysqli_query($conn, "SELECT * FROM about_section WHERE id_about = 1");
$abt = mysqli_fetch_assoc($about);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami | Barberkahh</title>

    <!-- icon -->
    <link rel="icon" href="assets/images/icon-logo.png">

  </head>

<style>
    .hero {
        background-image: url('images/bg-4.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
    }
    .slide { 
        display: none; 
        padding: 20px;
        border-radius: 12px;
    }
    .slide.active {
        display: block; 
        animation: fadeIn .4s ease; 
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(6px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

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

<body class="text-gray-800 bg-amber-50">

<!-- NAVBAR -->
<?php include('includes/navbar.php'); ?>

<!-- HERO -->
<section style="background-image: url('./assets/images/bg-4.jpg');" class="z-1 hero relative h-[60vh] bg-cover bg-center w-full flex items-center justify-center text-white">
  <div class="overlay absolute inset-0 bg-black/35"></div>
  <div data-aos="fade-up" class="relative z-10 text-center">
    <h2 class="text-4xl font-bold mb-2">Tentang Kami</h2>
    <p class="text-gray-200">
      <a href="index.php" class="hover:text-yellow-400">Home</a>
      <span class="mx-2">›</span>
      Tentang Kami
    </p>
  </div>
</section>

<!-- ABOUT -->
<section class="py-20">
  <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center px-6">

    <div data-aos="fade-up" data-aos-delay="50"
      class="relative h-80 md:h-[400px] bg-[url('assets/images/<?= $abt['image']; ?>')] 
      bg-cover bg-center rounded-lg shadow-lg">
    </div>

    <div>
      <p data-aos="fade-up" class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Tentang Kami</p>
      <h1 data-aos="fade-up" class="text-5xl font-bold mb-6"><?= $abt['title_about']; ?></h1>
      <p data-aos="fade-up"><?= $abt['paragraph']; ?></p>
    </div>

  </div>
</section>

<!-- PROFIL -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-10 text-center">

    <p data-aos="fade-up" class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Profil</p>
    <h2 data-aos="fade-up" class="text-4xl font-extrabold pb-4">PROFIL BARBER</h2>

    <div class="bg-white mt-24 relative" data-aos="fade-up">

      <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl -mt-24">
        <img src="assets/images/<?= $profil['foto']; ?>" class="h-full w-full rounded-full object-cover" />
      </div>

      <div class="mt-6 text-center">
        <h1 class="text-4xl font-medium text-gray-700"><?= $profil['nama']; ?></h1>
        <p class="mt-2 text-gray-500"><?= $profil['tanggal_lahir']; ?></p>
        <p class="mt-1 text-gray-600"><?= $profil['keahlian']; ?></p>
      </div>

      <div class="mt-7 px-10">
        <p class="text-gray-600 text-center"><?= $profil['deskripsi']; ?></p>
      </div>

    </div>

  </div>
</section>

<!-- SERTIFIKAT -->
<section class="w-full">
  <div class="grid md:grid-cols-3 grid-cols-1">

    <div data-aos="fade-up" class="relative h-[90vh] bg-cover bg-center" style="background-image: url('./assets/images/sertivikat1.jpg')">
      <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <div data-aos="fade-up" class="flex flex-col justify-center items-center text-center px-10 py-10">
      <span class="flaticon-scissors-in-a-hair-salon-badge text-7xl mb-6"></span>
      <h1 class="text-4xl font-bold mb-4">Sertifikat</h1>
      <p class="text-gray-600">
        Setiap potongan rambut adalah hasil dari keahlian dan dedikasi. Kami memiliki sertifikasi resmi di bidang Tata Kecantikan Rambut dan Penataan Pangkas Rambut, diakui oleh Badan Nasional Sertifikasi Profesi (BNSP) dan LPK ARVIAN Salatiga. Dengan kompetensi ini, kami siap memberikan layanan potong rambut yang rapi, presisi, dan penuh gaya.
      </p>
    </div>

    <div data-aos="fade-up" class="relative h-[90vh] bg-cover bg-center" style="background-image: url('./assets/images/sertivikat2.jpg')">
      <div class="absolute inset-0 bg-black/40"></div>
    </div>

  </div>
</section>

<!-- TESTIMONI -->
<section style="background: #ebe8de;" class="py-16">
  <div class="container mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 items-center">

      <div class="w-full h-96 bg-cover bg-center rounded-2xl shadow-md" 
           data-aos="fade-up" 
           style="background-image: url('./assets/images/testimoni-kastemer.jpg')">
      </div>

      <div class="space-y-6">

        <div>
          <p class="text-yellow-600 text-[0.7rem] uppercase font-bold mb-3" data-aos="fade-up">Testimoni</p>
          <h1 class="text-6xl uppercase font-bold text-gray-800" data-aos="fade-up">Pendapat Kastemer</h1>
        </div>

        <div class="relative">
          <div class="flex justify-end mb-3">
            <button id="prevBtn"></button>
            <button id="nextBtn"></button>
          </div>

          <div id="slides">

            <?php 
            $first = true;
            mysqli_data_seek($testimoni, 0);
            while ($t = mysqli_fetch_assoc($testimoni)):
            ?>

            <article class="slide <?= $first ? 'active' : '' ?> " data-aos="fade-up">
              <div class="flex gap-4 items-center">
                <img src="assets/images/<?= $t['avatar']; ?>" class="w-16 h-16 rounded-full object-cover" />
                <div>
                  <h3 class="font-semibold"><?= $t['nama']; ?></h3>
                  <p class="text-xs text-gray-500"><?= $t['role']; ?></p>
                </div>
              </div>

              <blockquote class="mt-4 text-gray-700 leading-relaxed">
                "<?= $t['pesan']; ?>"
              </blockquote>

              <div class="mt-3 text-yellow-500">
                <?php for ($i = 0; $i < $t['bintang']; $i++) echo "★"; ?>
              </div>
            </article>

            <?php 
            $first = false;
            endwhile;
            ?>

          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php include('includes/footer.php'); ?>

<script src="assets/js/main.js"></script>
<script src="assets/js/aos.js"></script>

<script>
// === SIMPLE SLIDER ===
const slides = Array.from(document.querySelectorAll('.slide'));
let current = 0;

function showSlide(i) {
  slides.forEach((s, idx) => s.classList.toggle('active', idx === i));
  current = i;
}

document.getElementById('prevBtn').addEventListener('click', () => {
  showSlide((current - 1 + slides.length) % slides.length);
});

document.getElementById('nextBtn').addEventListener('click', () => {
  showSlide((current + 1) % slides.length);
});

// autoplay (opsional)
setInterval(() => {
  showSlide((current + 1) % slides.length);
}, 6000);
</script>

</body>
</html>
