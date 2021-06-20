<!doctype html>
<html lang="en">

<head>
  <!-- meta  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url();?>/assets/img/logo/favicon.png" />
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/css/lrs.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <!--logo & title-->
  <title>Daftar</title>
</head>

<body  style="background-color: #02a15c;">
  <!-- nav -->
  <!--
  <nav class="navbar navbar-expand-lg navbar-light nav-block">
  -->

  <nav class="navbar navbar-expand-lg navbar-light nav-block">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="<?= base_url();?>/assets/img/logo/sebat-bw.png" alt="Logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link" href="login.php">Masuk</a>
          <a class="nav-link active" href="daftar.php">Daftar</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav -->

  <!-- content -->
  <div class="container content content-daftar">
    <div class="row justify-content">
      <div class="col-lg-6">
        <div class="about-img wow fadeInUp img-reset" data-wow-delay=".5s">
          <img src="<?= base_url();?>/assets/img/form/register.svg" alt="">
        </div>
      </div>
      <div class="col-lg-6 kanan">
        <form action="<?= base_url('Auth/datfar'); ?>" method="POST" class="input-form daftar">
          <h1>Daftar</h1>
          <div class="wrapp wrap-daftar">
            <!-- <div class="input-wrap">
              <label for="">Masukkan Nama Lengkap Anda</label>
              <input type="text" class="" name="username" autocomplete="off">
            </div> -->
            <div class="input-wrap">
              <label for="">Masukkan Email Anda</label>
              <input type="email" name="email" autocomplete="off" id="email" required>>
            </div>
            <div class="input-wrap">
              <label for="">Buat Username Baru</label>
              <input type="text" name="text" autocomplete="off" id="username" required>>
            </div>
            <div class="input-wrap">
              <label for="">Masukkan Password Anda</label>
              <input type="password" name="password" autocomplete="off" id="password" required>>
            </div>
            <div class="input-wrap">
              <label for="">retype Password Anda</label>
              <input type="password" name="repassword" autocomplete="off" id="repassword" required>
            </div>
          </div>
          <input type="submit" value="login" class="btn-login">
        </form>
      </div>
    </div>
   
  </div>
  <!-- end content -->
</body>

</html>