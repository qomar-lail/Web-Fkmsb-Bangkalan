<section id="proker" class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center">
            <h2 class="text-3xl font-bold">Program Kerja FKMSB</h2>
            <p class="mt-3 text-gray-600">
                Program kerja berbasis akademik, literasi, dan teknologi.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php foreach ($data as $p): ?>
                <div class="bg-white p-6 rounded-xl shadow 
                            hover:shadow-xl hover:-translate-y-1 
                            transition duration-300">

                    <!-- Divisi -->
                    <span class="text-xs font-semibold text-blue-600">
                        <?= $p['divisi'] ?>
                    </span>

                    <!-- Judul -->
                    <h3 class="mt-2 font-bold text-lg">
                        <?= $p['judul'] ?>
                    </h3>

                    <!-- Deskripsi -->
                    <p class="text-sm text-gray-600 mt-2">
                        <?= $p['deskripsi'] ?>
                    </p>

                    <!-- Footer -->
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
