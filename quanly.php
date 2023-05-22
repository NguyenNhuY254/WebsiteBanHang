<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css-btl/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Hasaki.vn | Mỹ Phẩm - Clinic & Spa</title>
</head>

<body>
    <div class="container">
        <div class="title-quanlysp">
            <h1 style="text-align: center; font-size: 25px; margin-top: 20px;">QUẢN LÝ SẢN PHẨM</h1>
        </div>
        <a href="./them.php"><button class="btn btn-success" style="margin-bottom:20px;">Thêm</button></a>
        <form action="search.php" method="get">
            Search: <input type="text" name="search" />
            <a href="./search.php"><button class="btn btn-warning">Tìm kiếm</button></a>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">trang</th>
                    <th scope="col">tên thương hiệu</th>
                    <th scope="col">tiêu đề tiếng việt</th>
                    <th scope="col">tiêu đề tiếng anh</th>
                    <th scope="col">giá</th>
                    <th scope="col">giá thị trường</th>
                    <th scope="col">tiết kiệm</th>
                    <th scope="col">ảnh sản phẩm</th>
                    <th scope="col">ảnh sản phẩm lớn</th>
                    <th scope="col">thông tin sản phẩm</th>
                    <th scope="col">thành phần</th>
                    <th scope="col">hướng dẫn sử dụng</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //B1: ket noi voi csdl
                include('config.php');
                //B2: Truy van sql
                $sql = "SELECT * FROM db_content";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['cid'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['vn_title'] ?></td>
                        <td><?php echo $row['e_title'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['market_price'] ?></td>
                        <td><?php echo $row['save_money'] ?></td>
                        <td><img src="<?php echo $row['img']?>" class="img-fluid" style="width:100px"></td>
                        <td><img src="<?php echo $row['img_big']?>" class="img-fluid" style="width:100px"></td>
                        <td><?php echo $row['info'] ?></td>
                        <td><?php echo $row['details_product'] ?></td>
                        <td><?php echo $row['use_product'] ?></td>
                        <td>
                            <a href="./sua.php?id=<?php echo $row['id']?>"><button class="btn bg-info">Sửa</button></a>
                            <a href="./xoa.php?id=<?php echo $row['id']?>"><button class="btn bg-danger">Xóa</button></a>
                        </td>     
                    </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>