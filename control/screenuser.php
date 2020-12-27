<?php 

    class Screenuser
    {
       
        public function index()
        {
            
            if(isset($_SESSION["id"]))
            include_once "view/screenuser.php"; 
            else
            include_once "view/login.php";
            
        }
    }
?>