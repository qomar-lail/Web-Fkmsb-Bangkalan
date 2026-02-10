<!-- HERO -->
<div class="flex flex-col md:flex-row-reverse items-center gap-4 p-8 h-auto"
    data-aos="fade-up">

    <div class="gambar w-full md:w-1/2 ms-0 md:ms-10 flex justify-center"
        data-aos="zoom-in"
        data-aos-delay="150">
        <img class="w-full max-w-md h-auto object-contain rounded transition duration-300 hover:scale-105"
            src="../app/views/image/img_main.png"
            alt="logo-fkmsb">
    </div>

    <div class="w-full md:w-1/2"
        data-aos="fade-left"
        data-aos-delay="300">
        <h1 class="text-4xl font-bold text-center md:text-left text-gray-800">
            Forum Komunikasi <span class="text-blue-600">Mahasiswa Santri</span> Banyuanyar
        </h1>
        <p class="text-sm md:text-base text-center md:text-left mt-3">
            <?= $deskripsi ?>
        </p>
        <div class="flex flex-column md:flex-row w-full gap-2 justify-center md:justify-start items-center mt-10">
            <p>Mari bergabung bersama kami</p>
            <a href="/PROJECT_FKMSB/public/gabung"
            class="bg-blue-600 rounded-2xl py-1 px-4 text-white hover:bg-blue-800 shadow-sm transition duration-300">
                Gabung
            </a>
        </div>
    </div>
</div>

<!-- INFO CARD -->
<section class="bg-white flex-col gap-2 p-8 relative z-10">

    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-2 md:-mt-24">

            <div class="p-6 bg-white rounded-xl shadow-xl hover:scale-105 transition"
                data-aos="fade-up" data-aos-delay="100">
                <h3 class="font-semibold">Struktur</h3>
                <p>Susunan kepengurusan organisasi</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-xl hover:scale-105 transition"
                data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-semibold">Proker</h3>
                <p>Program / kegiatan yang direncanakan</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-xl hover:scale-105 transition"
                data-aos="fade-up" data-aos-delay="300">
                <h3 class="font-semibold">Karya Ilmiah</h3>
                <p>Tulisan, Edukasi, Kontribusi</p>
            </div>

        </div>
    </div>

    <!-- VISI -->
    <div class="flex justify-center p-3 pt-6"
        data-aos="zoom-in">
        <h3 class="text-center text-3xl font-semibold text-gray-800">
            "Mewujudkan mahasiswa santri yang literat, melek teknologi, dan berakhlak Islami
            dalam menghadapi tantangan era digital"
        </h3>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="flex flex-col md:flex-row justify-center gap-1 min-h-[300px]">

        <div class="flex justify-center w-full md:w-[500px]"
            data-aos="flip-left">
            <img src="../app/views/image/logo_fkmsb.png"
                alt="Logo FKMSB"
                class="w-[250px] h-auto object-cover object-center hover:scale-105 transition duration-300">
        </div>

        <div class="flex flex-col justify-center w-full md:w-3/4 px-3 md:pe-32"
            data-aos="fade-right"
            data-aos-delay="200">
            <h2 class="mb-1 text-2xl font-bold text-center md:text-left text-blue-600">
                Forum Komunikasi Mahasiswa Santri Banyuanyar Wilayah Bangkalan
            </h2>

            <p class="text-sm font-normal text-center md:text-left">
                FKMSB Wilayah Bangkalan merupakan organisasi mahasiswa santri alumni Pondok
                Pesantren Banyuanyar yang berfungsi sebagai wadah penguatan akademik, literasi,
                dan pengembangan kapasitas intelektual mahasiswa.
            </p>
        </div>
    </div>
</section>

<!-- STATISTIK -->
<div class="flex flex-col md:flex-row justify-center gap-2 mt-6 md:mt-1">

    <div class="w-full md:w-1/2 flex justify-center items-center"
        data-aos="fade-up">
        <div class="flex flex-col justify-center">
            <h2 class="text-center md:text-left text-xl font-semibold">
                Profil Keanggotaan dan Aktivitas Organisasi <br>
                <span class="text-blue-600 text-2xl font-bold">Fkmsb wilayah Bangkalan</span>
            </h2>
            <p class="text-center md:text-left">Secara singkat kuantitas profile organisasi</p>
        </div>
    </div>

    <div class="w-full md:w-1/2 grid md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-3 justify-center items-center p-3"
            data-aos="fade-up" data-aos-delay="100">
            <i class="ri-group-line text-[40px] text-blue-600"></i>
            <div class="flex flex-col items-center">
                <h2 class="text-xl font-semibold">40</h2>
                <p>Pengurus</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-3 justify-center items-center p-3"
            data-aos="fade-up" data-aos-delay="200">
            <i class="ri-draft-line text-[40px] text-blue-600"></i>
            <div class="flex flex-col items-center">
                <h2 class="text-lg font-semibold">40</h2>
                <p>Proker</p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-3 justify-center items-center p-3"
            data-aos="fade-up" data-aos-delay="300">
            <i class="ri-quill-pen-ai-line text-[40px] text-blue-600"></i>
            <div class="flex flex-col items-center">
                <h2 class="text-lg font-semibold">40</h2>
                <p>Karya ilmiah</p>
            </div>
        </div>
    </div>
</div>

<!-- DOKUMENTASI -->
<div class="bg-white flex flex-col items-center pt-4">

    <div class="flex flex-col w-2/3 justify-center items-center p-4"
        data-aos="fade-up">
        <h1 class="text-2xl text-center font-semibold">Dokumentasi Kegiatan Rutinan</h1>
        <p class="text-sm text-center font-normal">
            Program rutinan FKMSB Bangkalan mencakup istighosah, kajian ilmiah, dan olahraga.
        </p>
    </div>

    <div class="w-full grid md:grid-cols-3 gap-6 p-3 mb-6">

        <div class="relative group overflow-hidden rounded-xl shadow-lg"
            data-aos="fade-up">
            <img src="../app/views/image/kajian.jpg"
                class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-4
                        opacity-0 group-hover:opacity-100 transition duration-300">
                <h3 class="text-white text-lg font-semibold">Kajian Rutinan</h3>
                <p class="text-sm text-gray-200">
                    Kegiatan kajian ilmiah untuk meningkatkan wawasan keilmuan.
                </p>
            </div>
        </div>

        <div class="relative group overflow-hidden rounded-xl shadow-lg"
            data-aos="fade-up" data-aos-delay="150">
            <img src="../app/views/image/istighosah.png"
                class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-4
                        opacity-0 group-hover:opacity-100 transition duration-300">
                <h3 class="text-white text-lg font-semibold">Istighosah</h3>
                <p class="text-sm text-gray-200">
                    Kegiatan spiritual untuk memperkuat kebersamaan.
                </p>
            </div>
        </div>

        <div class="relative group overflow-hidden rounded-xl shadow-lg"
            data-aos="fade-up" data-aos-delay="300">
            <img src="../app/views/image/olahraga.webp"
                class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-4
                        opacity-0 group-hover:opacity-100 transition duration-300">
                <h3 class="text-white text-lg font-semibold">Olahraga</h3>
                <p class="text-sm text-gray-200">
                    Aktivitas untuk menjaga kebugaran dan kekompakan.
                </p>
            </div>
        </div>

    </div>
</div>


<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>
