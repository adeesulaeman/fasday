<?php
include 'includes/koneksi.php';

if (isset($_POST)) {
    $sql = "INSERT INTO peserta VALUES ('', '', '', '', '$_POST[email_peserta]','')";
    $dbh->exec($sql);
}

header("location:comming.html");
?>
