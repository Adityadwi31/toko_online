<?php
include "../koneksi.php";

if(isset($_POST["submit"])) {
    $nama=$_POST['nama_pelanggan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $foto = basename($_FILES["foto_pelanggan"]["name"]);
    $target_dir = "../images/pelanggan/";
    $target_file = $target_dir . basename($_FILES["foto_pelanggan"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>"; 
    } elseif(empty($alamat)){
        echo "<script>alert('alamat pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('no telepon pelanggan tidak boleh kosong');location.hrepelanggan.php';</script>"; 
    } elseif(empty($foto)){
        echo "<script>alert('foto pelanggan tidak boleh kosong');location.href='pelanggan.php';</script>"; 
    } else {
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["foto_pelanggan"]["tmp_name"]);
        if($check == false) {
            echo "<script>alert('File yang dipilih bukan foto.');location.href='pelanggan.php';</script>";
            $uploadOk = 0;
        } else {
            $uploadOk = 1;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<script>alert('File foto sudah ada.');location.href='pelanggan.php';</script>";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto_pelanggan"]["size"] > 1000000) {
            echo "<script>alert('File foto terlalu besar');location.href='pelanggan.php';</script>";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='pelanggan.php';</script>";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('File foto tidak terupload');location.href='pelanggan.php';</script>";  
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto_pelanggan"]["tmp_name"], $target_file)) {

                $p = md5($password);
                $sql = "INSERT INTO `pelanggan`(`nama_pelanggan`, `username`, `password`, `alamat`, `telp`, `foto_pelanggan`) VALUES ('$nama', '$username', '$p', '$alamat', '$telp', '$foto')";
                
                $insert=mysqli_query($conn, $sql);

                if($insert) {
                    echo "<script>alert('Sukses menambahkan pelanggan');location.href='pelanggan.php';</script>";
                } else {
                    echo "<script>alert('Gagal menambahkan pelanggan');location.href='pelanggan.php';</script>";
                }
            } else {
                echo "<script>alert('Error saat upload file foto');location.href='pelanggan.php';</script>";
            }
        }

    }
}
?>