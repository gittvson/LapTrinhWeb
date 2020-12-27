<?php 
class Cart{
    public function index(){
        if(isset($_SESSION["id"])){
            include_once "./model/Laptop.php";
        $laptops=new Laptop();
        $list=$laptops->laptops();
        if(isset($_GET["id"])){
        $id=$_GET["id"];
        foreach($list as $laptop){
            if($laptop["id"]==$id){
              $_SESSION["cart"][$_SESSION["id"]][]=$id;
            }
        }
    }
    include_once "./view/cart.php";
        // print_r($_SESSION["cart"]) ;
    }else
    include_once "view/login.php";
}
    public function xoa(){
        if(isset($_GET["vtxoa"])){
            unset($_SESSION["cart"][$_SESSION["id"]][$_GET["vtxoa"]]);
        }
        include_once "./view/cart.php";
    }

}