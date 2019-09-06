<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <ul>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>nrp : <?= $_GET["nrp"]; ?></li>
        <li>email : <?= $_GET["email"]; ?></li>
        <li>jurusan : <?= $_GET["jurusan"]; ?></li>
    </ul>
    <a href="latihan22.php">Kembali</a>
</body>
</html>