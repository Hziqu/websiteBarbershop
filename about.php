<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haircare - About Us</title>
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


  <body class="text-gray-800">
<!-- NAVBAR -->
<?php include('includes/navbar.php'); ?>

    <!-- Hero Section -->
    <section
      class="relative h-[60vh] bg-[url('images/bg-1.jpg')] bg-cover bg-center flex items-center justify-center"
    >
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="relative z-10 text-center text-white">
        <h1 class="text-4xl font-bold mb-2">About Us</h1>
        <p>
          <a href="index.html" class="text-yellow-400 hover:underline">Home</a> /
          <span>About</span>
        </p>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
      <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center px-6">
        <div
          class="relative h-80 md:h-[400px] bg-[url('images/bg-2.jpg')] bg-cover bg-center rounded-lg shadow-lg flex justify-center items-center"
        >
          <a
            href="https://vimeo.com/45830194"
            class="w-16 h-16 bg-yellow-500 text-white rounded-full flex justify-center items-center text-2xl"
          >
            ▶
          </a>
        </div>

        <div>
          <h2 class="text-yellow-600 uppercase tracking-wide mb-3">About Us</h2>
          <h3 class="text-3xl font-bold mb-6">
            Welcome To Haircare A Hair Salon
          </h3>
          <p class="mb-4">
            But nothing the copy said could convince her and so it didn’t take
            long until a few insidious Copy Writers ambushed her, made her drunk
            with Longe and Parole and dragged her into their agency...
          </p>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts.
          </p>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-100 text-center">
      <div class="mb-10">
        <p class="text-yellow-600 uppercase font-semibold">Artistic Director</p>
        <h2 class="text-3xl font-bold mb-3">Makeup Artist</h2>
        <p>Far far away, behind the word mountains...</p>
      </div>

      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 px-6">
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <div
            class="h-48 bg-[url('images/stylist-1.jpg')] bg-cover bg-center rounded-lg mb-4"
          ></div>
          <h3 class="font-bold text-lg">Danica Lewis</h3>
          <p class="text-gray-500">Hair Stylist</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <div
            class="h-48 bg-[url('images/stylist-2.jpg')] bg-cover bg-center rounded-lg mb-4"
          ></div>
          <h3 class="font-bold text-lg">Nicole Simon</h3>
          <p class="text-gray-500">Nail Master</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <div
            class="h-48 bg-[url('images/stylist-3.jpg')] bg-cover bg-center rounded-lg mb-4"
          ></div>
          <h3 class="font-bold text-lg">Cloe Meyer</h3>
          <p class="text-gray-500">Director</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <div
            class="h-48 bg-[url('images/stylist-4.jpg')] bg-cover bg-center rounded-lg mb-4"
          ></div>
          <h3 class="font-bold text-lg">Rachel Clinton</h3>
          <p class="text-gray-500">Hair Stylist</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <div
            class="h-48 bg-[url('images/stylist-5.jpg')] bg-cover bg-center rounded-lg mb-4"
          ></div>
          <h3 class="font-bold text-lg">Dave Buff</h3>
          <p class="text-gray-500">Barber</p>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>

  </body>
</html>
