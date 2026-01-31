<?php

class GabungController extends BaseController{
    public function index(){
        $error = "";
        if($_SERVER["REQUEST_METHOD"] === "POST"){

            // tangkap data
            $data = [
                "nama"          => trim($_POST["nama"] ?? ""),
                "asal_sekolah"  => trim($_POST["asal-sekolah"] ?? ""),
                "alamat"      => trim($_POST["alamat"] ?? ""),
                "wa"            => trim($_POST["wa"] ?? ""),
                "notifikasi" => true
            ];

            // validasi
            if($data["nama"] === "" || $data["wa"] === ""){
                $error = "Nama dan WhatsApp wajib diisi!";
            }else{
                $this->view("gabung/index",$data);
                return;
            }
        };
            $this->view("gabung/index",["error" => $error]);
    }
}