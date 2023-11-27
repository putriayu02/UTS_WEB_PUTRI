<?php
$database_hostname  ='localhost';
$database_username  ='root';
$database_password  ='';
$database_name  ='sttb';

try {
    //code...
    $database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name", $database_username, $database_password);
    $cek = "koneksi berhasil";
    echo $cek;
} catch (PBOException $x) {
    //throw $th;
    die($x->getMessage());
}