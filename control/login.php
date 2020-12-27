<?php 
    class Login
    {
        //trang đăng nhập chính
        public function index()
        {
            //include file model User để xử lý DB
            include_once "model/User.php";
            include_once "view/login.php"; 
            $dsnd=new User();
            if(isset($_POST["submit"]))
            {
                echo " ton tai";
                $_SESSION["id"]=$_POST["id"];
                $tk =$_POST["id"];
                $mk =$_POST["pass"];
                $kq=$dsnd->login($tk,$mk);
                if($kq==1){
                    echo "hihiihih";
                ?>
                <script>
                    location.href="index.php?ctrl=screenuser&func=index";
                </script>
                <?php
                }
                else{
                    echo "<h1>Login fail. Please check again your username and password</h1>";
                }
            }
        }
        public function logout()
        {
            unset($_SESSION["id"]);
            if(isset($_SESSION["id"]))
            unset($_SESSION["cart"][$_SESSION["id"]]);
            include "view/login.php";
        }
    }
    
?>