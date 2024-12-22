<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Akses tabel menggunakan mysql_fech_array()</h2>
    <?php
        include "../koneksi/conection.php"
        $hasil = mysqli_query($koneksi, "select * from dosen");
        while ($row=mysql_fetch_array($hasil)){
            echo "NPP" : ".$row  ["npp"];// array asosiatif
            echo "nama dosen : " .$row["nmdosen"];//array numeris
            echo "<br>"
        }
    ?>
    
</body>
</html>