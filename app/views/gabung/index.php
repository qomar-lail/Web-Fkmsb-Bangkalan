
<div class="flex flex-row jutify-batween p-16 pt-13">
    <div class="w-1/2 flex flex-col justify-center">
        <h1 class="text-lg font-semibold text-center">⚠️ Perhatian Sebelum Bergabung</h1>
        <p class="text-sm font-normal text-center">Calon anggota FKMSB diharapkan bersedia menaati AD/ART dan seluruh aturan organisasi, memiliki kesiapan untuk beradaptasi serta menyesuaikan diri dengan kultur FKMSB yang berlandaskan nilai-nilai kepesantrenan, serta menjaga akhlak, etika, dan komitmen selama menjadi bagian dari FKMSB.</p>
    </div>
    <form action="/PROJECT_FKMSB/public/gabung/" method="POST" class="flex flex-col items-center gap-4 w-1/2 p-6">
        <h1 class="text-xl font-semibold text-blue-600">FORMULIR</h1>
    <!-- Nama -->
        <div class="relative w-2/3">
            <input
                type="text"
                name="nama"
                placeholder=" "
                required
                class="peer w-full border-b-2 border-gray-300 bg-transparent
                    pt-5 pb-1 text-sm
                    focus:border-blue-600 focus:outline-none"
            >

            <label
                class="absolute left-0 top-4 text-gray-500 text-sm
                    transition-all duration-300

                    peer-focus:-top-1
                    peer-focus:text-xs
                    peer-focus:text-blue-600

                    peer-valid:-top-1
                    peer-valid:text-xs
                    peer-valid:text-blue-600"
            >
                Nama
            </label>
        </div>


        <!-- Alamat -->
        <div class="relative w-2/3">
            <input
                type="text"
                name="alamat"
                placeholder=" "
                required
                class="peer w-full border-b-2 border-gray-300 bg-transparent
                    pt-5 pb-1 text-sm focus:border-blue-600 focus:outline-none"
            >
            <label
                class="absolute left-0 top-2 text-gray-500 text-sm
                    transition-all
                    peer-focus:-top-1
                    peer-focus:text-xs
                    peer-focus:text-blue-600
                    peer-valid:-top-1
                    peer-valid:text-xs
                    peer-valid:text-blue-600"
            >
                Alamat
            </label>
        </div>

        <!-- Asal Sekolah -->
        <div class="relative w-2/3">
            <input
                type="text"
                name="asal_sekolah"
                placeholder=" "
                required
                class="peer w-full border-b-2 border-gray-300 bg-transparent
                    pt-5 pb-1 text-sm focus:border-blue-600 focus:outline-none"
            >
            <label
                class="absolute left-0 top-2 text-gray-500 text-sm
                    transition-all
                    peer-focus:-top-1
                    peer-focus:text-xs
                    peer-focus:text-blue-600
                    peer-valid:-top-1
                    peer-valid:text-xs
                    peer-valid:text-blue-600"
                    
            >
                Asal Sekolah
            </label>
        </div>

        <!-- No WA -->
        <div class="relative w-2/3">
            <input
                type="text"
                name="wa"
                placeholder=" "
                required
                class="peer w-full border-b-2 border-gray-300 bg-transparent
                    pt-5 pb-1 text-sm focus:border-blue-600 focus:outline-none"
            >
            <label
                class="absolute left-0 top-2 text-gray-500 text-sm
                    transition-all
                    peer-focus:-top-1
                    peer-focus:text-xs
                    peer-focus:text-blue-600
                    peer-valid:-top-1
                    peer-valid:text-xs
                    peer-valid:text-blue-600"
            >
                No WhatsApp
            </label>
        </div>
        <div class="flex justify-center items-center gap-4">
            <a href="/PROJECT_FKMSB/public/" class="inline-flex items-center bg-[#E53835] rounded-full
                    text-lg font-semibold text-white
                    py-2 px-6 mt-5">
                Kembali
            </a>

            <button type="submit"
                class="inline-flex items-center bg-blue-600 rounded-full
                    text-lg font-semibold text-white
                    py-2 px-6 mt-5
                    shadow-md hover:bg-blue-700 hover:shadow-lg
                    transition duration-300">
                Gabung Sekarang
            </button>
        </div>
</form>

</div>