<?php

include 'koneksi.php';

$query = "SELECT * FROM tb_mahasisswa";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border ='1' callpadding ='8'";
    echo "<tr><th>nama</th><th>nim</th><th>fakultas</th></tr>";


    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['fakultas'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "tidak ada data mahasiswa";
}
?>