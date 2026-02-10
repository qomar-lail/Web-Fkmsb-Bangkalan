<?php

class KaryaModel{
    private $dbcon;
    
    public function __construct($db)
    {
        $this->dbcon = $db;
    }

    public function getAll(){
        $stmt = $this->dbcon->query("SELECT * FROM karya");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $stmt = $this->dbcon->prepare("SELECT * FROM karya WHERE id = :id");
        $stmt->execute(
            [
                ":id" => $id[0]
            ]
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data){
        $stmt = $this->dbcon->prepare("INSERT INTO karya (judul, penulis, angkatan, isi, foto) VALUES (:judul, :penulis, :angkatan, :isi, :foto)");
        $stmt->execute(
            [
                ":judul" => $data["judul"],
                ":penulis" => $data["penulis"],
                ":angkatan" => $data["angkatan"],
                ":isi" => $data["isi"],
                ":foto" => $data["foto"]
            ]
        );
    }

    public function delete($id){
        $stmt = $this->dbcon->prepare("DELETE * FROM karya WHERE id = :id");
        $stmt->execute(
            [
                ":id" => $id
            ]
        );
    }

    public function update($data){
        $stmt = $this->dbcon->prepare("UPDATE karya SET (judul = :judul, penulis = :penulis, angkatan = :angkatan, isi = :isi, foto = :foto) WHERE id = :id");
        $stmt->execute(
            [
                ":id" => $data["id"],
                ":judul" => $data["judul"],
                ":penulis" => $data["penulis"],
                ":angkatan" => $data["angkatan"],
                ":isi" => $data["isi"],
                ":foto" => $data["foto"]
            ]
        );
    }
}