<?php
    $edit = $mysqli->query("SELECT * FROM games where id = '$_GET[kode]'");
    $e = mysqli_fetch_array($edit);
?>
<form role="form" method="post" action="index.php?page=update_barang">
    <div class="card-body">
        <div class="form-group">
            <label for="id">Isilah untuk menambah data:</label>
            <input type="hidden" class="form-control" name="id" value="<?php echo $e['id'] ?>" placeholder="Masukkan ID">
        </div>
        <div class="form-group">
            <label for="game_image">GAMBAR_PRODUK</label>
            <input type="text" class="form-control" name="gimage" value="<?php echo $e['game_image'] ?>" placeholder="Masukkan Lokasi Gambar">
        </div>
        <div class="form-group">
            <label for="game_name">NAMA_PRODUK</label>
            <input type="text" class="form-control" name="gname" value="<?php echo $e['game_name'] ?>" placeholder="Masukkan Nama Belakang">
        </div>
            <div class="form-group">
            <label for="price">HARGA</label>
            <input type="text" class="form-control" name="price" value="<?php echo $e['price'] ?>" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="featured">FEATURED (Yes(Y)/No(N))</label>
            <select class="custom-select rounded-0" name="featured" value="<?php echo $e['featured'] ?>">
                <option>Y</option>
                <option>N</option>
            </select>
        </div>
        <div class="form-group">
            <label for="recommended">RECOMMENDED (Yes(Y)/No(N))</label>
            <select class="custom-select rounded-0" name="recom" value="<?php echo $e['recommended'] ?>">
                <option>Y</option>
                <option>N</option>
            </select>
        </div>
        <div class="form-group">
            <label for="game_page">HALAMAN</label>
            <select class="custom-select rounded-0" name="gpage" value="<?php echo $e['game_page'] ?>">
                <option>game-detail.php</option>
                <option>None</option>
            </select>
        </div>
        <div class="form-group">
            <label for="game_description">DESKRIPSI</label>
            <textarea class="form-control" name="des" value="<?php echo $e['game_description'] ?>" rows="5" placeholder="Masukkan Keterangan"></textarea>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">UBAH</button>
    </div>
</form>