<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fkmab-Bangkalan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="png" href="../app/views/image/logo_fkmsb.png">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

<body class="bg-gray-100">

<header class="bg-white fixed left-0 top-0 z-50 w-full">
    <div class="flex justify-between items-center text-blue-600 p-4">
        <h2 class="font-bold text-xl font-poppins ms-2">Fkmsb Bangkalan</h2>

        <!-- MENU DESKTOP (KODE ASLI TIDAK DISENTUH) -->
        <ul class="hidden md:flex gap-3 text-black font-semibold me-3 text-[#4D4D4D]">
            <li class="bg-black/0 hover:bg-black/30 transition duration-300 easy-in-out px-3 rounded-lg">
                <a href="/PROJECT_FKMSB/public/">Home</a>
            </li>
            <li class="bg-black/0 hover:bg-black/30 transition duration-300 easy-in-out px-3 rounded-lg">
                <a href="/PROJECT_FKMSB/public/struktur">Struktur</a>
            </li>
            <li class="bg-black/0 hover:bg-black/30 transition duration-300 easy-in-out px-3 rounded-lg">
                <a href="/PROJECT_FKMSB/public/proker">Proker</a>
            </li>
            <li class="bg-black/0 hover:bg-black/30 transition duration-300 easy-in-out px-3 rounded-lg">
                <a href="/PROJECT_FKMSB/public/karya">Karya</a>
            </li>
            <li class="bg-black/0 hover:bg-black/30 transition duration-300 easy-in-out px-3 rounded-lg">
                <a href="/PROJECT_FKMSB/public/about">Tentang</a>
            </li>
        </ul>

        <!-- HAMBURGER MOBILE -->
        <button id="menuToggle" class="md:hidden text-2xl text-gray-700 me-3">
            <i class="ri-menu-line"></i>
        </button>
    </div>

    <!-- MENU MOBILE -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t shadow-md">
        <ul class="flex flex-col gap-2 p-4 font-semibold text-[#4D4D4D]">
            <a href="/PROJECT_FKMSB/public/">
                <li class="hover:bg-black/10 transition px-3 py-2 rounded-lg">
                    Home
                </li>
            </a>
            <a href="/PROJECT_FKMSB/public/struktur">
                <li class="hover:bg-black/10 transition px-3 py-2 rounded-lg">
                    Struktur
                </li>
            </a>
            <a href="/PROJECT_FKMSB/public/proker">
                <li class="hover:bg-black/10 transition px-3 py-2 rounded-lg">
                    Proker
                </li>
            </a>
            <a href="/PROJECT_FKMSB/public/karya">
                <li class="hover:bg-black/10 transition px-3 py-2 rounded-lg">
                    Karya
                </li>
            </a>
            <a href="/PROJECT_FKMSB/public/about">
                <li class="hover:bg-black/10 transition px-3 py-2 rounded-lg">
                    Tentang
                </li>
            </a>
        </ul>
    </div>
</header>

<main class="relative text-[#4D4D4D] pt-20 max-w-7xl mx-auto">
    <?php if(!empty($notifikasi) && $notifikasi == true ): ?>
        <div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
            <div class="relative flex flex-col items-center bg-white rounded-xl shadow-sm p-4 w-[180px] text-center">
                <button
                    onclick="this.parentElement.parentElement.remove()"
                    class="absolute top-2 right-2 text-gray-400 hover:text-red-500 transition"
                >✕</button>

                <lottie-player
                    src="/PROJECT_FKMSB/public/animation/sukses.json"
                    background="transparent"
                    speed="1"
                    style="width:80px;height:80px;"
                    autoplay>
                </lottie-player>

                <p class="text-sm font-semibold text-green-600 mt-2">
                    Sukses
                </p>
            </div>
        </div>
    <?php endif ?>

    <?= $content ?>
</main>

<footer class="bg-slate-900 text-slate-300">
    <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-3">
        <p class="text-sm">
            © <?= date('Y') ?> <span class="font-semibold text-white">FKMSB Bangkalan</span>
        </p>
        <div class="flex gap-4 text-xl">
            <a href="#" class="hover:text-blue-400 transition">
                <i class="ri-instagram-line"></i>
            </a>
            <a href="#" class="hover:text-blue-400 transition">
                <i class="ri-youtube-line"></i>
            </a>
            <a href="#" class="hover:text-blue-400 transition">
                <i class="ri-facebook-line"></i>
            </a>
        </div>
    </div>
</footer>


</body>
</html>
