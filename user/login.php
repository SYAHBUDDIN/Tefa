<?php
require_once("../koneksi.php");
if (isset($_POST['login'])) {
  // filter data
  $nama_pengguna = filter_input(INPUT_POST, 'nama_pengguna', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);


  $sql = "SELECT * FROM tb_pengguna WHERE  nama_pengguna=:nama_pengguna OR email=:email";
  $baca = $database->prepare($sql);

  $params = array(
    ':nama_pengguna' => $nama_pengguna,
    ':email' => $nama_pengguna
  );

  $baca->execute($params);

  $user = $baca->fetch(PDO::FETCH_ASSOC);

  if ($user) {
    if (password_verify($password, $user["password"])) {
      // buat session
      session_start();
      if ($user['level'] == "admin") {
        $_session["user"] = $user;
        header("Location: ../admin/dashboard.php");
      }
      if ($user['level'] == "user") {
        $_session["user"] = $user;
        header("Location: dashboard.php");
      }
      if ($user['level'] == "penjual") {
        $_session["user"] = $user;
        header("Location: ../penjual/dashboard.php");
      }
    }
  }
}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Nirwana Retail - HTML5 Bootstrap Template">
  <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no"><!-- Favicon-->
  <link rel="shortcut icon" href="../assets/assets/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="../assets/assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/assets/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../assets/assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="../assets/assets/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../assets/assets/favicons/ms-icon-144x144.png"><!-- PWA primary color-->
  <meta name="theme-color" content="#E91E63">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><!-- Facebook-->
  <meta property="author" content="nirwana">
  <meta property="og:site_name" content="alexstrap.ux-maestro.com">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website"><!-- Twitter-->
  <meta property="twitter:site" content="nirwana.ux-maestro.com">
  <meta property="twitter:domain" content="nirwana.ux-maestro.com">
  <meta property="twitter:creator" content="nirwana">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:image:src" content="../assets/assets/images/logo-retail.png">
  <meta property="og:url" content="nirwana.indisains.com/retail">
  <meta property="og:title" content="retail">
  <meta property="og:description" content="Nirwana Retail - HTML5 Bootstrap Template">
  <meta name="twitter:site" content="nirwana.indisains.com/retail">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="/images/logo-retail.png">
  <meta property="og:image" content="/images/logo-retail.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <title>Skll Station - Login </title><!-- Styles-->
  <!-- Put the 3rd/plugins css here-->
  <link href="../assets/assets/css/vendors/normalize.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/bootstrap.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/magnific-popup.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/materialize.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/hamburger-menu.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/animate.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/animate-extends.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/slick-carousel/slick.css" rel="stylesheet">
  <link href="../assets/assets/css/vendors/slick-carousel/slick-theme.css" rel="stylesheet">
  <link href="../assets/assets/css/styles.css" rel="stylesheet">
</head>

<body>
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.2; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="../assets/assets/images/loading.gif" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content rose roseGold-var" id="main-wrap">
      <div id="register-page">
        <div class="main-wrap">
          <!-- #### HEADER ####-->
          <header class="app-bar header" id="header">
            <div class="container">
              <div class="header-content">
                <nav class="nav-menu flex-grow-1">
                  <div class="logo flex-grow-1 start-mobile">
                    <a href="dashboard.php">
                      <span class="logo-main landscape medium"><img src="../assets/assets/images/logo-retail.png" alt="logo" />Skill Station</span>
                    </a>
                  </div>
                  <nav class="user-menu">
                    <a class="btn primary waves-effect" href="register.php">register</a>

                  </nav>
                </nav>
              </div>
            </div>
          </header><!-- #### END HEADER ####-->

          <!-- ##### FORM #####-->
          <div class="container-general container-front">
            <div class="form-style">
              <div class="page-wrap">
                <div class="container inner-wrap">
                  <div class="auth-frame">
                    <div class="row mb-0">
                      <div class="col-md-6 col-sm-12 px-lg-6 px-2">
                        <div class="card form-box fragment-fadeUp">
                          <div class="form-wrap">
                            <div class="form-style">
                              <div class="head">
                                <h4 class="use-text-title mq-md-up" data-class="use-text-subtitle">Selamat Datang</h4>
                              </div>

                              <form id="login_form" method="POST">
                                <div class="row spacing3 mb-0">
                                  <div class="col-sm-12">
                                    <div class="input-field dark">
                                      <input class="validate" id="email" type="text" name="nama_pengguna" required />
                                      <label for="email">email</label>
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                    <div class="input-field dark">
                                      <input class="validate" id="password" type="password" name="password" required />
                                      <label for="password">Password</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-helper mt-sm-4">
                                  <div class="form-control-label">
                                    <label>
                                      <input class="filled-in secondary" type="checkbox" />
                                      <span>Remember</span>
                                    </label>
                                  </div>
                                  <!-- <a class="btn-flat button-link" href="#">Forgot Password</a> -->
                                </div>
                                <div class="btn-area">
                                  <button class="btn secondary btn-large block waves-effect" type="submit" name="login">Login</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="hidden-sm-down">
                          <div class="greeting">
                            <h4 class="use-text-title2 use-text-primary pb-2">SILAHKAN LOGIN</h4>
                            <h6 class="use-text-subtitle2">Agar Anda Dapat Mengakses Web kami Lebih lanjut</h6>
                            <div class="img">
                              <img class="img-2d3d" src="../assets/assets/images/retail/login_2d@2x.png" data-2d="../assets/assets" data-3d="../assets/assets/images/retail/login_2d@2x.png" alt="login" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- ##### END FORM #####-->


        </div>
      </div>
    </div>
  </div><!-- Scripts-->
  <!-- Put the 3rd/plugins javascript here-->
  <script src="../assets/assets/js/vendors/jquery.min.js"></script>
  <script src="../assets/assets/js/vendors/bootstrap.min.js"></script>
  <script src="../assets/assets/js/vendors/enquire.min.js"></script>
  <script src="../assets/assets/js/vendors/jquery.form-validator.min.js"></script>
  <script src="../assets/assets/js/vendors/jquery.touchSwipe.min.js"></script>
  <script src="../assets/assets/js/vendors/jquery.magnific-popup.min.js"></script>
  <script src="../assets/assets/js/vendors/pace.min.js"></script>
  <script src="../assets/assets/js/vendors/slick.min.js"></script>
  <script src="../assets/assets/js/vendors/wow.min.js"></script>
  <script src="../assets/assets/js/vendors/jquery.navScroll.min.js"></script><!-- This assets are not avalaible in npm.js or it has been costumized-->
  <script src="../assets/assets/js/vendors/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="../assets/assets/js/vendors/materialize.js"></script>
  <script src="../assets/assets/js/scripts.js"></script>
  <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
</body>

</html>