<?php

  session_start();

  if (isset($_POST["masukadmin"])) {
    $us = $_POST["userku"];
    $ps = $_POST["passku"];

    //menyertakan file koneksi
    include "koneksi.php";

    //menyocokkan inputan user di tabel (username/password)
    $sql = "SELECT * FROM tbl_admin WHERE username='$us' AND password='$ps'";
    $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

    //mengecek apakah tabel di database ada data

    if(mysqli_num_rows($query) > 0){
      //tarik data
      $data = mysqli_fetch_array($query);

      //jika ada data, maka berikan hak akses
      $_SESSION["tiket_admin"] = $data;

      //arahkan ke index
      header("location: index.php");

    } else {
      //jika login gagal, maka arahkan ke halaman ini sendiri(login)
      //dengan menampilkan pesan error
      header("location: login.php?login=failed");
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<!-- head.php -->
<?php include "my-page/head-login.php"; ?>


<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        


        <form action="" method="post">
          <!-- Notifikasi Login -->
          <?php
            if (isset($_GET["login"])) {?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Login Gagal!</strong> Username /  Password yang anda masukan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            <?php }
          ?>
          
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputUser" name="userku" class="form-control" placeholder="Masukkan Username" required="required" autofocus="autofocus">
              <label for="inputUser">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="passku" class="form-control" placeholder="Masukkan Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="masukadmin">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- footer-login.php -->
  <?php include "my-page/footer-login.php"; ?>

</body>

</html>
