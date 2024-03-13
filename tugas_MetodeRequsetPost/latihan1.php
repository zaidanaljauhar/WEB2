<?php

$mahasiswa = [
    [
        "nim" => "23510017",
        "nama" => "zaidan",
        "jurusan" => "Teknologi Informasi",
        "email" => "zaidan@stimata.ac.id",
        "img" =>  "foto1.jpg"
    ],
    [
        "nim" => "23518888",
        "nama" => "omar",
        "jurusan" => "Sistem Informasi",
        "email" => "omar@stimata.ac.id",
        "img" =>  "foto2.jpg"
    ],
    [
        "nim" => "23519999",
        "nama" => "teguh",
        "jurusan" => "Sistem Informasi",
        "email" => "teguh@stimata.ac.id",
        "img" =>  "foto3.jpg"
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metode request</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; 
                ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; 
                ?>&email=<?= $mhs["email"]; ?>&img=<?= $mhs["img"]; ?>" ><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>