<?php

$koneksi = mysqli_connect("localhost" , "root" , "" , "kampus");

if ($koneksi){
    echo "database berhasil terkoneksi";
}
