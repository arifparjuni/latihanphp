<?php
// menghubunkan file php lke mysql

// koneksi ke database
// hostname, username, password, dan nama databasenya
$conn = mysqli_connect("localhost","root","","latihanphp");

// koneksi ke database
// querynya
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// while($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<title>Daftar Mahasiswa</title>
</head>
<body>
    <div class="container">
	<h1>Daftar Mahasiswa</h1>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nrp</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php while($m = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $m["nama"]; ?></td>
            <td><?= $m["nrp"]; ?></td>
            <td><?= $m["email"]; ?></td>
            <td><?= $m["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </tbody>
    </table>
    </div>

	<!-- Optional JavaScript --> <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="jquery/jquery3.js"></script>
	<script src="popper/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
