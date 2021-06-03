<?php
    $koneksi = mysqli_connect("localhost","root","","dataAnggota");

    if (!$koneksi) {
        die("Koneksi Gagal : ".mysqli_connect_error());
    }
	$sql = mysqli_query($koneksi ,"SELECT * FROM tabelAnggota WHERE username ='$_GET[kode]'");
	$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Data Anggota</title>
</head>
<body style="padding-top: 50px; padding-bottom: 200px;">
    <div class="container">
        <a href="index.php" style="text-decoration: none;">< Kembali ke Dasbor</a>
        <h1>Update Data Anggota</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Update Data</a></li>
        </ol>
        </nav>
        <hr>

        <?php
            $koneksi = mysqli_connect("localhost","root","","dataAnggota");

                if (!$koneksi) {
                    die("Koneksi Gagal : ".mysqli_connect_error());
                }

                if(isset($_POST['proses'])){
                    mysqli_query($koneksi , "UPDATE tabelAnggota SET  
                    nama = '$_POST[nama]',
                    email = '$_POST[email]',
                    negara = '$_POST[negara]',
                    kota = '$_POST[kota]',
                    biografi = '$_POST[biografi]'
                    WHERE username = '$_GET[kode]'");
                echo "<div class=\"alert alert-success\" role=\"alert\">Data telah diubah</div>";
                echo "<meta http-equiv=refresh content=2;URL='index.php'>";
            }
        ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Negara</label>
                <input type="text" name="negara" value="<?php echo $data['negara']; ?>" class="form-control" id="exampleFormControlInput1">
            </div>

            <div>
                <label for="exampleFormControlInput1" class="form-label">Kota</label>
                <select class="form-select" aria-label="Default select example" name="kota"> <option value="Banda Aceh">Banda Aceh</option><option value="Jakarta">Jakarta</option><option value="Yogyakarta">Yogyakarta</option><option value="Surabaya">Surabaya</option></select>
            </div>

            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Biografi</label>
                <textarea name="biografi" cols="39" rows="4" class="form-control" id="exampleFormControlTextarea1"><?php echo $data['biografi']; ?></textarea>
            </div>

            <hr>

            <div>
                <input class="btn btn-warning" type="submit" name="proses" value="Ubah">
                <a href="index.php"><button type="button" class="btn btn-outline-secondary">Batal</button></a>
            </div>

        </form>

    </div>
</body>

</html>
