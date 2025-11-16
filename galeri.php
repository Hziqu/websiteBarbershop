<?php
// =======================
//  DATABASE CONNECTION
// =======================
include "config/connection.php";

// Ambil data galeri (8 terbaru)
$query  = "SELECT * FROM galeri ORDER BY id_galeri DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri | Barberkahh</title>

    <!-- icon -->
    <link rel="icon" href="assets/images/icon-logo.png">

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
    </style>

    <!-- =======================
            TAILWIND & ASSETS
    ======================= -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/flaticon.css" />
    <link rel="stylesheet" href="assets/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

</head>


<body class="text-gray-800 bg-amber-50">

    <!-- =======================
            NAVBAR
    ======================= -->
    <?php include('includes/navbar.php'); ?>


    <!-- =======================
            HERO SECTION
    ======================= -->
    <section style="background-image: url('./assets/images/bg-4.jpg');"
        class="hero relative h-[60vh] bg-cover bg-center w-full flex items-center justify-center text-white">

        <div class="overlay absolute inset-0 bg-black/35"></div>

        <div data-aos="fade-up" class="relative z-10 text-center">
            <h2 class="text-4xl font-bold mb-2">Galeri</h2>

            <p class="text-gray-200">
                <a href="index.php" class="hover:text-yellow-400">Home</a>
                <span class="mx-2">›</span>
                Galeri
            </p>
        </div>

    </section>



    <!-- =======================
            GALERI GRID
    ======================= -->
    <section class="bg-amber-50">

        <hr>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 py-10 px-3">

            <?php
            foreach ($result as $row):
            ?>

                <div data-aos="fade-up" class="relative group overflow-hidden shadow-md">

                    <img src="assets/images/<?php echo $row['gambar']; ?>"
                        class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110"
                        alt="Galeri">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 
                                transition-all duration-300 flex flex-col justify-center items-center text-white">

                        <span class="text-sm">Barbershop</span>
                        <h3 class="text-lg font-bold">Gaya Rambut</h3>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- =======================
            FOOTER
    ======================= -->
    <?php include('includes/footer.php'); ?>


    <!-- =======================
            SCRIPTS
    ======================= -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>

</body>

</html>
