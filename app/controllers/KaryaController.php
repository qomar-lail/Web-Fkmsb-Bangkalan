<?php
require_once "../app/models/KaryaModel.php";

class KaryaController extends BaseController{
    public function index(){
        $this->view("karya/index");
    }
    public function detail($id){
        $data = [
            'judul' => 'Peran Alumni Pesantren dalam Dunia Akademik',
            'penulis' => 'Ahmad Fauzi',
            'angkatan' => '2021',
            'isi' => 'Ini adalah isi lengkap karya ilmiah...'
        ];
        $this->view("karya/detail",$data);
    }
}