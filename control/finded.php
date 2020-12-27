<?php
class Finded{
    public function index(){
        if(isset($_SESSION["id"]))
        include_once "./view/finded.php";
        else
        include_once "view/login.php";
}
}
?>