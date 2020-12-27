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
    <div class="alert alert-danger" role="alert">
 Bạn đang đăng nhập vào trang Admin
</div>

    <form action="index.php?ctrl=admin&func=index" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Nhập vào tài khoản của bạn</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Nhập vào mật khẩu của bạn</small>
        </div>
        <button type="submit" name="submit" value="Login" class="btn btn-primary">Submit</button>
    </form>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
    
</html>