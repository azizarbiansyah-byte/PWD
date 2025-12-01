<?php
include "classes/Database.php";
include "classes/Hewan.php";

$db = new Database();
$conn = $db->connect();

$hewan = new Hewan($conn);
$dataHewan = $hewan->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Hewan Peliharaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>🐾 Daftar Hewan Peliharaan</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Umur</th>
        <th>Pemilik</th>
    </tr>

    <?php while($row = $dataHewan->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['jenis'] ?></td>
        <td><?= $row['umur'] ?> tahun</td>
        <td><?= $row['pemilik'] ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
