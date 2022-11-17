<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="css/style.css"> <!-- End layout styles -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images/logo.svg">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Login to continue.</h6>
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="LOGIN"></input>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
<!-- proses login -->
<?php

if ($_POST) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  if (empty($username)) {
    echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
  } elseif (empty($password)) {
    echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
  } else {
    include "koneksi.php";

    $sql = "SELECT * FROM `petugas` WHERE `username` = '$username' and `password` = '$password'";

    $qry_login = mysqli_query($conn, $sql);

    if (mysqli_num_rows($qry_login) > 0) {
      $dt_login = mysqli_fetch_array($qry_login);
      session_start();

      $_SESSION['id_petugas'] = $dt_login['id_petugas'];
      $_SESSION['nama_petugas'] = $dt_login['nama_petugas'];
      $_SESSION['level'] = $dt_login['level'];
      $_SESSION['status_login'] = true;

      header("location: petugas/home.php");
    } else {
      $sql = "SELECT * FROM `pelanggan` WHERE `username` = '$username' and `password` = '$password'";

      $qry_login = mysqli_query($conn, $sql);

      if (mysqli_num_rows($qry_login) > 0) {
        $dt_login = mysqli_fetch_array($qry_login);
        session_start();

        $_SESSION['id_pelanggan'] = $dt_login['id_pelanggan'];
        $_SESSION['nama_pelanggan'] = $dt_login['nama_pelanggan'];
        $_SESSION['level'] = $dt_login['level'];
        $_SESSION['status_login'] = true;

        header("location: pelanggan/home.php");
      } else {
        echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
      }
    }
  }
}
?>
<!-- akhir proses login -->