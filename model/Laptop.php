<?php
    include_once 'model/Db.php';
    class Laptop extends Db
    {
        public function laptops(){
            $laptops=$this->query("select * from laptop order by gia");
            return $laptops;
        }
    }
?>