<?php
$mahasiswa = [
    [ 
        "nama" => "Arif",
        "nrp" => "087657",
        "email" => "arif@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [ 
        "nama" => "Parjuni",
        "nrp" => "089658",
        "email" => "parjuni@gmail.com",
        "jurusan" => "Teknik Fisika"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li><a href="detail.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>