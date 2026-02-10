<section id="proker" class="py-16">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-800">
                Program Kerja Organisasi
            </h2>
            <p class="mt-3 text-gray-600">
                FKMSB Wilayah Bangkalan
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php foreach ($data as $p): ?>
                <div
                    class="bg-white p-6 rounded-xl shadow 
                           hover:shadow-xl hover:-translate-y-1 
                           transition duration-300"
                    data-aos="fade-up"
                >

                    <span class="text-xs font-semibold text-blue-600">
                        <?= $p['divisi'] ?>
                    </span>

                    <h3 class="mt-2 font-bold text-lg text-gray-800">
                        <?= $p['judul'] ?>
                    </h3>

                    <p class="text-sm text-gray-600 mt-2">
                        <?= $p['deskripsi'] ?>
                    </p>

                    <div class="mt-4 flex justify-between items-center text-xs text-gray-500">
                        <span><?= $p['tahun'] ?></span>

                        <span class="px-2 py-1 rounded-full 
                            <?= $p['status'] === 'Aktif' 
                                ? 'bg-green-100 text-green-600' 
                                : 'bg-gray-200 text-gray-600' ?>">
                            <?= $p['status'] ?>
                        </span>
                    </div>

                </div>
            <?php endforeach ?>

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

