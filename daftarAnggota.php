<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pendaftaran</title>
  </head>
  <body style="padding-top: 50px; padding-bottom: 200px;">
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data" id="form1">
        <a href="index.php" style="text-decoration: none;">< Kembali ke Dasbor</a>
        <h1>Pendaftaran</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Pendaftaran</a></li>
        </ol>
        </nav>
        <hr>
        <?php
        $koneksi = mysqli_connect("localhost","root","","dataAnggota");

        if (!$koneksi) {
          die("Koneksi Gagal : ".mysqli_connect_error());
        }

        $nama = @$_POST['nama'];
        $username = @$_POST['username'];
        $password = @$_POST['password'];
        $email = @$_POST['email'];
        $jeniskelamin = @$_POST['jeniskelamin'];
        $tanggal = @$_POST['tanggal'];
        $bulan = @$_POST['bulan'];
        $tahun = @$_POST['tahun'];
        $negara = @$_POST['negara'];
        $kota = @$_POST['kota'];
        $biografi = @$_POST['biografi'];

        $sql = "INSERT INTO tabelAnggota (nama,username,password,email,jeniskelamin,tanggal,bulan,tahun,negara,kota,biografi) VALUES ('$nama', '$username', '$password','$email','$jeniskelamin','$tanggal','$bulan','$tahun','$negara','$kota','$biografi')";

          if (isset($_POST['simpan'])) {
            $simpan = mysqli_query($koneksi ,$sql);
            echo "<div class=\"alert alert-success\" role=\"alert\">Data telah ditambahkan</div>";
            echo "<meta http-equiv=refresh content=1;URL='index.php'>";
          }
        ?>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
          <input name="nama" type="text" value="" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama Anda">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input name="username" type="text" size="20" value="" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username Anda">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input name="password" type="text" size="20" value="" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input name="email" type="email" type="text" size="20" value="" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : nama@contoh.com">
        </div>

        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1" value="Pria">
          <label class="form-check-label" for="inlineRadio1">Pria</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2" value="Wanita">
          <label class="form-check-label" for="inlineRadio2">Wanita</label>
        </div>

        <br>

        <div class="input-group">
          <span class="input-group-text">Tanggal Lahir</span>
          <input placeholder="dd" name="tanggal" maxlength="2" size="2" value="" type="text" aria-label="First name" class="form-control">
          <input placeholder="mm" name="bulan" type="text" aria-label="Last name" class="form-control" maxlength="2" size="2" value="">
          <input placeholder="yyyy" name="tahun"  maxlength="4" size="4" value="" type="text" aria-label="Last name" class="form-control">
        </div>

        <br>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Negara</label>
          <input name="negara" type="text" size="20" value="" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Negara Anda">
        </div>

        <div>
          <label for="exampleFormControlInput1" class="form-label">Kota</label>
          <select class="form-select" aria-label="Default select example" name="kota"><option selected="" value="">--</option><option value="Banda Aceh">Banda Aceh</option><option value="Jakarta">Jakarta</option><option value="Yogyakarta">Yogyakarta</option><option value="Surabaya">Surabaya</option></select>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Biografi</label>
          <textarea name="biografi" cols="39" rows="4" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <hr>

        <input class="btn btn-primary" name="simpan" type="submit" value="Simpan">
        <a href="index.php"><button type="button" class="btn btn-outline-secondary">Batal</button></a>

      </form>
    </div>
  </body>
</html>
