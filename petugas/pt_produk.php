<?php
include "../koneksi.php";

if(isset($_POST["submit"])) {
    $nama=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $foto = basename($_FILES["foto_produk"]["name"]);
    $target_dir = "../images/produk/";
    $target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(empty($nama)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='produk.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi produk tidak boleh kosong');location.href='produk.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga produk tidak boleh kosong');location.href='produk.php';</script>"; 
    } elseif(empty($foto)){
        echo "<script>alert('foto produk tidak boleh kosong');location.href='produk.php';</script>"; 
    } else {
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
        if($check == false) {
            echo "<script>alert('File yang dipilih bukan foto.');location.href='produk.php';</script>";
            $uploadOk = 0;
        } else {
            $uploadOk = 1;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<script>alert('File foto sudah ada.');location.href='produk.php';</script>";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto_produk"]["size"] > 500000) {
            echo "<script>alert('File foto terlalu besar');location.href='produk.php';</script>";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<script>alert('Hanya menerima file foto JPG, JPEG, PNG & GIF');location.href='produk.php';</script>";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('File foto tidak terupload');location.href='produk.php';</script>";  
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
                
                $query = "INSERT INTO `produk` (`nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES ('$nama', '$deskripsi', '$harga', '$foto')";
                
                $insert=mysqli_query($conn, $query);

                if($insert) {
                    echo "<script>alert('Sukses menambahkan produk');location.href='produk.php';</script>";
                } else {
                    echo "<script>alert('Gagal menambahkan produk');location.href='produk.php';</script>";
                }
            } else {
                echo "<script>alert('Error saat upload file foto');location.href='produk.php';</script>";
            }
        }

    }
}
?>