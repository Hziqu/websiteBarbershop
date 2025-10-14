<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>services</title>

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

  </head>
  <body class="bg-amber-50 font-[Poppins] text-gray-800">

    <!-- NAVBAR -->
    <?php include('includes/navbar.php'); ?>

    <!-- Hero Section -->
    <section style="background-image: url('./assets/images/bg-1.jpg');" class="z-1 hero relative h-[60vh] bg-cover bg-center w-full flex items-center justify-center text-white">
      <div class="overlay absolute inset-0 bg-black/35"></div>
      <div class="relative z-10 text-center">
        <h2 class="text-4xl font-bold mb-2">Services</h2>
        <p class="text-gray-200">
          <a href="index.php" class="hover:text-yellow-400">Home</a>
          <span class="mx-2">›</span>
          Service
        </p>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-amber-50">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Services Menu</h2>
        <p class="text-gray-500 mb-10">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 justify-center mx-20">
          <div class="border-gray-300 p-6 border rounded-lg hover:shadow-lg transition">
            <div class="text-5xl text-yellow-600 mb-4"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
            <h3 class="text-xl font-semibold mb-2">Haircut & Styling</h3>
            <p class="text-gray-600">A small river named Duden flows by their place and supplies.</p>
          </div>
          <div class="border-gray-300 p-6 border rounded-lg hover:shadow-lg transition">
            <div class="text-5xl text-yellow-600 mb-4"><span class="flaticon-beard"></span></div>
            <h3 class="text-xl font-semibold mb-2">Beard</h3>
            <p class="text-gray-600">A small river named Duden flows by their place and supplies.</p>
          </div>
          <div class="border-gray-300 p-6 border rounded-lg hover:shadow-lg transition">
            <div class="text-5xl text-yellow-600 mb-4"><span class="flaticon-beauty-products"></span></div>
            <h3 class="text-xl font-semibold mb-2">Makeup</h3>
            <p class="text-gray-600">A small river named Duden flows by their place and supplies.</p>
          </div>
          <div class="border-gray-300 p-6 border rounded-lg hover:shadow-lg transition">
            <div class="text-5xl text-yellow-600 mb-4"><span class="flaticon-healthy-lifestyle-logo"></span></div>
            <h3 class="text-xl font-semibold mb-2">Body Treatment</h3>
            <p class="text-gray-600">A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Booking Section -->
    <section style="background: #ebe8de;" class="py-20 relative">
      <div class="container mx-auto text-center mb-10">
        <h2 class="text-3xl font-bold mb-2">Make an Appointment</h2>
        <p class="text-gray-500">Far far away, behind the word mountains...</p>
        <p class="text-lg text-yellow-600 font-semibold mt-4">Call Us: 012-3456-7890</p>
      </div>
      <div class="container mx-auto max-w-3xl p-8 rounded-xl">
        <form action="#" class="space-y-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <input type="text" placeholder="Name" class="border-yellow-600 border-2 p-3 rounded w-full">
            <input type="text" placeholder="Email" class="border-yellow-600 border-2 p-3 rounded w-full">
            <input type="text" placeholder="Date" class="border-yellow-600 border-2 p-3 rounded w-full">
            <input type="text" placeholder="Time" class="border-yellow-600 border-2 p-3 rounded w-full">
            <select class="border-yellow-600 border-2 p-3 rounded w-full">
              <option>Professional Makeup</option>
              <option>Manicure Pedicure</option>
              <option>Body Treatment</option>
              <option>Haircut & Coloring</option>
            </select>
            <input type="text" placeholder="Phone" class="border-yellow-600 border-2 p-3 rounded w-full">
          </div>
          <textarea rows="4" placeholder="Message" class="border-yellow-600 border-2 p-3 rounded w-full"></textarea>
          <div class="flex justify-center">
            <button type="submit" class="bg-yellow-600 hover:bg-orange-600 text-white px-6 py-3 rounded font-semibold">Make an Appointment</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-16">
      <div class="container mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Our Prices</h2>
        <p class="text-gray-500">Far far away, behind the word mountains...</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 container px-24 mx-auto justify-center text-center">
        <div class="border py-6 rounded-lg hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">Hair Style</h3>
          <p class="text-yellow-600 text-lg mb-4">$50.00 / session</p>
          <ul class="text-gray-600 mb-4 space-y-1">
            <li style="background: #ebe8de;" class="w-full">Hair Dryer</li>
            <li>Hair Coloring</li>
            <li style="background: #ebe8de;" class="w-full">Hair Cut</li>
            <li>Hair Dresser</li>
            <li style="background: #ebe8de;" class="w-full">Hair Spa</li>
          </ul>
          <button class="bg-yellow-600 hover:bg-orange-600 text-white px-4 py-2 rounded">Get Offer</button>
        </div>
        <div class="border py-6 rounded-lg hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">Manicure Pedicure</h3>
          <p class="text-yellow-600 text-lg mb-4">$34.50 / session</p>
          <ul class="text-gray-600 mb-4 space-y-1">
            <li style="background: #ebe8de;" class="w-full">Manicure</li>
            <li>Pedicure</li>
            <li style="background: #ebe8de;" class="w-full">Coloring</li>
            <li>Nails</li>
            <li style="background: #ebe8de;" class="w-full">Nail Cut</li>
          </ul>
          <button class="bg-yellow-600 hover:bg-orange-600 text-white px-4 py-2 rounded">Get Offer</button>
        </div>
        <div class="border-2 border-yellow-600 py-6 rounded-lg hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">Makeup</h3>
          <p class="text-yellow-600 text-lg mb-4">$54.50 / session</p>
          <ul class="text-gray-600 mb-4 space-y-1">
            <li style="background: #ebe8de;" class="w-full">Makeup</li>
            <li>Professional Makeup</li>
            <li style="background: #ebe8de;" class="w-full">Blush On</li>
            <li>Facial Massage</li>
            <li style="background: #ebe8de;" class="w-full">Facial Spa</li>
          </ul>
          <button class="bg-yellow-600 hover:bg-orange-600 text-white px-4 py-2 rounded">Get Offer</button>
        </div>
        <div class="border py-6 rounded-lg hover:shadow-lg transition">
          <h3 class="text-xl font-semibold mb-2">Body Treatment</h3>
          <p class="text-yellow-600 text-lg mb-4">$89.50 / session</p>
          <ul class="text-gray-600 mb-4 space-y-1">
            <li style="background: #ebe8de;" class="w-full">Massage</li>
            <li>Spa</li>
            <li style="background: #ebe8de;" class="w-full">Foot Spa</li>
            <li>Body Spa</li>
            <li style="background: #ebe8de;" class="w-full">Relaxing</li>
          </ul>
            <button class="bg-yellow-600 hover:bg-orange-600 text-white px-4 py-2 rounded">Get Offer</button>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>


  </body>
</html>
