<?php

class StrukturModel{
    private $dbcon;

    public function __construct($db)
    {
        $this->dbcon = $db;
    }

    public function getAll(){
        $stmt = $this->dbcon->query("SELECT * FROM pengurus");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $stmt = $this->dbcon->prepare("SELECT * FROM pengurus WHERE id = :id");
        $stmt->execute(
            [":id" => "$id[0]"]
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBPH(){
        $stmt = $this->dbcon->prepare("SELECT * FROM pengurus WHERE divisi = :divisi ");

        $stmt->execute([
            ":divis" => "Badan Pengurus Harian"
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByDivisi($divisi){
        $stmt = $this->dbcon->prepare("SELECT * FROM pengurus WHERE divisi = :divisi");

        $stmt->execute([
            ":divisi" => $divisi
        ]);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function insert($data){
        $stmt = $this->dbcon->prepare("INSERT INTO pengurus(nama, jabatan, divisi, angkatan) VALUES(:nama, :jabatan, :divisi, :angkatan)");
        $stmt->execute([
            ":nama"=>$data['nama'],
            ":divisi"=>$data['divisi'],
            ":jabatan"=>$data['jabatan'],
            ":angkatan"=>$data['angkatan'],
        ]);
    }
    public function update($data){
        $stmt = $this->dbcon->prepare("UPDATE pengurus SET nama = :nama, jabatan = :jabatan, divisi = :divisi, angkatan = :angkatan WHERE id = :id");
        $stmt->execute(
            [
                ":id" => $data["id"],
                ":nama" => $data["nama"],
                ":jabatan" => $data["jabatan"],
                ":divisi" => $data["divisi"],
                ":angkatan" => $data["angkatan"]
            ]
        );
    }

    public function delete($id){
        $stmt = $this->dbcon->prepare("DELETE FROM pengurus WHERE id = :id");
        $stmt->execute(
            [
                ":id" => "$id"
            ]
        );
    }
}