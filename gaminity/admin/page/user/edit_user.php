<?php
    $edit = $mysqli->query("SELECT * FROM user where id = '$_GET[kode]'");
    $e = mysqli_fetch_array($edit);
?>
<form role="form" method="post" action="index.php?page=update_user">
    <div class="card-body">
        <div class="form-group">
            <label for="id">EDIT USER</label>
            <input type="hidden" class="form-control" name="id" value="<?php echo $e['id'] ?>" placeholder="Masukkan ID">
        </div>
        <div class="form-group">
            <label for="first_name">NAMA_DEPAN</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $e['first_name'] ?>" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="last_name">NAMA_BELAKANG</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $e['last_name'] ?>" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="text" class="form-control" name="email" value="<?php echo $e['email'] ?>" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">PASSWORD</label>
            <input type="password" class="form-control" name="pass" value="<?php echo $e['password'] ?>" placeholder="Masukkan Password">
        </div>
        <div class="form-group">
            <label for="role">STATUS</label>
            <select class="custom-select rounded-0" name="role" value="<?php echo $e['role'] ?>">
                <option>USER</option>
                <option>ADMIN</option>
            </select>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">UBAH</button>
    </div>
</form>