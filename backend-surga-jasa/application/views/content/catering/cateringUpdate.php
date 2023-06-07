<html>

<head>
    <title>Form Ubah Catering</title>
    <!-- CSS only CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- JQuery and Javascript CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
    <!-- JQuery Validation CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
    <div class="content">
    <div class="card">
        <div class="card-header">
            <h3>Form Update Catering</h3>
        </div>
        <div class="card-body">
            <form id="form-update-catering" method="post" action="<?= site_url('catering/update') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input required type="text" value="<?= $catering->nama_catering?>" class="form-control" name="nama_catering">
                </div>
                <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <textarea required class="form-control"  rows="5" cols="60" name="alamat_catering"><?php echo $catering->alamat_catering; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Kontak</label>
                    <textarea required class="form-control"  rows="5" cols="60" name="no_hp_catering"><?php echo $catering->no_hp_catering; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea required class="form-control"  rows="5" cols="60" name="deskripsi_catering"><?php echo $catering->deskripsi_catering; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar</label>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-9 mb-3">
								<input class="form-control" value="<?= $catering->gambar?>" type="file" id="formFile" name="gambar">
                                <input  value="<?= $catering->gambar?>" type="hidden" id="formFile" name="gambar">
                            </div>
							<div class="col-sm-12 col-md-12 col-lg-3">
								<img src="<?php echo base_url();?>upload/<?php echo $catering->gambar?>"  style="max-width:250px;">
							</div>
						</div>
					</div>
                </div>
                <input type="hidden" name="id_catering" value="<?= $catering->id_catering ?>">
            	<button type="submit"  class="btn btn-success btn-sm">
					<i class="fa fa-save"></i> Simpan
				</button>
                <a href="<?= site_url('catering') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-reply"></i> Kembali
                </a>
                </div>
            </form>
        <div class="card-footer"> 
        </div>
    </div>
    </div>
</body>
</html>
<script>
    $(function (){
        $("#btn-update-catering").on("click", function() {
           
                $("#form-update-catering").submit()
        })
    })
</script>
