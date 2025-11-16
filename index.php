<?php 
// =======================
//  DATABASE CONNECTION
// =======================
include "config/connection.php";


// =======================
//  FORM CONNECT
// =======================
if (isset($_POST['submit'])) {

    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $alamat   = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_telp  = mysqli_real_escape_string($conn, $_POST['no_telp']);

    $query = "
        INSERT INTO users (nama, email, alamat, no_telp)
        VALUES ('$nama', '$email', '$alamat', '$no_telp')
    ";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Registrasi berhasil!');
                window.location='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan: " . mysqli_error($conn) . "');
              </script>";
    }
}


// =======================
//  LAYANAN CONNECT
// =======================
$result = $conn->query("SELECT * FROM harga ORDER BY id_harga ASC");


// =======================
//  MODEL POTONG CONNECT
// =======================
$result1 = $conn->query("SELECT * FROM galeri LIMIT 8");


// =======================
//  TESTIMONI CONNECT
// =======================
$testimoni = $conn->query("SELECT * FROM testimoni ORDER BY id_testi ASC");


// =======================
//  PROFIL CONNECT
// =======================
$queryProfil = mysqli_query($conn, "SELECT * FROM profil LIMIT 1");
$profil      = mysqli_fetch_assoc($queryProfil);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Barberkahh</title>

    <!-- icon -->
    <link rel="icon" href="assets/images/icon-logo.png">


    <style>
        .slide { display: none; }
        .slide.active { display: block; animation: fadeIn .5s ease; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-6px); }
            40%, 80% { transform: translateX(6px); }
        }

        .shake { animation: shake 0.4s ease-in-out; }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/flaticon.css" />
    <link rel="stylesheet" href="assets/aos.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body class="text-text-dark antialiased bg-amber-50">

<!-- ===========================
        NAVBAR
=========================== -->
<?php include('includes/navbar.php'); ?>


<!-- ===========================
        HEADER
=========================== -->
<header class="relative bg-primary-dark">

    <div class="z-1 mx-auto sm:px-10 px-2 pt-15 bg-[url('./assets/images/bg-3.jpg')] bg-cover bg-center w-full h-[37rem] relative justify-center">
        <div class="absolute inset-0 bg-black opacity-60"></div>

        <div class="flex flex-col lg:flex-row justify-between sm:px-7 px-0 items-center relative z-10">
            
            <!-- FORM -->
            <div data-aos="fade-right" class="border-white border p-6 sm:p-8 rounded-2xl sm:rounded-4xl w-full max-w-sm">
                <h2 class="text-white text-xl font-medium mb-4">Pesan Sekarang</h2>

                <form action="index.php" method="POST" id="pesanForm" class="space-y-4" novalidate>

                    <div>
                        <input type="text" name="nama" id="nama" placeholder="Nama"
                            class="peer w-full p-3 bg-white text-gray-400 placeholder-gray-400 border border-gray-700 focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 rounded-sm transition-all duration-200">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                    <div>
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="peer w-full p-3 text-white placeholder-gray-400 border border-gray-100 focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 rounded-sm transition-all duration-200">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                    <div>
                        <input type="text" name="alamat" id="alamat" placeholder="Alamat"
                            class="peer w-full p-3 text-white placeholder-gray-400 border border-gray-100 focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 rounded-sm transition-all duration-200">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>
                    </div>

                    <div class="w-full flex flex-col sm:flex-row items-center justify-center gap-4">
                        
                        <input type="tel" id="no_telp" name="no_telp" placeholder="No. Telp"
                            class="w-full sm:w-[67%] p-3 text-white placeholder-gray-400 border border-gray-300 focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 rounded-md transition-all duration-200">
                        <p class="text-red-500 text-sm mt-1 hidden"></p>

                        <button
                            class="px-6 py-3 text-yellow-600 hover:text-white border-2 border-yellow-600 font-semibold hover:bg-yellow-600 hover:text-primary-dark transition duration-300 rounded-md w-full sm:w-auto"
                            type="submit" name="submit">
                            Kirim
                        </button>
                    </div>

                </form>
            </div>

            <!-- HERO TEXT -->
            <div data-aos="fade-left" class="max-w-xl w-full md:w-80 sm:w-full z-10 pb-10 lg:pb-0 text-center lg:text-right">
                <h1 class="ttext-3xl sm:text-4xl lg:text-8xl font-extrabold leading-tight text-white mt-10 lg:mt-0">
                    MENENG ANTENG BALI <span class="text-yellow-600">GANTENG</span>
                </h1>
            </div>

        </div>
    </div>

</header>



<!-- ===========================
        SERVICE & MAP
=========================== -->
<section class="bg-neutral-800 py-20">
    <div data-aos="fade-up" class="max-w-7xl mx-auto sm:px-16 px-2 grid grid-cols-1 lg:grid-cols-3 gap-12 text-white items-center justify-center">

        <!-- DESKRIPSI -->
        <div class="lg:col-span-1 pl-6">
            <h2 class="text-3xl font-bold mb-4">PELAYANAN KAMI <br class="hidden sm:block"> SEDIAKAN</h2>
            <p class="text-gray-400 mb-6 text-sm">
                Kami menawarkan pengalaman layanan yang menyeluruh, memastikan setiap pelanggan pulang dengan perasaan segar dan penuh percaya diri.
                Mulai dari potongan klasik hingga gaya modern.
            </p>
            <a href="services.php"
                class="px-6 py-2 text-yellow-600 hover:text-white border-2 border-yellow-600 font-semibold hover:bg-yellow-600 transition duration-300 inline-block">
                Baca Selengkapnya
            </a>
        </div>

        <!-- MAP -->
        <div data-aos="fade-up" data-aos-delay="500"
            class="relative sm:mx-5 mx-0 lg:col-span-1 w-full h-64 rounded-lg overflow-hidden">

            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.718723552628!2d110.50347760000001!3d-7.3853846999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7b041f25f8bd%3A0x9d889a3b1b995017!2sBARBERKAH%20NOBOTENGAH!5e0!3m2!1sen!2sid!4v1760095726551!5m2!1sen!2sid"
                class="absolute w-full h-full border-0"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

        <!-- KONTAK -->
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

                <p class="text-2xl">083152794153</p>
                <p class="text-gray-400 text-sm">info@BarberkahNoboTengah.com</p>
            </div>

        </div>

    </div>
</section>



<!-- ===========================
        MODEL POTONGAN
=========================== -->
<section class="bg-section-light py-20">
    <div class="max-w-7xl mx-auto sm:px-20 px-10">

        <!-- JUDUL -->
        <div class="mb-12">
            <h2 data-aos="fade-up" class="text-4xl font-extrabold text-gray-800 tracking-wide">
                MODEL <br> POTONGAN
            </h2>
            <p class="text-gray-600 max-w-md mt-2" data-aos="fade-up">
                Potongan rambut di barbershop lebih dari sekadar merapikan; ini adalah seni yang menggabungkan presisi teknis dengan ekspresi gaya pribadi.
            </p>
        </div>

        <!-- GALERY SCROLL -->
        <div class="relative mb-20" data-aos="fade-up">
            <div class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 scrollbar-hide">

                <?php foreach ($result1 as $row): ?>
                    <div class="flex-none w-60 sm:w-72 aspect-[4/5] bg-gray-300 rounded-lg overflow-hidden snap-center">
                        <img src="assets/images/<?php echo $row['gambar']; ?>" 
                             alt="model rambut"
                             class="w-full h-full object-cover">
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <!-- TESTIMONI + HARGA -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 py-10" data-aos="fade-up">

            <!-- ===========================
                    TESTIMONI
            =========================== -->
            <section class="w-full bg-yellow-600 rounded-2xl p-4">

                <!-- NAV -->
                <div class="flex justify-end pt-3">
                    <div class="flex items-center">
                        <button id="prevBtn" aria-label="Sebelumnya"></button>
                        <button id="nextBtn" aria-label="Berikutnya"></button>
                    </div>
                </div>

                <!-- SLIDER -->
                <div class="relative">
                    <div id="slides">

                        <?php foreach ($testimoni as $row): ?>

                            <article class="slide bg-yellow-600 p-8 rounded-xl">
                                <div class="flex gap-4 items-center">
                                    <img 
                                        src="assets/images/<?php echo $row['avatar']; ?>"
                                        alt="avatar"
                                        class="w-16 h-16 rounded-full object-cover">

                                    <div>
                                        <h3 class="font-semibold"><?php echo $row['nama']; ?></h3>
                                        <p class="text-xs text-gray-100"><?php echo $row['role']; ?></p>
                                    </div>
                                </div>

                                <blockquote class="mt-4 text-gray-900 leading-relaxed">
                                    “<?php echo $row['pesan']; ?>”
                                </blockquote>

                                <div class="mt-4 flex items-center gap-1 text-yellow-500">
                                    <?php for ($i = 0; $i < $row['bintang']; $i++): ?>
                                        ★
                                    <?php endfor; ?>
                                </div>
                            </article>

                        <?php endforeach; ?>

                    </div>
                </div>
            </section>


            <!-- ===========================
                    HARGA
            =========================== -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">HARGA KAMI</h2>

                <div class="space-y-4">

                    <?php foreach ($result as $row): ?>
                        <div class="flex justify-between items-end border-b border-gray-300 pb-2">
                            <span class="text-lg font-medium"><?php echo $row['nama']; ?></span>
                            <span class="text-xl font-bold text-gray-800"><?php echo $row['harga']; ?></span>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>

    </div>
</section>



<!-- ===========================
        PROFIL
=========================== -->
<section class="py-15 bg-white">
    <div class="max-w-7xl mx-auto px-10 text-center">

        <p data-aos="fade-up"
            class="text-yellow-600 text-[0.7rem] uppercase font-bold tracking-wide mb-3">Profil</p>

        <h2 class="text-4xl font-extrabold pb-4" data-aos="fade-up">PROFIL BARBER</h2>

        <div class="bg-white mt-24 relative" data-aos="fade-up">

            <!-- FOTO -->
            <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl -mt-24 flex items-center justify-center">
                <img src="assets/images/<?php echo $profil['foto']; ?>" 
                     alt="Foto Barber"
                     class="h-full w-full rounded-full object-cover">
            </div>

            <!-- IDENTITAS -->
            <div class="mt-6 text-center" data-aos="fade-up">
                <h1 class="text-4xl font-medium text-gray-700"><?php echo $profil['nama']; ?></h1>
                <p class="mt-2 text-gray-500"><?php echo $profil['tanggal_lahir']; ?></p>
                <p class="font-light text-gray-600 mt-1"><?php echo $profil['keahlian']; ?></p>
            </div>

            <!-- DESKRIPSI -->
            <div class="mt-7 px-38 flex flex-col justify-center" data-aos="fade-up">
                <p class="mt-2 text-gray-600 text-center font-light">
                    <?php echo $profil['deskripsi']; ?>
                </p>
            </div>

        </div>

    </div>
</section>



<!-- ===========================
        FOOTER
=========================== -->
<?php include('includes/footer.php'); ?>


<script src="assets/js/main.js"></script>
<script src="assets/js/aos.js"></script>

<script>
// =======================
//  SLIDER
// =======================
document.addEventListener("DOMContentLoaded", function () {

    const slides = Array.from(document.querySelectorAll('.slide'));
    const indicators = Array.from(document.querySelectorAll('.indicator'));
    let current = 0;

    const show = (index) => {
        slides.forEach((s,i) => s.classList.toggle('active', i === index));
        indicators.forEach((ind,i) => ind.classList.toggle('bg-gray-800', i === index));
        current = index;
    };

    document.getElementById('prevBtn')?.addEventListener('click', () =>
        show((current - 1 + slides.length) % slides.length)
    );

    document.getElementById('nextBtn')?.addEventListener('click', () =>
        show((current + 1) % slides.length)
    );

    indicators.forEach(ind =>
        ind.addEventListener('click', e =>
            show(Number(e.currentTarget.dataset.index))
        )
    );

    setInterval(() =>
        show((current + 1) % slides.length), 5000
    );



    // =======================
    //  VALIDASI FORM
    // =======================
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
                } else if (
                    f.id === "email" &&
                    !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
                ) {
                    fieldValid = false;
                    errorText.textContent = "Email tidak valid";
                }

                if (!fieldValid) {
                    valid = false;
                    input.classList.add("border-red-500", "shake");
                    input.classList.remove("border-gray-700");
                    errorText.classList.remove("hidden");
                    setTimeout(() => input.classList.remove("shake"), 500);
                } else {
                    input.classList.remove("border-red-500");
                    input.classList.add("border-gray-700");
                    errorText.classList.add("hidden");
                }
            });

            if (!valid) e.preventDefault();
        });
    }
});


// =======================
//  FIXED SLIDER STARTUP
// =======================
document.addEventListener('DOMContentLoaded', function () {

    const slides     = Array.from(document.querySelectorAll('#slides .slide'));
    const indicators = Array.from(document.querySelectorAll('.indicator'));
    const prevBtn    = document.getElementById('prevBtn');
    const nextBtn    = document.getElementById('nextBtn');

    if (!slides.length) return;

    let activeIndex = 0;

    function showIndex(i) {
        if (i < 0) i = slides.length - 1;
        if (i >= slides.length) i = 0;
        activeIndex = i;

        slides.forEach((s, idx) => {
            s.classList.toggle('active', idx === activeIndex);
        });

        indicators.forEach((ind, idx) => {
            ind.classList.toggle('active', idx === activeIndex);
        });
    }

    indicators.forEach((ind) =>
        ind.addEventListener('click', function () {
            const idx = parseInt(this.dataset.index, 10);
            if (!isNaN(idx)) showIndex(idx);
        })
    );

    if (prevBtn) prevBtn.addEventListener('click', () => showIndex(activeIndex - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => showIndex(activeIndex + 1));

    showIndex(0);
});
</script>

</body>
</html>
