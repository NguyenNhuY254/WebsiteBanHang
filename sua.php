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
        include('config.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM db_content WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <?php
        if (isset($_POST['btnSua'])) {
            include('config.php');
            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
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
            $sql2 = "UPDATE db_content SET name='$name',vn_title='$vn_title',e_title='$e_title',price='$price',market_price='$market_price',save_money='$save_money',info='$info',details_product='$details_product',img='$target_file' WHERE id ='$id'";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                header('location: quanly.php');
            }
            else {
                echo "Sua khong thanh cong";
            }
        }
    }
    ?>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="editproduct" class="form-label">ID</label>
                <input readonly name="id" value="<?php echo $row['id'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Trang</label>
                <input readonly name="cid" value="<?php echo $row['cid'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Tên sản phẩm</label>
                <input name="name" value="<?php echo $row['name'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Tiêu đề TV</label>
                <input name="vn_title" value="<?php echo $row['vn_title'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Tiêu đề TA</label>
                <input name="e_title" value="<?php echo $row['e_title'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Gía</label>
                <input name="price" value="<?php echo $row['price'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Gía thị trường</label>
                <input name="market_price" value="<?php echo $row['market_price'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Tiết kiệm</label>
                <input name="save_money" value="<?php echo $row['save_money'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Ảnh sản phẩm</label>
                <input name="img" value="<?php echo $row['img'];?>" type="file" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Mô tả</label>
                <input name="info" value="<?php echo $row['info'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-3">
                <label for="editproduct" class="form-label">Thành phần</label>
                <input name="details_product" value="<?php echo $row['details_product'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="editproduct" class="form-label">Hướng dẫn sử dụng</label>
                <input name="use_product" value="<?php echo $row['use_product'];?>" type="text" class="form-control" id="editproduct" aria-describedby="emailHelp">
            </div>
            
            <button name="btnSua" value="Sua" type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</body>
</html>