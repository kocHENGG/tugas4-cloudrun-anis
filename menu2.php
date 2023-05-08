<!DOCTYPE html>
<html>
<head>
	<title>KUIS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="kuis.css">
</head>
<body>
	<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="#">Kuis</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			      <div class="navbar-nav">
			        <a class="nav-link active" aria-current="page" href="menu1.php">Home</a>
			        <a class="nav-link" href="menu2.php">Form</a>
			        <a class="nav-link" href="menu3.php">Pengulangan</a>
			      </div>
			    </div>
			  </div>
			</nav>
			<div class="jaraktepi">
			 <div class="jarak">
	        <h1>From Biodata Mahasiswa</h1>
	        <form action="output.php" method="POST">
				  <div class="row mb-3">
				    <label for="inputnim" class="col-sm-2 col-form-label">NIM</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputnim" name="inputnim">
				    </div>
				  </div>
				  <div class="row mb-3">
				    <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputnama" name="inputnama">
				    </div>
				  </div>
				  <div class="row mb-3">
				    <label for="inputnama" class="col-sm-2 col-form-label">Tempat, tanggal lahir</label>
				  <div class="col-6">
				    <input type="text" class="form-control"  aria-label="tempat" name="tempat">
				  </div>
				  <div class="col-sm">
				    <input input type="date" name="tanggal" class="form-control">
				  </div>
				</div>
					<div class="row mb-3">
					    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="alamat" name="alamat">
						    </div>
						  </div>
						<fieldset class="row mb-3">
					    <legend class="col-form-label col-sm-2 pt-0">Jenis kelamin</legend>
					    <div class="col-sm-10">
					      <div class="form-check">
				        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="laki-laki" checked>
				        <label class="form-check-label" for="jeniskelamin">
				          laki-laki
					     </label>
					 	</div>
					    <div class="form-check">
				        <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="perempuan">
				        <label class="form-check-label" for="jeniskelamin">
				          perempuan
				        </label>
				      </div>
				  	  </div>
				      <div class="row mb-3">
					    <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
				      <div class="col-sm-10">
					  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="Agama">
					    <option value="1">islam</option>
					    <option value="2">kristen</option>
					    <option value="3">katolik</option>
					    <option value="3">hindu</option>
					    <option value="3">budha</option> 
					  </select>
					</div> </div>
						<fieldset class="row mb-3">
					    <legend class="col-form-label col-sm-2 pt-0">Kuisnya susah?</legend>
					    <div class="col-sm-10">
					      <div class="form-check">
				        <input class="form-check-input" type="radio" name="kuis" id="ku" value="Ya" checked>
				        <label class="form-check-label" for="kuis">Ya</label>
					 	</div>
					    <div class="form-check">
				        <input class="form-check-input" type="radio" name="kuis" id="ku" value="Tidak">
				        <label class="form-check-label" for="kuis">Tidak</label>
				      </div>
				  	  </div>
				  	  <div class="col-auto">
					    <button type="submit" class="container">Submit</button>
					  </div>
				</form>
		</div>

		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <div class="container-fluid">
			  	<div class="tengah">
			    <a class="navbar-brand" href="#">@2021</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			      <div class="navbar-nav">
		</div>


</body>
</html>