<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel_Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tabel_Transaksi</li>
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
                <!-- <h3 class="card-title">Data barang</h3><br> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>NAMA_GAME</th>
                        <th>HARGA</th>
                        <th>STATUS</th>
                        <th>METODE_PEMBAYARAN</th>
                        <th>GAMBAR_GAME</th>
                    </tr>
                  </thead>
                  <TBody>
                    <?php
                    $no = 0;
                    $admin=$mysqli->query("SELECT * FROM wishlist");
                    while ($m=mysqli_fetch_array($admin)) {
                        $no++;?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $m['id']; ?></td>
                            <td><?php echo $m['email']; ?></td>
                            <td><?php echo $m['game']; ?></td>
                            <td><?php echo $m['harga']; ?></td>
                            <td><?php echo $m['status']; ?></td>
                            <td><?php echo $m['payment_method']; ?></td>
                            <td><?php echo $m['game_image']; ?></td>

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
