<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Laundry</h3>
             <br>
                <a href="<?= site_url('laundry/tambah') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>Tambah Laundry
            </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no =1;
                    foreach($laundry as $laundry) :
                    ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$laundry->nama_laundry?></td>
                    <td><?=$laundry->alamat_laundry?></td>
                    <td><?=$laundry->no_hp_laundry?></td>
           
                    <td><?=$laundry->deskripsi_laundry?></td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach ?>
                </table>
              </div>
</div>