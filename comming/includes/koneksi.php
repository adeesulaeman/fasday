<?php
$dsn  = "mysql:dbname=blog_fasday;host=localhost";
$user = "root";
$pass = "";

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: ".$e->getMessage();
}
?>