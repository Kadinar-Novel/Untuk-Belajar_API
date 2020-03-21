<!DOCTYPE html>
<html>
<head>
	<title>Use API</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<form class="form-siswa" id="form" method="post">
		  <div class="form-group">
		    <label>Nama</label>
		    <input type="hidden" class="form-control" name="idSiswa" id="idSiswa" value="">
		    <input type="hidden" class="form-control" name="_METHOD" id="idSiswa" value="DELETE">
		    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="">
		  </div>
		  <div class="form-group">
		    <label>Tempat Lahir</label>
		    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="">
		  </div>
		  <div class="form-group">
		    <label>Tanggal Lahir</label>
		    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="">
		  </div>
		  <div class="form-group">
		    <label>Alamat</label>
		    <input type="text" class="form-control" name="alamat" id="alamat" value="">
		  </div>
		</form>
		<button class="btn btn-primary" id="btn" onclick="return confirm('Hapus data ini?')">Delete</button>
	</div>
</body>
</html>