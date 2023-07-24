<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel_Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tabel_Produk</li>
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
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-secondary">
                  Tambah barang
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>ID</th>
                        <th>GAMBAR_GAME</th>
                        <th>NAMA_GAME</th>
                        <th>HARGA</th>
                        <th>FEATURED</th>
                        <th>RECOMMENDED</th>
                        <th>HALAMAN</th>
                        <th>DESKRIPSI</th>
                        <th>ACTION</th>
                    </tr>
                  </thead>
                  <TBody>
                    <?php
                    $no = 0;
                    $admin=$mysqli->query("SELECT * FROM games");
                    while ($m=mysqli_fetch_array($admin)) {
                        $no++;?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $m['id']; ?></td>
                            <td><?php echo $m['game_image']; ?></td>
                            <td><?php echo $m['game_name']; ?></td>
                            <td><?php echo $m['price']; ?></td>
                            <td><?php echo $m['featured']; ?></td>
                            <td><?php echo $m['recommended']; ?></td>
                            <td><?php echo $m['game_page']; ?></td>
                            <td><?php echo $m['game_description']; ?></td>
                            <td>
                              <a href="index.php?page=edit_barang&kode=<?php echo $m['id']; ?>">
                              <button type="button" class="btn btn-primary">Edit</button></a>
                              <a href="index.php?page=delete_barang&kode=<?php echo $m['id']; ?>" onclick="return confirm('Apakah yakin untuk menghapus data?')">
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
              <h4 class="modal-title">Form Tambah produk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="post" action="index.php?page=create_barang">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">Isilah untuk menambah data:</label>
                    <input type="hidden" class="form-control" name="id" placeholder="Masukkan ID">
                  </div>
                  <div class="form-group">
                    <label for="game_image">GAMBAR_PRODUK</label>
                    <input type="text" value="img/" class="form-control" name="gimage" placeholder="Masukkan Lokasi Gambar">
                  </div>
                  <div class="form-group">
                    <label for="game_name">NAMA_PRODUK</label>
                    <input type="text" class="form-control" name="gname" placeholder="Masukkan Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="price">HARGA</label>
                    <input type="text" class="form-control" name="price" placeholder="Masukkan Harga Produk">
                  </div>
                  <div class="form-group">
                    <label for="featured">FEATURED (Yes(Y)/No(N))</label>
                    <select class="custom-select rounded-0" name="featured">
                      <option>Y</option>
                      <option>N</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recommended">RECOMMENDED (Yes(Y)/No(N))</label>
                    <select class="custom-select rounded-0" name="recom">
                      <option>Y</option>
                      <option>N</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="game_page">HALAMAN</label>
                    <select class="custom-select rounded-0" name="gpage">
                      <option>game-detail.php</option>
                      <option>None</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="game_description">DESKRIPSI</label>
                    <textarea class="form-control" name="des" rows="5" placeholder="Masukkan Keterangan"></textarea>
                  </div>
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