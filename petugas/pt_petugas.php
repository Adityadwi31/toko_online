<?php
include "../koneksi.php";

if(isset($_POST["submit"])) {
    $nama=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    if(empty($nama)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username petugas tidak boleh kosong');location.href='petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password petugas tidak boleh kosong');location.href='petugas.php';</script>"; 
    } elseif(empty($level)){
        echo "<script>alert('level petugas tidak boleh kosong');location.href='petugas.php';</script>"; 
    } else {
        
        $p = md5($password);      
        $sql = "INSERT INTO `petugas` (`nama_petugas`, `username`, `password`, `level`) VALUES ('$nama', '$username', '$p', '$level')";
                
        $insert=mysqli_query($conn, $sql);

        if($insert) {
            echo "<script>alert('Sukses menambahkan petugas');location.href='petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='petugas.php';</script>";
        }
    }
}
?>