<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Profile - SeBat</title>
  <!-- FAVICON -->
  <link href="../assets/img/favicon.png" rel="shortcut icon" />

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="../assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="../assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
  <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="../assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="../assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />



  <!-- FAVICON -->
  <link href="../assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="../assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="index.php">
            <img src="../assets/img/logo/logo-white.png" alt="" class="brand-logo">
            <!--
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
              <defs>
                <style>
                  .cls-1 {
                    fill: url(#linear-gradient);
                  }

                  .cls-2 {
                    fill: url(#linear-gradient-2);
                  }

                  .cls-3 {
                    fill: url(#linear-gradient-3);
                  }
                </style>
                <linearGradient id="linear-gradient" x1="524.06" y1="818.19" x2="524.06" y2="504.87"
                  gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#54f351" />
                  <stop offset="1" stop-color="#08e3af" />
                </linearGradient>
                <linearGradient id="linear-gradient-2" x1="447.94" y1="417.93" x2="839.08" y2="417.93"
                  gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#54f351" />
                  <stop offset="0.62" stop-color="#08e3af" />
                </linearGradient>
                <linearGradient id="linear-gradient-3" x1="310.87" y1="61.23" x2="310.87" y2="497.1"
                  gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#54f351" />
                  <stop offset="1" stop-color="#08e3ce" />
                </linearGradient>
              </defs>
              <path class="cls-1"
                d="M513.78,382.9C508.31,374.81,380,497.18,380,497.18V802.61l288-463.75S531.24,408.74,513.78,382.9Z" />
              <polygon class="cls-2" points="447.94 338.77 447.94 497.1 668.09 338.86 447.94 338.77" />
              <polygon class="cls-3" points="173.81 497.1 447.94 497.1 447.94 61.23 173.81 497.1" />
            </svg>
          -->
            <span class="brand-name"><img src="../assets/img/logo/sebat-bw.png" alt=""></span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub">
              <a class="sidenav-item-link" href="index.php">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="pinjam.php">
                <i class="mdi mdi-swap-horizontal-bold"></i>
                <span class="nav-text">Pinjam</span>
              </a>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="history.php">
                <i class="mdi mdi-history"></i>
                <span class="nav-text">Riwayat</span>
              </a>
            </li>
            <li class="has-sub active">
              <a class="sidenav-item-link" href="profile.php">
                <i class="mdi mdi-account"></i>
                <span class="nav-text">Profile</span>
              </a>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="help.php">
                <i class="mdi mdi-information"></i>
                <span class="nav-text">Bantuan</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </aside>

    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
              <button type="button" name="search" id="search-btn" class="btn btn-flat">
                <i class="mdi mdi-magnify"></i>
              </button>
              <input type="text" name="query" id="search-input" class="form-control"
                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
            </div>
            <div id="search-results-container">
              <ul id="search-results"></ul>
            </div>
          </div>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">

              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="../assets/img/profile.svg" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">User</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="../assets/img/profile.svg" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      User <small class="pt-1">abdus@gmail.com</small>
                    </div>
                  </li>

                  <li>
                    <a href="profile.php">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>


                  <li class="dropdown-footer">
                    <a href="signin.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>


      </header>


      <div class="content-wrapper">
        <div class="content">
          <div class="bg-white border rounded">
            <div class="row no-gutters">
              <div class="col-lg-4 col-xl-3">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                  <div class="card text-center widget-profile px-0 border-0">
                    <div class="card-img mx-auto rounded-circle">
                      <img src="../assets/img/user/u6.jpg" alt="user image">
                    </div>
                    <div class="card-body">
                      <h4 class="py-2 text-dark">User</h4>
                    </div>
                  </div>
                  <hr class="w-100">
                  <div class="contact-info pt-4">
                    <h5 class="text-dark mb-1">Contact Information</h5>
                    <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                    <p>user@mail.com</p>
                    <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                    <p>+62</p>
                    <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                    <p>Des 23, 2020</p>

                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right py-5">
                  <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings" aria-selected="false">Settings</a>
                    </li>
                  </ul>
                  <div class="tab-content px-3 px-xl-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                      <div class="tab-pane-content mt-5">
                        <form>
                          <div class="form-group row mb-6">
                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                            <div class="col-sm-8 col-lg-10">
                              <div class="custom-file mb-1">
                                <input type="file" class="custom-file-input" id="coverImage">
                                <label class="custom-file-label" for="coverImage">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-2">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" value="User">
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" value="">
                              </div>
                            </div>
                          </div>

                          <div class="form-group mb-4">
                            <label for="userName">User name</label>
                            <input type="text" class="form-control" id="userName" value="user">
                            <span class="d-block mt-1">Accusamus nobis at omnis consequuntur culpa tempore saepe
                              animi.</span>
                          </div>

                          <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="user@mail.com">
                          </div>

                          <div class="form-group mb-4">
                            <label for="oldPassword">Old password</label>
                            <input type="password" class="form-control" id="oldPassword">
                          </div>

                          <div class="form-group mb-4">
                            <label for="newPassword">New password</label>
                            <input type="password" class="form-control" id="newPassword">
                          </div>

                          <div class="form-group mb-4">
                            <label for="conPassword">Confirm password</label>
                            <input type="password" class="form-control" id="conPassword">
                          </div>

                          <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>

      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
            <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>

    </div>
  </div>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/plugins/toaster/toastr.min.js"></script>
  <script src="../assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
  <script src="../assets/plugins/charts/Chart.min.js"></script>
  <script src="../assets/plugins/ladda/spin.min.js"></script>
  <script src="../assets/plugins/ladda/ladda.min.js"></script>
  <script src="../assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
  <script src="../assets/plugins/select2/js/select2.min.js"></script>
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="../assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../assets/plugins/jekyll-search.min.js"></script>
  <script src="../assets/js/sleek.js"></script>
  <script src="../assets/js/chart.js"></script>
  <script src="../assets/js/date-range.js"></script>
  <script src="../assets/js/map.js"></script>
  <script src="../assets/js/custom.js"></script>




</body>

</html>