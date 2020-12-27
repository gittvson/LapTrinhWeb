<?php 
    include_once './model/Db.php';
        class mAdmin extends Db{
            public function ktdn($tk,$mk){
                $admin=$this->query("select count(*) as dem from admin where id=? and pass=?",[$tk,md5($mk)]);
                return $admin['0']['dem'];
            }
        }
?>