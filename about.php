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


  <body class="text-gray-800 bg-amber-50">
<!-- NAVBAR -->
<?php include('includes/navbar.php'); ?>

<!-- Hero Section -->
<section style="background-image: url('./assets/images/bg-1.jpg');" class="z-1 hero relative h-[60vh] bg-cover bg-center w-full flex items-center justify-center text-white">
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


    <!-- About Section -->
    <section class="py-20">
      <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center px-6">
        <div data-aos="fade-up" data-aos-delay="50"
          class="relative h-80 md:h-[400px] bg-[url('assets/images/bg-2.jpg')] bg-cover bg-center rounded-lg shadow-lg flex justify-center items-center"
        >
        </div>

        <div>
          <p data-aos="fade-up" class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">About Us</p>
          <h1 data-aos="fade-up" class="text-7xl font-bold mb-6">
            Welcome To Haircare A Hair Salon
          </h1>
          <p data-aos="fade-up" class="mb-4">
            But nothing the copy said could convince her and so it didn’t take
            long until a few insidious Copy Writers ambushed her, made her drunk
            with Longe and Parole and dragged her into their agency...
          </p>
          <p data-aos="fade-up">
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts.
          </p>
        </div>
      </div>
    </section>

    <!-- PROFIL -->
    <section class="pb-20">
      <div class="max-w-7xl mx-auto px-10 text-center">
        <p data-aos="fade-up" class="text-center text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">PROFIL</p>

        <h2 class="text-4xl font-extrabold pb-4" data-aos="fade-up">PROFIL BARBER</h2>

        <div class=" mt-24 relative" data-aos="fade-up">
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
          </div>
        </div>
      </div>
    </section>

    <section class="w-full">
  <div class="grid md:grid-cols-3 grid-cols-1">
    <!-- Left: For Men -->
    <div data-aos="fade-up" data-aos-delay="50" class="relative flex items-center justify-center bg-cover bg-center h-[90vh]" style="background-image: url('./assets/images/sertivikat1.jpg')">
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10 text-center text-white">
        <h3 class="text-3xl font-semibold mb-3">For Men</h3>
        <a href="#" class="inline-flex items-center gap-2 px-4 py-2/20 hover/30 backdrop-blur-md rounded-lg text-sm font-medium transition">
          See pricing <span class="text-lg">→</span>
        </a>
      </div>
    </div>

    <!-- Center: Haircare Info -->
    <div data-aos="fade-up" class="flex flex-col justify-center items-center text-center px-8 py-10">
      <div class="my-4">
        <span class="flaticon-scissors-in-a-hair-salon-badge text-8xl"></span>
      </div>
      <h1 class="text-4xl font-bold mb-2 flex items-center gap-2">
        Sertifikat
      </h1>
      <h2 class="text-2xl font-semibold mb-4 my-7">Welcome to our Salon</h2>
      <p class="text-gray-600 leading-relaxed mb-6">
        A small river named Duden flows by their place and supplies it with the necessary regelialia. 
        It is a paradisematic country, in which roasted parts of sentences fly into your mouth. 
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
      </p>
      <a href="#" class="px-5 py-2 border border-black text-black font-medium rounded-full hover:bg-black hover:text-white transition">
        Read more
      </a>
    </div>

    <!-- Right: For Women -->
    <div data-aos="fade-up" data-aos-delay="100" class="relative flex items-center justify-center bg-cover bg-center h-[90vh]" style="background-image: url('./assets/images/sertivikat2.jpg')">
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10 text-center text-white">
        <h3 class="text-3xl font-semibold mb-3">For Women</h3>
        <a href="#" class="inline-flex items-center gap-2 px-4 py-2/20 hover/30 backdrop-blur-md rounded-lg text-sm font-medium transition">
          See pricing <span class="text-lg">→</span>
        </a>
      </div>
    </div>
  </div>

  <section style="background: #ebe8de;" class="py-16">
  <div class="container mx-auto px-4">
    <div class="grid lg:grid-cols-2 gap-10 items-center">
      <!-- Left image -->
      <div data-aos="fade-up" data-aos-delay="100" class="w-full h-96 bg-cover bg-center rounded-2xl shadow-md" style="background-image: url('./assets/images/testimony-img.jpg');"></div>

      <!-- Right content -->
      <div class="space-y-6">
        <div>
        <p data-aos="fade-up" class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Testimoni</p>
          <h1 data-aos="fade-up" class="text-6xl uppercase font-bold text-gray-800">Happy Customer</h1>
        </div>

        <div class="relative">
          <div class="space-y-6">
            <!-- Testimony Item -->
            <div class="rounded-2xl transition">
              <p data-aos="fade-up" class="text-gray-600 mb-6">
                potongan disini harga terjangkau kualitas bagus dan pelayanan ramah.
              </p>
              <div data-aos="fade-up" class="flex items-center">
                <div class="w-14 h-14 bg-cover bg-center rounded-full" style="background-image: url('./assets/images/person_1.jpg');"></div>
                <div class="ml-4">
                  <p class="font-semibold text-gray-800">Rava.I</p>
                  <span class="text-sm text-gray-500">Pelajar</span>
                </div>
              </div>
            </div>

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

  </body>
</html>
