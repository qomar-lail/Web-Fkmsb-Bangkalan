<?php
require_once "../app/models/KaryaModel.php";

class KaryaController extends BaseController{
    public function index(){
        $this->view("karya/inde");
    }
}