<?php
if ($_POST) {

    $id_petugas = $_POST['id_petugas'];
    $nama = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];

    if (empty($nama)) {
        echo "<script>alert('Name cannot be empty');location.href='u_petugas.php?id_petugas=" . $id_petugas . "';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username cannot be empty');location.href='u_petugas.php?id_petugas=" . $id_petugas . "';</script>";
    } elseif (empty($level)) {
        echo "<script>alert('Password cannot be empty');location.href='u_petugas.php?id_petugas=" . $id_petugas . "';</script>";
    } else {
        include "../koneksi.php";
        $update = mysqli_query($conn, "update petugas set nama_petugas='" . $nama . "',username='" . $username . "', level='" . $level . "' where id_petugas= '" . $id_petugas . "' ") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update prtugas');location.href='petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal update petugas');location.href='petugas.php;</script>";
        }
    }

}?>`