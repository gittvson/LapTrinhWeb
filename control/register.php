<?php 
    class Register
    {
        public function index()
        {
            include_once "model/User.php";
            include_once "view/register.php"; 
            $dsnd=new User();  
            if(isset($_POST["submit"]))
            {
                $tk =$_POST["id"];
                $mk =$_POST["pass"];
                $mk1=$_POST["pass1"];
                if($dsnd->kiemTraTrung($tk)){
                    ?>
                    <script>alert("Tài khoản đã tồn tại")</script>
                <?php
                }
                else{
                if(strlen($mk)<8){
                ?>
                <script>alert("mật khẩu phải lớn hơn hoặc bằng 8 ký tự")</script>
                <?php
                }
                else{
                if($mk==$mk1){
                    $kq=$dsnd->register($tk,$mk);
                    if($kq==1)
                    echo "thanh cong";
                    else
                    echo"that bai";
                    var_dump($kq);
                }
                else
                ?>
                    <script>alert("mật khẩu không trùng khớp")</script>
                <?php
                
            }
            }
        }}
    }
?>