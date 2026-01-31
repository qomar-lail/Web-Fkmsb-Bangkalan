<?php
class ProkerController extends BaseController{
    private $model;
    
    public function __construct($db)
    {
        
    }

    public function index(){
        $this->adminView("admin/proker/index");
    }
}