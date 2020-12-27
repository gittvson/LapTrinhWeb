<style>
.register{
    margin:auto;
}

body 
{
    background-color: blue;
    /* background-image: url(../img/bg.jpg); */
}
.list{
    display:flex;
    flex-wrap: wrap;
}
.item{
    justify-content: space-around;
    width: 31%;
    height: 420px;
    margin:1%;
    border-radius: 50px;
    text-align: center;
    border:.1px gray solid;
}
.content{
   margin:auto;
   margin-top: 50px;
}
#img-banner{
    width:100%;
    height: 300px;
    clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
    background-image:  url('./img/banner.jpg');
}

.banner{
    margin:auto;
    text-align: center;
    width:100%;
}

.container{
    margin:auto;
    width:1000px;
 
}
.img{
    width:300px;
    height: 200px; 
}
.list-cart{
    display: flex;
    flex-wrap: wrap;
}
.item-cart{
    justify-content: space-around;
    width: 31%;
    margin:1%;
}
</style>
<?php 
//Bắt đầu session
session_start();
//Đặt tên mặc định cho control và func (control là tên của file control, func là những hàm có trong class đó)
$control="login";
$func="index";

//xét giá trị nếu tồn tại thì trả về giá trị tồn tại đó
//Nếu không trả về trang index chính là ?ctrl=login&func=index
$control=isset($_GET['ctrl'])?$_GET['ctrl']:$control;
$func=isset($_GET['func'])?$_GET['func']:$func;
//include file php được chọn
include "control/".$control.".php";
//viết hoa chữ cái đầu của tên file php cho thành tên class
$name=ucwords($control);
//tạo new class
$obj=new $name();
//chạy func được chọn trong class đó
$obj->$func();
?>
