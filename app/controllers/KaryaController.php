<?php
require_once "../app/models/KaryaModel.php";

class KaryaController extends BaseController{
    private $model;

    public function __construct($db){
        $this->model = new KaryaModel($db);
    }

    public function index(){
        $data["karya"] = $this->model->getAll();
        $this->view("karya/index",$data);
    }

    
    public function detail($id){
        $data["karya"] = $this->model->getById($id);
        $this->view("karya/detail",$data);
    }
}