<?php
include "../header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>toko_online</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../css/style.css"> <!-- End layout styles -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="home.php">
          <img src="../images/logo.svg" alt="logo" class="logo-dark" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="home.php"><img src="../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Tampil Data</h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">
          <form class="search-form d-none d-md-block" action="#">
            <i class="icon-magnifier"></i>
            <input type="search" class="form-control" placeholder="Search Here" title="Search here">
          </form>
          <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
          <li class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="font-weight-light small-text"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle ml-2" src="../images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> <?=$_SESSION['nama_petugas']?> </span></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3"><?=$_SESSION['nama_petugas']?></p>
                <p class="font-weight-light text-muted mb-0"><?=$_SESSION['level']?>@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
              <a href="../logout.php" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="../images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name"><?=$_SESSION['nama_petugas']?></p>
                <p class="designation">Administrator</p>
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <span class="menu-title">Dashboard</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item nav-category"><span class="nav-link">Akses</span></li>
          <li class="nav-item">
            <a class="nav-link" href="produk.php">
              <span class="menu-title">produk</span>
              <i class="icon-grid menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pelanggan.php">
              <span class="menu-title">Pelanggan</span>
              <i class="icon-grid menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="petugas.php">
              <span class="menu-title">petugas</span>
              <i class="icon-grid menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <!-- tampil -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Petugas</h4>
                  <?php
                  $id = $_GET['id_petugas'];
                  $sql = "SELECT * FROM `petugas` WHERE `id_petugas` = $id";
                  $qry_get_petugas = mysqli_query($conn, $sql);

                  $dt_petugas = mysqli_fetch_array($qry_get_petugas);
                  $level = $dt_petugas['level'];
                  ?>

                  <div class="card">
                    <div class="card-body">
                      <form class="forms-sample" action="pu_petugas.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_petugas" value="<?= $dt_petugas['id_petugas'] ?>">
                        <div class="form-group row">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                            <input type="text" name="nama_petugas" value="<?= $dt_petugas['nama_petugas'] ?>" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row" method="post">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" value="<?= $dt_petugas['username'] ?>" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row" method="post">
                          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Level</label>
                          <div class="col-sm-9">
                            <?php
                            $arr_level = array('Admin' => 'Admin', 'Manager' => 'Manager', 'Petugas' => 'Petugas');
                            ?>
                            <select name="level" class="form-control">
                              <option></option>
                              <?php foreach ($arr_level as $key_level => $val_level) :
                                if ($key_level == $dt_petugas['level']) {
                                  $selek = "selected";
                                } else {
                                  $selek = "";
                                }
                              ?>
                                <option value="<?= $key_level ?>" <?= $selek ?>><?= $val_level ?></option>
                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>
                        <input type="submit" value="Ubah Pelanggan" class="btn btn-primary  mr-2">
                        <a href="petugas.php" class="btn btn-">Cancel</a>
                      </form>
                    </div>
                    <br>
                  </div>
                  <!-- form tambah -->
                  <div class="modal fade" id="tambah_pelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <form class="forms-sample" action="pt_pelanggan.php" method="post" enctype="multipart/form-data">
                              <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                  <input type="text" name="nama_pelanggan" class="form-control form-control-sm" id="exampleInputUsername2" placeholder="Nama">
                                </div>
                              </div>
                              <div class="form-group row" method="post">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                  <input type="text" name="username" class="form-control form-control-sm" id="exampleInputUsername2" placeholder="Username">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="text" name="password" class="form-control form-control-sm" id="exampleInputUsername2" placeholder="Password">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                  <input type="text" name="alamat" class="form-control form-control-sm" id="exampleInputUsername2" placeholder="Alamat">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Telepon</label>
                                <div class="col-sm-9">
                                  <input type="text" name="telp" class="form-control form-control-sm" id="exampleInputUsername2" placeholder="Telepon">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                  <input type="file" name="foto_pelanggan" class="form-control form-control-sm" id="exampleInputUsername2" placeholder="Foto">
                                </div>
                              </div>
                              <input type="submit" name="submit" value="Tambah" class="btn btn-primary mr-2">
                              <button data-dismiss="modal" class="btn btn-light">Cancel</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- akhir form tambah -->
                </div>
              </div>
              <!-- akhir tampil -->
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>