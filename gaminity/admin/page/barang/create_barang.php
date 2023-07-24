<?php 
$id = $_POST['id'];
$gimage = $_POST['gimage'];
$gname = $_POST['gname'];
$price = $_POST['price'];
$featured = $_POST['featured'];
$recom = $_POST['recom'];
$gpage = $_POST['gpage'];
$des = $_POST['des'];

$mysqli->query("INSERT INTO games VALUES ('$id','$gimage','$gname','$price','$featured','$recom','$gpage','$des')");

    echo "<script>alert('Data berhasil ditambahkan')</script>";
    echo "<script type='text/javascript'> document.location='index.php?page=data_barang';</script>";
?>