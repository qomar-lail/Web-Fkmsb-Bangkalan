<?php

class HomeController extends BaseController{
    public function index(){
        $data = [
            "judul" => "FKMSB BANGKALAN",
            "deskripsi" => "Forum Komunikasi Mahasiswa Santri Banyuanyar merupakan wadah alumni yang sedang melanjutkan jenjang pendidikannya pada tingkat perguruan tinggi untuk bersilaturahmi, berkomunikasi, berkontribusi, dan mengabdi."
        ];
        $this->view("home/index",$data);
    }
}