<?php

include 'koneksi.php';

$query = "SELECT
            tm.nama,
            tm.nim,
            tm.fakultas,
            tk.matkul,
            tn.nilai
            FROM tb_nilai tn
            JOIN tb_mahasisswa tm ON tn.nim = tm.nim
            JOIN tb_matkul tk ON tn.matkul = tk.matkul";


$result = mysqli_query($koneksi,$query);
if (mysqli_num_rows($result) > 0){
    echo "<table border ='1' cellpadding='8'";
    echo "<tr>
            <th>nama</th> 
            <th>nim</th> 
            <th>fakultas</th> 
            <th>matkul</th> 
            <th>nilai</th>
            </tr>"; 

            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['nim'] . "</td>";
                echo "<td>" . $row['fakultas'] . "</td>";
                echo "<td>" . $row['matkul'] . "</td>";
                echo "<td>" . $row['nilai'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

}else {
    echo "tidak ada mahasisswa";
}

?>