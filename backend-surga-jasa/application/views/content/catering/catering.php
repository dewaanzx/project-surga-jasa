<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- JQuery and Javascript CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Catering</h3>
             <br>
                <a href="<?= site_url('catering/tambah') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>Tambah Catering
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
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no =1;
                    foreach($catering as $catering) :
                    ?>
                  <tr>
                    <td><?=$no++?></td>
                    <td><?=$catering->nama_catering?></td>
                    <td><?=$catering->alamat_catering?></td>
                    <td><?=$catering->no_hp_catering?></td>
                    <td><img src="<?php echo base_url();?>upload/<?php echo $catering->gambar?>"  style="width:100%;"></td>
                    <td><?=$catering->deskripsi_catering?></td>
                    <td>
                                <a href="<?= site_url("catering/ubah/$catering->id_catering") ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" data-id="<?= $catering->id_catering?>" class="btn btn-danger btn-sm btn-delete-catering">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
</div>
<div class="modal" id="modal-confirm-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Anda Yakin Hapus data ini?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" id="btn-delete">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <form id="form-delete" method="post" action="<?= site_url('catering/delete') ?>">
    </form>
</body>

</html>
<script>
    $(function() {
        let idCatering = 0
        $(".btn-delete-catering").on("click", function() {
            idCatering = $(this).data("id");
            console.log(idCatering);
            $("#modal-confirm-delete").modal('show');
        });
        $("#btn-delete").on("click", function() {
            //panggil url untuk hapus data
            let inputId = $("<input>")
                .attr("type", "hidden")
                .attr("name", "id_catering")
                .val(idCatering);
            let formDelete = $("#form-delete");
            formDelete.empty().append(inputId);
            formDelete.submit();
            $("#modal-confirm-delete").modal('hide');
        });
    })
</script>
