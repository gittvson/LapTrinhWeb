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
        <header><a href="index.php?ctrl=login&func=logout"><button>Log out</button></a>
        <a href="index.php?ctrl=cart&func=index"><button type="button" class="btn btn-primary">
  Cart <span class="badge bg-secondary"><?php echo (isset($_SESSION["cart"][$_SESSION["id"]])?count($_SESSION["cart"][$_SESSION["id"]]):0); ?></span>
</button></a></header>