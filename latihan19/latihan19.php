<?php
// array Associative

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
    ]
];

// echo "<br>";
// echo $mahasiswa[1]["jurusan"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan foreach</title>
</head>
<body>
    <h1>Latihan Foreach</h1>
    <?php foreach($mahasiswa as $m) : ?>
    <ul>
        <li>Nama: <?= $m["nama"]; ?></li>
        <li>nrp: <?= $m["nrp"]; ?></li>
        <li>email: <?= $m["email"]; ?></li>
        <li>jurusan: <?= $m["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>