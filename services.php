<?php
// ==============================
// DATABASE CONNECTION
// ==============================
include "config/connection.php";

// ==============================
// FORM CONNECTION (Insert User)
// ==============================
if (isset($_POST['submit'])) {
    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $alamat   = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_telp  = mysqli_real_escape_string($conn, $_POST['no_telp']);

    $query = "INSERT INTO users (nama, email, alamat, no_telp)
              VALUES ('$nama', '$email', '$alamat', '$no_telp')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi berhasil!'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "');</script>";
    }
}

// ==============================
// QUERY LAYANAN
// ==============================
$queryLayanan = mysqli_query($conn, "SELECT * FROM layanan");

// ==============================
// QUERY NOMOR TELEPON
// ==============================
$queryNo_tel = mysqli_query($conn, "SELECT * FROM no_tel LIMIT 1");
$no_tel      = mysqli_fetch_assoc($queryNo_tel);

// ==============================
// QUERY PROMO
// ==============================
$queryPromo = mysqli_query($conn, "SELECT * FROM promo");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan | Barberkahh</title>

    <!-- icon -->
    <link rel="icon" href="assets/images/icon-logo.png">

    <style>
        .hero {
            background-image: url('assets/images/bg-4.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-6px); }
            40%, 80% { transform: translateX(6px); }
        }

        .shake {
            animation: shake 0.4s ease-in-out;
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

    <!-- ============================
            NAVBAR
    ============================ -->
    <?php include('includes/navbar.php'); ?>


    <!-- ============================
            HERO SECTION
    ============================ -->
    <section style="background-image: url('./assets/images/bg-4.jpg');"
        class="z-1 hero relative h-[60vh] bg-cover bg-center w-full flex items-center justify-center text-white">

        <div class="overlay absolute inset-0 bg-black/35"></div>

        <div data-aos="fade-up" class="relative z-10 text-center">
            <h2 class="text-4xl font-bold mb-2">Layanan</h2>

            <p class="text-gray-200">
                <a href="index.php" class="hover:text-yellow-400">Home</a>
                <span class="mx-2">›</span>
                Layanan
            </p>
        </div>
    </section>


    <!-- ============================
            SERVICES SECTION
    ============================ -->
    <section class="py-16 bg-amber-50">
        <div class="container mx-auto text-center">

            <p data-aos="fade-up" class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Layanan</p>
            <h2 data-aos="fade-up" class="text-3xl font-bold mb-4">Layanan Kami</h2>

            <p data-aos="fade-up" class="text-gray-500 mb-10">
                Nikmati berbagai layanan terbaik kami yang dirancang untuk menjaga penampilan dan rasa percaya diri Anda.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 justify-center lg:mx-20 mx-5">

                <?php foreach ($queryLayanan as $row): ?>
                    <div data-aos="fade-up" class="border-gray-300 p-6 border rounded-lg hover:shadow-lg transition">

                        <div class="text-5xl text-yellow-600 mb-4">
                            <span class="<?= $row['icon']; ?>"></span>
                        </div>

                        <h3 class="text-xl font-semibold mb-2"><?= $row['judul']; ?></h3>
                        <p class="text-gray-600"><?= $row['deskripsi']; ?></p>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- ============================
            BOOKING SECTION
    ============================ -->
    <section style="background: #ebe8de;" class="py-20 relative">

        <div class="container mx-auto text-center mb-10">

            <p data-aos="fade-up" class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Pemesanan</p>
            <h2 data-aos="fade-up" class="text-3xl font-bold mb-2">Pesan Sekarang</h2>

            <p data-aos="fade-up" class="text-gray-500">
                Pesan sekarang atau langsung datang, kami siap layani dengan gaya terbaikmu.
            </p>

            <p data-aos="fade-up" class="text-lg text-yellow-600 font-semibold mt-4">
                No Tel. <?= $no_tel['nomor_tel']; ?>
            </p>

        </div>


        <div class="container mx-auto max-w-5xl p-8 rounded-xl">

            <form data-aos="fade-up" action="services.php" method="POST" id="pesanForm" class="space-y-4" novalidate>

                <div class="grid gap-4">

                    <div>
                        <input type="text" placeholder="Name" name="nama" id="nama"
                            class="peer border-yellow-600 border-2 p-3 rounded w-full">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                    <div>
                        <input type="text" placeholder="Email" name="email" id="email"
                            class="peer border-yellow-600 border-2 p-3 rounded w-full">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                    <div>
                        <input type="text" placeholder="Alamat" name="alamat" id="alamat"
                            class="peer border-yellow-600 border-2 p-3 rounded w-full">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                    <div>
                        <input type="tel" placeholder="No. Telp" name="no_telp" id="no_telp"
                            class="peer border-yellow-600 border-2 p-3 rounded w-full">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                </div>

                <div class="flex justify-center mt-15">
                    <button type="submit" name="submit"
                        class="bg-yellow-600 hover:bg-yellow-900 text-white px-6 py-3 rounded font-semibold">
                        Pesan Sekarang
                    </button>
                </div>

            </form>

        </div>
    </section>


    <!-- ============================
            PROMO SECTION
    ============================ -->
    <section class="py-16">

        <div data-aos="fade-up" class="container mx-auto text-center mb-12">
            <p class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Promo</p>
            <h2 class="text-3xl font-bold mb-4">Promo Menarik</h2>
            <p class="text-gray-500">Beberapa Promo Menarik Yang Tersedia</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 container lg:px-24 px-5 mx-auto text-center">

            <?php while ($promo = mysqli_fetch_assoc($queryPromo)): ?>

                <?php
                $items = [];
                for ($i = 1; $i <= 5; $i++) {
                    if (!empty($promo["nama_item$i"])) {
                        $items[] = $promo["nama_item$i"];
                    }
                }
                ?>

                <div data-aos="fade-up"
                    class="border border-yellow-600 hover:border-yellow-900 text-yellow-600 hover:text-yellow-900 py-6 rounded-lg hover:shadow-lg transition">

                    <h3 class="text-[1rem] font-semibold mb-8"><?= $promo['nama_promo']; ?></h3>

                    <p class="text-2xl text-yellow-900 font-bold mb-4">
                        <?= $promo['harga']; ?>
                        <span class="text-gray-500 text-[0.7rem]">/ session</span>
                    </p>

                    <ul class="text-gray-500 mb-4 space-y-1">
                        <?php foreach ($items as $index => $item): ?>
                            <li class="w-full py-3 <?= $index % 2 === 0 ? 'bg-[#ebe8de]' : ''; ?>">
                                <?= $item; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>

            <?php endwhile; ?>

        </div>
    </section>


    <!-- ============================
            FOOTER
    ============================ -->
    <?php include('includes/footer.php'); ?>


    <!-- ============================
            JS
    ============================ -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>

    <script>
        // ============================
        // FORM VALIDASI FRONTEND
        // ============================
        const form = document.getElementById("pesanForm");

        if (form) {
            form.addEventListener("submit", function (e) {
                let valid = true;

                const fields = [
                    { id: "nama", message: "" },
                    { id: "email", message: "" },
                    { id: "alamat", message: "" },
                    { id: "no_telp", message: "" },
                ];

                fields.forEach((f) => {
                    const input = document.getElementById(f.id);
                    const errorText = input.nextElementSibling;
                    const value = input.value.trim();
                    let fieldValid = true;

                    if (!value) {
                        fieldValid = false;
                        errorText.textContent = f.message;
                    } else if (f.id === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        fieldValid = false;
                        errorText.textContent = "Email tidak valid";
                    }

                    if (!fieldValid) {
                        valid = false;
                        input.classList.add("border-red-500", "shake");
                        errorText.classList.remove("hidden");
                        setTimeout(() => input.classList.remove("shake"), 500);
                    } else {
                        input.classList.remove("border-red-500");
                        errorText.classList.add("hidden");
                    }
                });

                if (!valid) {
                    e.preventDefault();
                }
            });
        }
    </script>

</body>

</html>
