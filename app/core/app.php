<?php

class app {
    protected $controller = "HomeController";
    protected $method = "index";
    protected $parms = [];

    public function __construct()
    {
        $url = $this->parse_url();
        if(isset($url[0])&&file_exists("../app/controllers/".ucfirst($url[0])."Controller.php")){
            $this->controller = ucfirst($url[0])."Controller";
            unset($url[0]);
        }

        // load Database & model
        require_once "../app/config/DataBase.php";
        
        $dbObj = new DataBase();
        $db = $dbObj->getDB();

        //load file controller
        require_once "../app/core/BaseController.php";
        require_once "../app/controllers/".$this->controller.".php";
        $this->controller = new $this->controller($db);
        
        // tentukan method
        if(isset($url[1])&&method_exists($this->controller,$url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }

        // cek dan ambil parameter
        $this->parms = $url ? array_values($url) : [];
        call_user_func(
            [$this->controller, $this->method],
            $this->parms
        );

    }

    private function parse_url(){
        if(isset($_GET["url"])){
            return explode("/",trim($_GET["url"],"/"));
        }
    }

}