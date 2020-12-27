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
  <div class ="container">
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
        <header><a href="index.php?ctrl=login&func=logout"><button class="btn btn-danger">Log out</button></a>
        <a href="index.php?ctrl=cart&func=index"><button class="btn btn-danger">Cart</button></a></header>
        <form method="post" action="">
            <input type="text" name="keyword" id="">
            <input type="submit" value="Find">
        </form>
        <div class="list">
        <?php 
        include_once "model/Laptop.php";
        $laptop=new Laptop();
        $dssp=$laptop->laptops();
        foreach($dssp as $laptop) {
            if(is_int(strpos(strtolower ($laptop["ten"]),strtolower ($_POST["keyword"])))){
            ?>
            
            <a class="item">
                <table  class="content" width="80%">
                    <tr >
                        <td><?php echo "<img class='img' src='".$laptop['hinh']."'>" ?></td>
                    </tr>
                    <tr>
                        <td>
                    <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li  class="list-group-item font-monospace"><?php echo $laptop["ten"] ?></li>
                                <li class="list-group-item font-monospace"><?php echo $laptop["gia"] ?></li>
                                <li class="list-group-item font-monospace"><a type="button" class="btn btn-outline-success" href="index.php?ctrl=cart&func=index&id=<?php echo $laptop["id"];?>">Mua</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    
                </table>
            </a>
        <?php }}  ?>
        </div>
    <</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>