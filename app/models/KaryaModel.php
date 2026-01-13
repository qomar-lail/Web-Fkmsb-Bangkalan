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
                ":id" => $id
            ]
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}