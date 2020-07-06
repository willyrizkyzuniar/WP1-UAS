<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "perpus2";
$mysqli = new mysqli($host, $user, $pass, $database);
if (mysqli_connect_errno()) {
     trigger_error('koneksi ke database gagal: ' . mysqlI_connect_error(), E_USER_ERROR);
}
