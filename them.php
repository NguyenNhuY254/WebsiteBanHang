<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Hasaki.vn | Mỹ Phẩm - Clinic & Spa</title>
</head>
<body>
<?php
    if(isset($_POST['btnthem'])){
        include('config.php');
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $id = $_POST['id'];
        $cid = $_POST['cid'];
        $name = $_POST['name'];
        $vn_title = $_POST['vn_title'];
        $e_title = $_POST['e_title'];
        $price = $_POST['price'];
        $market_price = $_POST['market_price'];
        $save_money = $_POST['save_money'];
        $info = $_POST['info'];
        $details_product = $_POST['details_product'];
        $use_product = $_POST['use_product'];
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO db_content(id,cid, name, vn_title, e_title, price, market_price, save_money, img, info, details_product, use_product)
            VALUES('$id','$cid','$name','$vn_title','$e_title','$price','$market_price','$save_money','$target_file','$info','$details_product','$use_product')";    
            $result = mysqli_query($conn, $sql);
        if($result){
            header('location: quanly.php');
            } 
            else {
                echo "Thêm không thành công";
                }
        }
    }
?>
   <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="add-product" class="form-label">ID</label>
                <input name="id" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Trang</label>
                <input name="cid" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Tên sản phẩm</label>
                <input name="name" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Tiêu đề TV</label>
                <input name="vn_title" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Tiêu đề TA</label>
                <input name="e_title" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Giá</label>
                <input name="price" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Giá thị trường</label>
                <input name="market_price" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Tiết kiệm</label>
                <input name="save_money" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="add-product" class="form-label">Ảnh sản phẩm</label>
                <input name="img" type="file" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-3">
                <label for="add-product" class="form-label">Mô tả</label>
                <input name="info" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-3">
                <label for="add-product" class="form-label">Thành phần</label>
                <input name="details_product" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-3">
                <label for="add-product" class="form-label">Hướng dẫn sử dụng</label>
                <input name="use_product" type="text" class="form-control" id="add-product" aria-describedby="emailHelp">
            </div>
            <button name="btnthem" type="submit" class="btn btn-primary">Thêm</button>
        </form>
   </div>
   
</body>
</html>