<?php foreach($karya as $k): ?>

<section class="pt-20 pb-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-6">

        <!-- Judul -->
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 leading-snug">
            <?= $k['judul']; ?>
        </h1>

        <!-- Meta -->
        <div class="flex items-center gap-4 mt-4 text-sm text-gray-500">
            <span class="font-medium text-gray-700">
                <?= $k['penulis']; ?>
            </span>
            <span>•</span>
            <span>Angkatan <?= $k['angkatan']; ?></span>
        </div>

        <!-- Gambar -->
        <div class="mt-8">
            <img 
                src="/PROJECT_FKMSB/public/uploads/karya/<?= $k['foto']; ?>"
                alt="<?= $k['judul']; ?>"
                class="w-full max-h-[420px] object-cover rounded-xl shadow-md"
            >
        </div>

        <!-- Konten -->
        <article class="mt-10 text-gray-700 leading-relaxed text-base space-y-4">
            <?= nl2br($k['isi']); ?>
        </article>

        <!-- Divider -->
        <hr class="my-10 border-gray-200">

        <!-- Tombol kembali -->
        <a href="/PROJECT_FKMSB/public/karya"
           class="inline-flex items-center gap-2 text-blue-600 font-medium hover:underline">
            ← Kembali ke daftar karya
        </a>

    </div>
</section>

<?php endforeach; ?>
