<?php
include 'includes/koneksi.php';

if (isset($_POST)) {
    $sql = "INSERT INTO sponsor VALUES ('', '', '', '', '$_POST[email_sp]')";
    $dbh->exec($sql);
}

header("location:sponsorship.html");
?>
