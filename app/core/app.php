<?php

class app {
    protected $controller = "HomeController";
    protected $method = "index";
    protected $parms = [];

    public function __construct()
    {
        // data base dan koneksi
        $dbObj = new DataBase();
        $db = $dbObj->getDB();

        $url = $this->parse_url();

        // pilih controller
        if(isset($url[0]) && ($url[0] === "admin" )){
            $ControllerName = ucfirst($url[1])."Controller";
            $ControllerFile = "../app/controllers/admin/".$ControllerName.".php";
            if(file_exists($ControllerFile)){
                require_once $ControllerFile;
                $this->controller = new $ControllerName($db);
                unset($url[0],$url[1]);
            }else{
                die("admin controller tidak ditemukan");
            }
        }
        else{
            $ControllerName = ucfirst($url[0] ?? 'home')."Controller";
            $ControllerFile = "../app/controllers/" .$ControllerName. ".php";

            if(file_exists($ControllerFile)){
                require_once $ControllerFile;
                $this->controller = new $ControllerName($db);
                unset($url[0]);
            }else{
                die("controller tidak ditemukan");
            }
        }
        
        // tentukan method
        if(isset($url[1])&&method_exists($this->controller,$url[1])){
            $this->method = $url[1];
            unset($url[1]); 
        }else if(isset($url[2]) && method_exists($this->controller,$url[2])){
            $this->method = $url[2];
            unset($url[2]);
        }else{
            $this->method = "index";
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