<?php
class BaseController{
    protected function view($view,$data = [],$layout = "main"){
        extract($data);
        ob_start();
        require "../app/views/$view.php";
        $content = ob_get_clean();
        require "../app/views/layouts/$layout.php";
    }
}