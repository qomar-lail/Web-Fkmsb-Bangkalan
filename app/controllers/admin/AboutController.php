<?php
class AboutController extends BaseController{
    public function index(){
        $this->adminView("admin/about/index");
    }
}