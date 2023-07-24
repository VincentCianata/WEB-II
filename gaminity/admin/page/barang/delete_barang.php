<?php 
$mysqli->query("DELETE FROM games WHERE id = '$_GET[kode]'");

echo "<script>alert('Data berhasil dihapus')</script>";
echo "<script type='text/javascript'> document.location = 'index.php?page=data_barang'; </script>";
?>