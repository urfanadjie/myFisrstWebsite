<?php

	$koneksi = mysqli_connect("localhost","root","","dataAnggota");

	if (!$koneksi) {
		die("Koneksi Gagal : ".mysqli_connect_error());
	}
	
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-3.2.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Data Anggota</title>

</head>
<body style="padding-top: 50px; padding-bottom: 200px;">

	<!--Tampilan Judul dan BreadCrumb-->
	<div class="container">
		<a href="index.php" style="text-decoration: none;">< Kembali ke Dasbor</a>
		<h1>Data Mahasiswa Terdaftar</h1>
		<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
			<ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
			    <li class="breadcrumb-item active"><a href="#">Lihat Semua Data</a></li>
			</ol>
			<hr>
		</nav>
		<?php
	    $koneksi = mysqli_connect("localhost","root","","dataAnggota");

			if (!$koneksi) {
				die("Koneksi Gagal : ".mysqli_connect_error());
			}

	    if(isset($_GET['kode'])){
	    mysqli_query($koneksi ,"DELETE FROM tabelAnggota WHERE username = '$_GET[kode]'");
	    
	    echo "<div class=\"alert alert-info\" role=\"alert\">Data telah terhapus</div>";
	    echo "<meta http-equiv=refresh content=2;URL='index.php'>";

	    }
	    ?>
	<table class="table table-striped table-hover">
	 	<tr>
	        <th>No</th>
	        <th>Nama</th>
	        <th>Username</th>
	        <th>Email</th>
	        <th>Jenis Kelamin</th>
	        <th>TL</th>
	        <th>BL</th>
	        <th>Tahun</th>
	        <th>Negara</th>
	        <th>Kota</th>
	        <th>Biografi</th>
	        <th colspan="2">Aksi</th>
	    </tr>
	    <?php 

		$koneksi = mysqli_connect("localhost","root","","dataAnggota");

		if (!$koneksi) {
			die("Koneksi Gagal : ".mysqli_connect_error());
		}

	    $no = 1;
	    $ambildata = mysqli_query($koneksi,"select * from tabelAnggota");
	    while($tampil = mysqli_fetch_array($ambildata)){
	        echo "
	        <tr>
	            <td><b>$no</b></td>
	            <td>$tampil[nama]</td>
	            <td>$tampil[username]</td>
	            <td>$tampil[email]</td>
	            <td>$tampil[jeniskelamin]</td>
	            <td>$tampil[tanggal]</td>
	            <td>$tampil[bulan]</td>
	            <td>$tampil[tahun]</td>
	            <td>$tampil[negara]</td>
	            <td>$tampil[kota]</td>
	            <td>$tampil[biografi]</td>
	            <td><a class='btn btn-danger' href='?kode=$tampil[username]'> Hapus </a></td>
            	<td><a class='btn btn-success' href='ubahAnggota.php?kode=$tampil[username]'> Update </a></td>
	        <tr>";            
	        $no++;
	    }
	    ?>
	</table>

	<hr>

	<button class="btn btn-success" onclick="window.print()">Print</button>

	</div>

</body>
</html>