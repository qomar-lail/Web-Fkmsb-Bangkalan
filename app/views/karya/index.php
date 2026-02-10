<section class="p-5">
    <div 
        class="relative group overflow-hidden min-h-[400px] w-full mt-4 rounded-xl"
        data-aos="fade-up"
    >
        <div class="flex flex-col justify-center items-center">
            <h1 
                class="text-3xl md:text-4xl font-bold text-gray-800 mb-4"
                data-aos="fade-down"
            >
                Karya Ilmiah
            </h1>
            <p data-aos="fade-up">
                Tulisan, Edukasi, Kontribusi
            </p>
        </div>

        <!-- top series -->
        <div class="flex flex-col mt-6">
            <h1 
                class="text-2xl font-semibold"
                data-aos="fade-right"
            >
                Top stories
            </h1>

            <div class="grid md:grid-cols-3 gap-3 p-3">

                <?php foreach($karya as $k): ?>
                    <!-- card -->
                    <a 
                        href="/PROJECT_FKMSB/public/karya/detail/<?= $k['id'] ?>"
                        data-aos="fade-up"
                    >
                        <div class="rounded-xl bg-white border border-lg 
                                    hover:shadow-lg transition duration-300 easy-in-out 
                                    overflow-hidden">

                            <img 
                                src="/PROJECT_FKMSB/public/uploads/karya/<?= $k['foto'] ?>" 
                                alt="karya-ilmiah"
                                class="h-32 w-full object-cover"
                            >

                            <div class="p-4">
                                <h2 class="text-base font-medium rounded-xl 
                                           bg-blue-600 text-white w-fit px-3 py-0">
                                    <?= $k['kategori'] ?>
                                </h2>

                                <h2 class="text-lg font-medium">
                                    <?= $k['judul'] ?>
                                </h2>

                                <p class="text-xs font-light">
                                    <?= $k['ringkasan'] ?>
                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>

            </div>
            <a href="https://fkmsbwilayahbangkalan.blogspot.com/" class="text-lg text-bold text-blue-800 text-right pe-6">Lihat lebih banyak...</a>       
        </div>
    </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 120
    });
});
</script>