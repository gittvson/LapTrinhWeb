<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="banner">
            <tr>
                <td colspan="5"><img id="img-banner" alt=""></td>
            </tr>
            
            <tr>
                <td><a href="index.php?ctrl=screenuser&func=index"><button class="btn btn-danger">Trang chủ</button></a></td>
                <td>
                    
                    <!-- Example split danger button -->
                    <div class="btn-group">
                    <button type="button" class="btn btn-danger">Laptop</button>
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"><span class="badge bg-danger">New</span>
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Phụ kiện</a></li>
                        <li><a class="dropdown-item" href="#">Tablet</a></li>
                        <li><a class="dropdown-item" href="#">Phone</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="index.php?ctrl=screenuser&func=index">Trang chủ</a></li>
                    </ul>
                    </div>

                </td>
              
            </tr>
        </table>
        <div class="alert alert-primary" role="alert">
  Giỏ hàng của bạn đang có <span class="badge bg-warning text-dark"><?php echo count($_SESSION["cart"][$_SESSION["id"]]); ?></span> sản phẩm
</div>
        <div class="list-cart">
            <?php 
            include_once "./model/Laptop.php";
          
            $laptops=new Laptop();
            $list=$laptops->laptops();
            foreach($_SESSION['cart'][$_SESSION["id"]] as $key => $value){ 
                foreach($list as $item){
                    if($item["id"]==$value){?>
            <div class="card item-cart" >
            <div class="card-header">
                <?php echo $item["ten"]?>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> <?php echo $item["gia"]?></li>
                <li class="list-group-item"> <img class="img" src="<?php echo $item["hinh"]?>"/></li>
                <li class="list-group-item"><a href="index.php?ctrl=cart&func=xoa&vtxoa=<?php echo $key ?>"><button class="btn btn-danger btn-lg">Delete</button></a></li>
            </ul>
            </div>
            <?php 
            }}}?>
     
        </div>
        <a href="index.php?ctrl=screenuser&func=index"><button class="btn btn-primary">Home</button></a>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>