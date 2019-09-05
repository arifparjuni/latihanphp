<?php
// koneksi
$conn = mysqli_connect("localhost", "root", "", "latihanphp");

if(isset($_POST["submit"])) {

    // ambil data
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];

    // Insert Data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('','$nama', '$nrp', '$email', '$jurusan')
                ";
    mysqli_query($conn, $query);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
            <a href="latihan27.php" class="btn btn-success">Kembali</a>
        </form>
    </div>
</body>
</html>