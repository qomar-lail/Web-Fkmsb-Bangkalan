<?php
require_once "../app/models/StrukturModel.php";

class StrukturController extends BaseController{
    private $model;

    public function __construct($db)
    {
        $this->model = new StrukturModel($db);
    }

    public function index(){
        $data['pengurus'] = $this->model->getAll(); 
        $this->view("struktur/index",$data);
    }

    public function detail($id){
        $data["pengurus"] = $this->model->getById($id);

        $this->view("struktur/detail",$data);
    }

    public function tambah(){
        $this->view("struktur/tambah");
    }

    public function simpan(){
        $data = [
            "nama" => $_POST["nama"],
            "divisi" => $_POST["divisi"],
            "jabatan" => $_POST["jabatan"],
            "angkatan" => $_POST["angkatan"],
        ];
        $this->model->insert($data);
        header("location:/PROJECT_FKMSB/public/struktur");
    }

    public function edit($id){
        $data["pengurus"] = $this->model->getById($id);
        $this->view("struktur/edit",$data);
    }

    public function update(){
        $this->model->update($_POST);
        header("location:/PROJECT_FKMSB/public/struktur");
    }

    public function hapus($id){
        $this->model->delete($id);
        header("location:/PROJECT_FKMSB/public/struktur");
    }
}