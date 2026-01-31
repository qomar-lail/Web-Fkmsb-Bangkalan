<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fkmab-Bangkalan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-white fixed z-50 w-full flex justify-between text-blue-600 p-4">
        <h2 class="font-bold text-xl font-poppins ms-2">Fkmsb Bangkalan</h2>
        <ul class="hidden md:flex gap-4 text-black font-semibold me-3">
            <li><a href="" class="hover:border-b border-1 border-black transition duration-300 ease-in-out">Struktur</a></li>
            <li><a href="">Proker</a></li>
            <li><a href="">Karya Tulis</a></li>
        </ul>
    </header>
    <main class="relative">
        <?php if(isset($data["notifikasi"])) ?>
        <?= $content ?>
    </main>
</body>
</html>