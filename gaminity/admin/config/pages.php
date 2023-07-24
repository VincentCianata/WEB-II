<?php
error_reporting(0);
include "config/koneksi.php";

if ($_GET['page']=="data_user") {
    include "page/user/data_user.php";
}
elseif ($_GET['page']=="create_user") {
    include "page/user/create_user.php";
}
elseif ($_GET['page']=="edit_user") {
    include "page/user/edit_user.php";
}
elseif ($_GET['page']=="update_user") {
    include "page/user/update_user.php";
}
elseif ($_GET['page']=="delete_user") {
    include "page/user/delete_user.php";
}
elseif ($_GET['page']=="data_barang") {
    include "page/barang/data_barang.php";
}
elseif ($_GET['page']=="create_barang") {
    include "page/barang/create_barang.php";
}
elseif ($_GET['page']=="edit_barang") {
    include "page/barang/edit_barang.php";
}
elseif ($_GET['page']=="update_barang") {
    include "page/barang/update_barang.php";
}
elseif ($_GET['page']=="delete_barang") {
    include "page/barang/delete_barang.php";
}
elseif ($_GET['page']=="data_transaksi") {
    include "page/transaksi/data_transaksi.php";
}
?>