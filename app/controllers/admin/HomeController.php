<?php
class HomeController extends BaseController{
    public function index(){
        $this->adminView("admin/home/index");
    }
}