<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haircare | Gallery</title>
  </head>

<style>
.hero {
        background-image: url('images/bg-1.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
}
.overlay {
        background-color: rgba(0, 0, 0, 0.5);
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

<!-- Hero Section -->
    <section style="background-image: url('./assets/images/bg-1.jpg');" class="z-1 hero relative h-[60vh] bg-cover bg-center w-full flex items-center justify-center text-white">
      <div class="overlay absolute inset-0 bg-black/35"></div>
      <div class="relative z-10 text-center">
        <h2 class="text-4xl font-bold mb-2">Galeri</h2>
        <p class="text-gray-200">
          <a href="index.php" class="hover:text-yellow-400">Home</a>
          <span class="mx-2">›</span>
          Galeri
        </p>
      </div>
    </section>

    <!-- Gallery Grid -->
    <section class="bg-amber-50">
      <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <!-- Card -->
        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-1.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Beard"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Stylist</span>
            <h3 class="text-lg font-bold">Beard</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-2.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Haircut"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Beauty</span>
            <h3 class="text-lg font-bold">Haircut</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-3.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Hairstylist"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Beauty</span>
            <h3 class="text-lg font-bold">Hairstylist</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-4.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Haircut"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Beauty</span>
            <h3 class="text-lg font-bold">Haircut</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-5.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Makeup"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Beauty</span>
            <h3 class="text-lg font-bold">Makeup</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-6.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Model"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Fashion</span>
            <h3 class="text-lg font-bold">Model</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-7.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Makeup"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Beauty</span>
            <h3 class="text-lg font-bold">Makeup</h3>
          </div>
        </div>

        <div class="relative group overflow-hidden shadow-md">
          <img
            src="assets/images/work-8.jpg"
            class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
            alt="Makeup"
          />
          <div
            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-center items-center text-white"
          >
            <span class="text-sm">Beauty</span>
            <h3 class="text-lg font-bold">Makeup</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>
