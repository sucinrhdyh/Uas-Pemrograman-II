<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<tittle></tittle>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center><h2>PERKENALAN</h2></center>
		 <div class="container">
      <div class="row">
         <div class="col-md-12">
         <form action="proses_form3.php" method="post">
            <div class="form-group">
        <label for="nim">nim</label>
        <input type="number" class="form-control" name="nim" placeholder="Isikan nim anda" required>
     </div>
    <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Isikan nama anda" required >
    </div>
    <div class="form-group">
        <label for="email" class="control-label">email</label>
        <input type="email" class="form-control" name="email" placeholder="Isikan Email anda" required>
    </div>
    jenis_kelamin:<br>
		<select name="jenis_kelamin">
			<option value="LAKI-LAKI">LAKI-LAKI</option>
			<option value="PEREMPUAN">PEREMPUAN</option>
		</select><br>
		
     <div class="form-group">
               <label for="alamat">alamat</label>
               <textarea name="alamat"class="form-control" placeholder="Isikan Alamat anda" required ></textarea>
            </div>
    <p><button class="btn btn-primary btn-lg type="submit>kirim</button>
     <a class="btn btn-danger btn-lg" href="">batal</a></p>
</form>
</div>
</div>
</div>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

