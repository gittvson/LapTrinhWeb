<?php 
    class Admin{
        public function index(){
            include_once("./model/mAdmin.php");
            $admin=new mAdmin();
            include_once('./view/admin.php');
            if(isset($_POST["id"])){
            $kq=$admin->ktdn($_POST["id"],$_POST["pass"]);
            
            if($kq==1){
                echo"dang nhap thanh cong";
            }
            // else
            // include_once('./view/setting.php');
            // }
        }
    }}
?>