<?php
$id = $_POST['id'];
$gimage = $_POST['gimage'];
$gname = $_POST['gname'];
$price = $_POST['price'];
$featured = $_POST['featured'];
$recom = $_POST['recom'];
$gpage = $_POST['gpage'];
$des = $_POST['des'];


$mysqli->query("UPDATE games SET game_image = '$gimage',
                                game_name = '$gname',
                                price = '$price',
                                    featured = '$featured', 
                                    recommended = '$recom',
                                    game_page = '$gpage',
                                    game_description = '$des' 
                                    WHERE id = '$id'");

echo "<script>alert('Data berhasil dirubah')</script>";
echo "<script type='text/javascript'> document.location = 'index.php?page=data_barang'; </script>";
?>