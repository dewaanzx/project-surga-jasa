<html>

<head>
	<title>Form Ubah Bengkel</title>
	<!-- CSS only CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- JQuery and Javascript CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
			integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script async src="https://docs.opencv.org/master/opencv.js" type="text/javascript"></script>
	<!-- JQuery Validation CDN -->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
<div style="width: 1200px;" class="card">
	<div class="card-header">
		<h3>Form Update Bengkel</h3>
	</div>
	<div class="card-body">
		<form id="form-update-bengkel" method="post" action="<?= site_url('bengkel/update') ?>"
			  enctype="multipart/form-data">

			<label class="form-label">Bengkel</label>
			<input require type="text" value="<?= $bengkel->nama_bengkel ?>" class="form-control"
				   name="nama_bengkel">
	</div>
	<input type="hidden" name="id_bengkel" value="<?= $bengkel->id_bengkel ?>">
	</form>
</div>
<div class="card-footer">
	<button type="button" id="btn-update-bengkel" class="btn btn-success btn-sm">
		<i class="fa fa-save"></i> Simpan
	</button>
	<a href="<?= site_url('bengkel') ?>" class="btn btn-primary btn-sm">
		<i class="fa fa-reply"></i> Kembali
	</a>
</div>
</div>
</body>

</html>

<script>
	$(function () {
		$("#btn-update-bengkel").on("click", function () {
			let validate = $("#form-update-bengkel").valid()
			if (validate) {
				$("#form-update-bengkel").submit()
			}
		})
		$("#form-update-bengkel").validates({
			rules: {
				id_bengkel: {
					digits: true
				},
				nama_bengkel: {
					digits: true
				}
			},
			errorElement: 'span',
			errorPlacement: function (error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			}
		})
	})
</script>
