<?php

$mahasiswa = [
    [ 
        "nrp" => "087657",
        "nama" => "Arif",
        "email" => "arif@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [ 
        "nama" => "Parjuni",
        "nrp" => "089658",
        "email" => "parjuni@gmail.com",
        "jurusan" => "Teknik Fisika"
    ],
    [ 
        "nama" => "Teguh",
        "nrp" => "876850",
        "email" => "teguh@gmail.com",
        "jurusan" => "Teknik Tataboga"
    ]
];

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
	<h1>Daftar Mahasiswa</h1>
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
    <?php $i = 1; foreach($mahasiswa as $m) : ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $m["nama"]; ?></td>
            <td><?= $m["nrp"]; ?></td>
            <td><?= $m["email"]; ?></td>
            <td><?= $m["jurusan"]; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

	<!-- Optional JavaScript --> <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="jquery/jquery3.js"></script>
	<script src="popper/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
