<?php
// array Associative

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

echo "<br>";
echo $mahasiswa[1]["jurusan"];

?>