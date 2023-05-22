<?php
    include('config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM db_content WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: quanly.php');
    } 
?>