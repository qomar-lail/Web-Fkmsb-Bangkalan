<?php
class DataBase{
    protected $db;
    function __construct()
    {
        try{
            $this->db = new PDO(
                "mysql:host=localhost;dbname=project_fkmsb",
                "root",
                ""
            );

            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("koneksi gagal".$e->getMessage());
        }
    }

    function getDB(){
        return $this->db;
    }
}