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
	        <?php
			    echo "<table>"."<tr>"."<td>"."NIM "."</td>";
			    echo "<td>".":"."</td>"."<td>"."$_POST[inputnim]"."</tr>";
			    echo "<tr>"."<td>"."Nama "."</td>"."<td>".":"."</td>"."<td>"."$_POST[inputnama]"."</td>"."</tr>";
			    echo "<tr>"."<td>"."Tempat, Tanggal Lahir "."</td>"."<td>".":"."</td>"."<td>"."$_POST[tempat] $_POST[tanggal]"."</td>"."</tr>";
			    echo "<tr>"."<td>"."Alamat"."</td>"."<td>".":"."</td>"."<td>"."$_POST[alamat]"."</td>"."</tr>";
			    echo "<tr>"."<td>"."Jenis Kelamin "."</td>"."<td>".":"."</td>"."<td>"."$_POST[jeniskelamin]"."</td>"."</tr>";
			    echo "<tr>"."<td>"."Agama"."</td>"."<td>".":"."</td>"."<td>"."$_POST[Agama]"."</td>"."</tr>";
			    echo "<tr>"."<td>"."Kuisnya Susah ? "."</td>"."<td>".":"."</td>"."<td>"."$_POST[kuis]"."</td>"."</tr>";
			    echo "</table>";
			?>
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