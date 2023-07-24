<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel_User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tabel_User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Data User dan Admin</h3><br> -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-secondary">
                  Tambah User
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>NAMA_DEPAN</th>
                        <th>NAMA_BELAKANG</th>
                        <th>NAMA_EMAIL</th>
                        <th>ROLE</th>
                        <th>ACTION</th>
                    </tr>
                  </thead>
                  <TBody>
                    <?php
                    $no = 0;
                    $admin=$mysqli->query("SELECT * FROM user");
                    while ($m=mysqli_fetch_array($admin)) {
                        $no++;?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $m['id']; ?></td>
                            <td><?php echo $m['first_name']; ?></td>
                            <td><?php echo $m['last_name']; ?></td>
                            <td><?php echo $m['email']; ?></td>
                            <td><?php echo $m['role']; ?></td>
                            <td>
                              <a href="index.php?page=edit_user&kode=<?php echo $m['id']; ?>">
                              <button type="button" class="btn btn-primary">Edit</button></a>
                              <a href="index.php?page=delete_user&kode=<?php echo $m['id']; ?>" onclick="return confirm('Apakah yakin untuk menghapus data?')">
                              <button type="button" class="btn btn-danger">delete</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                  </TBody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Modal Form Tambha Data -->
    <div class="modal fade" id="modal-secondary">
        <div class="modal-dialog">
          <div class="modal-content bg-secondary">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="post" action="index.php?page=create_user">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">Isilah untuk menambah data:</label>
                    <input type="hidden" class="form-control" name="id" placeholder="Masukkan ID">
                  </div>
                  <div class="form-group">
                    <label for="first_name">NAMA_DEPAN</label>
                    <input type="text" class="form-control" name="fname" placeholder="Masukkan Nama Depan">
                  </div>
                  <div class="form-group">
                    <label for="last_name">NAMA_BELAKANG</label>
                    <input type="text" class="form-control" name="lname" placeholder="Masukkan Nama Belakang">
                  </div>
                  <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="password" class="form-control" name="pass" placeholder="Masukkan Password">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="role">ROLE</label>
                    <select class="custom-select rounded-0" name="role">
                      <option>USER</option>
                      <option>ADMIN</option>
                    </select>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">TAMBAH</button>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>