<?php
require_once "../app/models/ProkerModel.php";
class ProkerController extends BaseController{
    private $model;

    public function __construct($db)
    {
        $this->model = new ProkerModel($db);
    }

    public function index(){
        // $data["proker"] = $this->model->getAll();
        $proker = [
            [
                'judul' => 'Vidio Edukasi/Narasi',
                'divisi' => 'Pengembangan Edukasi Digital',
                'deskripsi' => 'Melatih kualitas public speaking kader FKMSB sekaligus untuk mengedukasi public dengan basis video short  / narasi.',
                'tahun' => '1/bulan',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Podcast',
                'divisi' => 'Pengembangan Edukasi Digital',
                'deskripsi' => 'Edukasi pengelolaan media dan publikasi digital organisasi.',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Forum Karya Ilmiah',
                'divisi' => 'Minat & Bakat',
                'deskripsi' => 'Wadah pengembangan riset dan penulisan ilmiah mahasiswa.',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Membuat Database Pengurus',
                'divisi' => 'KOMINFO',
                'deskripsi' => 'Untuk menyimpan seluruh data kepengurusan',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Pamflate ulang tahuan',
                'divisi' => 'KOMINFO',
                'deskripsi' => 'Sebagai bentuk ucapan selamat pada kader untuk merayakan ulang tahunnya',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Pamflate hari besar',
                'divisi' => 'KOMINFO',
                'deskripsi' => 'Bentuk ucapan perayaan dan peringatan FKMSB untuk mengenang sejarah dll',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Live report',
                'divisi' => 'KOMINFO',
                'deskripsi' => 'Mendokumentasi seluruh kegiatan dalam bentuk video',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Take foto kepengurusan',
                'divisi' => 'Minat & Bakat',
                'deskripsi' => 'Melakukan pengembilan foto setiap pengurus',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Literasi',
                'divisi' => 'Minat & Bakat',
                'deskripsi' => 'Pembekalan kader untuk lebih mengekspolarasi pengetahuan',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
            [
                'judul' => 'Olahraga',
                'divisi' => 'Minat & Bakat',
                'deskripsi' => 'Meningkatkan kebugaran jasmani, kesehatan fisik dan mental, serta mengembangkan potensi',
                'tahun' => '2025',
                'status' => 'Aktif'
            ],
        ];

        $this->view("proker/index",$proker);
    }
}