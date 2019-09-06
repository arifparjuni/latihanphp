<?php
// foreach
$barang = ['dompet','sepeda','motor','mobil', 'laptop'];
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

    <?php foreach($barang as $b) : ?>
        <p><?= $b; ?></p>
    <?php endforeach; ?>
</body>
</html>