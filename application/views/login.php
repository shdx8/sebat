<!doctype html>
<html lang="en">

<head>
  <!-- meta  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url();?>/assets/img/logo/favicon.png" />
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url();?>/assets/css/lrs.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <!--logo & title-->
  <title>Masuk</title>
</head>

<body style="background-color: #02a15c;">
  <!-- nav -->
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
        <!-- <div class="navbar-nav ml-auto">
          <a class="nav-link active" href="login.php">Masuk</a>
          <a class="nav-link" href="daftar.php">Daftar</a>
        </div> -->
      </div>
    </div>
  </nav>
  <!-- end nav -->
  <!-- content -->
  <div class="container content">
    <div class="row justify-content">
      <div class="col-lg-6">
        <div class="about-img wow fadeInUp img-reset" data-wow-delay=".5s">
          <img src="<?= base_url();?>/assets/img/form/login.svg" alt="">
        </div>
      </div>
      <div class="col-lg-6 kanan">
        <form class="user" action="<?= base_url('Auth/cek_log'); ?>" method="POST">
          <h1>Masuk</h1>
          <div class="wrapp">
            <div class="input-wrap form-group">
              <label for="">Masukkan Username Anda</label>
              <input type="text" class="form-control form-control-user" name="txt_user" id="username" autocomplete="off" required>
            </div>
            <div class="input-wrap form-group">
              <label for="">Masukkan Password Anda</label>
              <input type="password" class="form-control form-control-user" name="txt_pass" id="password" autocomplete="off" required>
            </div>
          </div>
          <!-- <p class="text-center"><a href="reset.php">Lupa Password?</a></p> -->
          <input type="submit" value="Login" class="btn-login" name="btn_log">
										
        </form>
      </div>
    </div>
    <div class="custom-shape-divider-bottom-1608283343">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path
          d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
          class="shape-fill"></path>
      </svg>
    </div>
  </div>
  <!-- end content -->
</body>

</html>