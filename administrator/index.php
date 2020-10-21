<?php
  session_start();

  if (empty($_SESSION["tiket_admin"])) {
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<!-- head.php -->
<?php include "my-page/head.php"; ?>

<body id="page-top">

  <!-- navigasi.php -->
  <?php include "my-page/navigasi.php"; ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "my-page/sidebar.php"; ?>



    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- homepage -->
        <div class="row">
          <div class="col-md-12">
            <?php 
             if (isset($_GET["tproduk"])){
              include "input-produk.php";
             } else if(isset($_GET["lproduk"])){
              include "tampil-produk.php";
             } else if(isset($_GET["edit_id"])){
              include "edit-produk.php";
             } else if(isset($_GET["lpembeli"])){
              include "tampil-pembeli.php";
             } else if(isset($_GET["id_status"])){
              include "edit-bayar.php";
             } else if(isset($_GET["detail_id"])){
              include "detail_pembeli.php";
             } else if(isset($_GET["lbukti"])){
              include "tampil-bukti.php";
             } else {
              echo "Selamat datang!";
             }

            ?>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Alvendra <?php echo date("Y"); ?></span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- footer.php -->
  <?php include "my-page/footer.php"; ?>

</body>

</html>
