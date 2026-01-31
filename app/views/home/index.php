<div class="flex flex-col md:flex-row-reverse items-center gap-4 p-8 min-h-screen">
    <div class="gambar w-full md:w-1/2 ms-10 flex justify-center">
        <img class="w-full max-w-md h-auto object-contain rounded" src="../app/views/image/img_main.png" alt="logo-fkmsb">
    </div>
    <div class="w-full md:w-1/2">
        <h1 class="text-4xl font-bold text-center md:text-left">Forum Komunikasi <span class="text-blue-600">Mahasiswa Santri</span> Banyuanyar</h1>
        <p class="text-sm md:text-base text-center md:text-left mt-3"><?= $deskripsi ?></p>
        <div class="flex flex-column md:flex-row w-full gap-2 justify-center md:justify-start items-center mt-10">
            <p class="text-center md:text-left ">Mari bergabung bersama kami</p>
            <a href="/PROJECT_FKMSB/public/gabung" class="bg-blue-600 rounded-2xl py-1 px-4 text-white hover:bg-blue-800 shadow-sm transition duration-300 text-center">Gabung</a>
        </div>
    </div>
</div>

<section class="bg-white flex-col gap-2 p-8  relative z-10">

    <!-- card info -->
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-2 md:-mt-24">

            <div class="p-6 bg-white rounded-xl shadow-xl hover:scale-105 transition">
                <h3 class="font-semibold">Struktur</h3>
                <p>Susunan kepengurusan organisasi</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-xl hover:scale-105 transition">
                <h3 class="font-semibold">Proker</h3>
                <p>Program / kegiatan yang direncanakan</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-xl hover:scale-105 transition">
                <h3 class="font-semibold">Karya Ilmiah</h3>
                <p>Tulisan, Edukasi, Kontribusi</p>
            </div>

        </div>
    </div>
    <!-- Visi / Tagline -->
    <div class="flex justify-center p-3 pt-6">
        <h3 class="text-center text-3xl font-semibold">
            "Mewujudkan mahasiswa santri yang literat, melek teknologi, dan berakhlak Islami
            dalam menghadapi tantangan era digital"
        </h3>
    </div>

    <!-- Konten Utama -->
    <div class="flex flex-col md:flex-row justify-center gap-1 min-h-[300px]"">
        
        <!-- Logo -->
        <div class="flex justify-center w-full md:w-[500px]">
            <img 
                src="../app/views/image/logo_fkmsb.png"
                alt="Logo FKMSB"
                class="w-[250px] h-auto object-cover object-center hover:scale-105 transition duration-300 easy-in-out"
            >
        </div>

        <!-- Deskripsi -->
        <div class="flex flex-col justify-center w-full md:w-3/4 px-3 md:pe-32">
            <h2 class="mb-1 text-2xl font-bold text-center md:text-left text-blue-600">
                Forum Komunikasi Mahasiswa Santri Banyuanyar Wilayah Bangkalan
            </h2>

            <p class="text-sm font-normal text-center md:text-left">
                FKMSB Wilayah Bangkalan merupakan organisasi mahasiswa santri alumni Pondok
                Pesantren Banyuanyar yang berfungsi sebagai wadah penguatan akademik, literasi,
                dan pengembangan kapasitas intelektual mahasiswa di perguruan tinggi wilayah
                Bangkalan, serta menjadi bagian integral dari FKMSB Pusat dalam menjalankan visi
                organisasi secara berjenjang.
            </p>
        </div>

    </div>

</section>

<!--catatan ringkas banyak anggota, pengurus dan proker-->

<div class="flex flex-col md:flex-row justify-center gap-2 mt-6 md:mt-1"> 
    <div class="w-full md:w-1/2 flex justify-center items-center">
        <div class="flex flex-col justify-center">
            <h2 class="text-center md:text-left text-xl font-semibold">Profil Keanggotaan dan Aktivitas Organisasi <br><span class="text-blue-600 text-2xl font-bold">Fkmsb wilayah Bangkalan</span></h2>
            <p class="text-center md:text-left">Secara singkat kuantitas profile organisasi</p>
        </div>
    </div>
    <div class="w-full md:w-1/2 grid md:grid-cols-2">
        <div class="flex flex-col md:flex-row gap-0 md:gap-3 justify-center items-center p-3">
            <i class="ri-group-line text-[40px] text-blue-600"></i>
            <div class="flex flex-col items-center">
                <h2 class="text-xl font-semibold ">40</h2>
                <p>Pengurus</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-0 md:gap-3 justify-center items-center p-3">
            <i class="ri-draft-line text-[40px] text-blue-600"></i>
            <div class=" flex flex-col items-center">
                <h2 class="text-lg font-semibold">40</h2>
                <p>Proker</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-0 md:gap-3 justify-center items-center p-3">
            <i class="ri-quill-pen-ai-line text-[40px] text-blue-600 ps-2"></i>
            <div class="flex flex-col items-center">
                <h2 class="text-lg font-semibold">40</h2>
                <p>Karya ilmiah</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-3 justify-center items-center">
            <i class="ri-group-line text-[40px] text-blue-600 ps-1"></i>
            <div class="flex flex-col items-center">
                <h2 class="text-lg font-semibold">40</h2>
                <p>deskripsi</p>
            </div>
        </div>
    </div>
</div>

<!-- dokumentasi singkat -->
<div class="bg-white flex flex-col md:row items-center pt-4">
    <div class="flex flex-col w-2/3 justify-center items-center p-4">
        <h1 class="text-2xl text-center font-semibold">Dokumentasi Kegiatan Rutinan</h1>
        <p class="text-sm text-center font-normal">Program rutinan FKMSB Bangkalan mencakup istighosah, kajian ilmiah, dan olahraga yang bertujuan menyeimbangkan penguatan spiritual, peningkatan intelektual, serta kebugaran dan kebersamaan mahasiswa santri.</p>
    </div>
    <div class="w-full grid md:grid-cols-3 gap-6 p-3 mb-6">

        <!-- CARD -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg">
            <img 
                src="../app/views/image/kajian.jpg"
                alt="Kajian Rutinan"
                class="w-full h-64 object-cover"
            >

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-4 
                        opacity-0 group-hover:opacity-100 
                        transition duration-300 ease-in-out">
                <h3 class="text-white text-lg font-semibold">Kajian Rutinan</h3>
                <p class="text-sm text-gray-200">
                    Kegiatan kajian ilmiah untuk meningkatkan wawasan keilmuan dan literasi mahasiswa santri.
                </p>
            </div>
        </div>

        <!-- CARD -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg">
            <img 
                src="../app/views/image/istighosah.png"
                alt="Istighosah"
                class="w-full h-64 object-cover"
            >

            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-4 
                        opacity-0 group-hover:opacity-100 
                        transition duration-300 ease-in-out">
                <h3 class="text-white text-lg font-semibold">Istighosah</h3>
                <p class="text-sm text-gray-200">
                    Kegiatan spiritual rutin untuk memperkuat nilai keislaman dan kebersamaan.
                </p>
            </div>
        </div>

        <!-- CARD -->
        <div class="relative group overflow-hidden rounded-xl shadow-lg">
            <img 
                src="../app/views/image/olahraga.webp"
                alt="Olahraga"
                class="w-full h-64 object-cover"
            >

            <div class="absolute inset-0 bg-black/60 flex flex-col justify-end p-4 
                        opacity-0 group-hover:opacity-100 
                        transition duration-300 ease-in-out">
                <h3 class="text-white text-lg font-semibold">Olahraga</h3>
                <p class="text-sm text-gray-200">
                    Aktivitas olahraga untuk menjaga kebugaran dan kekompakan anggota.
                </p>
            </div>
        </div>

    </div>

</div>

