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
  <title>Retail - Register </title><!-- Styles-->
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
                    <a href="index.html">
                      <span class="logo-main landscape medium"><img src="../assets/assets/images/logo-retail.png" alt="logo"/>Retail</span>
                    </a>
                  </div>
                  <nav class="user-menu">
                    <a class="btn primary waves-effect" href="login.html">Login</a>
                    <span class="spacer vertical-divider show-md-up"></span>
                    <div class="menu-setting">
                      <div class="setting">
                        <button class="btn btn-icon waves-effect btn-small dropdown-trigger ma-1" data-target="dropdown_config" data-align="left" type="button">
                          <i class="icon material-icons" id="setting_icon">settings</i>
                        </button>
                        <div class="dropdown-content setting" id="dropdown_config">
                          <ul class="collection with-header">
                            <li class="collection-header">theme mode</li>
                            <li class="collection-item no-hover pl-4">
                              <div class="flex-menu">
                                <div class="switch">
                                  <label>
                                    light
                                    <input id="theme_switcher" type="checkbox"><span class="lever"></span>
                                    dark
                                  </label>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="dropdown-divider"></div>
                          <ul class="collection with-header lang-menu" id="lang_menu">
                            <li class="collection-header">language</li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a data-lang="ar" href="#">
                                <div class="flag circle"><i class="ar"></i></div>
                                <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿العربيّة</span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a data-lang="de" href="#">
                                <div class="flag circle"><i class="de"></i></div>
                                <span class="content lang-opt text-truncate">Deutsch</span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a data-lang="en" href="#">
                                <div class="flag circle"><i class="en"></i></div>
                                <span class="content lang-opt text-truncate">English</span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a data-lang="id" href="#">
                                <div class="flag circle"><i class="id"></i></div>
                                <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿Bahasa Indonesia</span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a data-lang="pt" href="#">
                                <div class="flag circle"><i class="pt"></i></div>
                                <span class="content lang-opt text-truncate">󠁥󠁮󠁧󠁿Português</span>
                              </a>
                            </li>
                            <li class="collection-item lang-list waves-effect avatar">
                              <a data-lang="zh" href="#">
                                <div class="flag circle"><i class="zh"></i></div>
                                <span class="content lang-opt text-truncate">简体中文</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
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
                                <h4 class="use-text-title mq-md-up" data-class="use-text-subtitle">Create new account</h4>
                              </div>
                              <div class="socmed-side-login">
                                <button class="btn navi-btn waves-effect"><i class="ion-social-facebook left"></i>Facebook</button>
                                <button class="btn blue-btn waves-effect"><i class="ion-social-twitter left"></i>Twitter</button>
                                <button class="btn red-btn waves-effect"><i class="ion-social-google left"></i>Google</button>
                              </div>
                              <div class="separator">
                                <p>Or register with email</p>
                              </div>
                              <form id="register_form">
                                <div class="row spacing3 mb-0">
                                  <div class="col-sm-12">
                                    <div class="input-field dark">
                                      <input class="validate" id="name" type="text" name="name" required />
                                      <label for="name">Name? *</label>
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                    <div class="input-field dark">
                                      <input class="validate" id="email" type="email" name="email" required />
                                      <label for="email">Email? *</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                    <div class="input-field dark mq-md-up" data-class="me-2">
                                      <input class="validate" id="password" type="password" name="password" required />
                                      <label for="password">Password</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12">
                                  </div>
                                </div>
                                <div class="btn-area">
                                  <div class="form-helper">
                                    <div class="form-control-label">
                                      <label><input class="filled-in secondary" type="checkbox" required /><span>I have read and accept the Terms of <a class="link" href="#">Service &amp; Privacy Policy *</a></span></label>
                                    </div>
                                  </div>
                                  <div class="mt-4"><button class="btn secondary btn-large waves-effect" type="submit">Continue</button></div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <div class="hidden-sm-down">
                          <div class="greeting">
                            <h4 class="use-text-title2 use-text-primary pb-2">Just register to join with us</h4>
                            <h6 class="use-text-subtitle2">A platform with efficient integration of many features and so much more</h6>
                            <div class="img">
                              <img class="img-2d3d" src="../assets/assets/images/retail/register_2d@2x.png" data-2d="../assets/assets" data-3d="../assets/assets/images/retail/register_2d@2x.png" alt="registes" />
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

          <!-- ##### FOOTER #####-->
          <div id="footer">
            <footer class="footer-sitemap">
              <div class="container mq-sm-down" data-class="fixed-width">
                <div class="row">
                  <div class="col-md-3 col-sm-12 pa-lg-4 logo-area">
                    <div class="logo">
                      <span class="logo-main landscape medium"><img src="../assets/assets/images/logo-retail.png" alt="logo"/>Retail</span>
                    </div>
                    <p class="body-2">Reimagine how you sell with Sales Apps. We help market leaders transform their business.</p>
                    <p class="body-2 hidden-sm-down">&copy; Nirwana Theme 2022</p>
                  </div>
                  <div class="col-md-6 col-sm-12 pa-4">
                    <ul class="show-sm-down collapsible">
                      <li class="accordion-content">
                        <div class="collapsible-header">
                          <h6 class="title">Company</h6><i class="material-icons right arrow">expand_more</i>
                        </div>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#history">History</a></li>
                            <li><a href="#contact-us">Contact us</a></li>
                            <li><a href="#locations">Locations</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="accordion-content">
                        <div class="collapsible-header">
                          <h6 class="title">Resources</h6><i class="material-icons right arrow">expand_more</i>
                        </div>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="#resource">Resource</a></li>
                            <li><a href="#resource-name">Resource name</a></li>
                            <li><a href="#another-resource">Another resource</a></li>
                            <li><a href="#final-resource">Final resource</a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="accordion-content">
                        <div class="collapsible-header">
                          <h6 class="title">Legal</h6><i class="material-icons right arrow">expand_more</i>
                        </div>
                        <div class="collapsible-body">
                          <ul>
                            <li><a href="#privacy-policy">Privacy policy</a></li>
                            <li><a href="#terms-of-use">Terms of use</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                    <div class="row show-md-up justify-content-around">
                      <div class="col pa-4 site-map-item">
                        <h6 class="title mb-4">Company</h6>
                        <ul>
                          <li><a href="#team">Team</a></li>
                          <li><a href="#history">History</a></li>
                          <li><a href="#contact-us">Contact us</a></li>
                          <li><a href="#locations">Locations</a></li>
                        </ul>
                      </div>
                      <div class="col pa-4 site-map-item">
                        <h6 class="title mb-4">Resources</h6>
                        <ul>
                          <li><a href="#resource">Resource</a></li>
                          <li><a href="#resource-name">Resource name</a></li>
                          <li><a href="#another-resource">Another resource</a></li>
                          <li><a href="#final-resource">Final resource</a></li>
                        </ul>
                      </div>
                      <div class="col pa-4 site-map-item">
                        <h6 class="title mb-4">Legal</h6>
                        <ul>
                          <li><a href="#privacy-policy">Privacy policy</a></li>
                          <li><a href="#terms-of-use">Terms of use</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 pa-4">
                    <div class="socmed">
                      <a class="btn btn-icon waves-effect"><span class="ion-social-facebook icon"></span></a>
                      <a class="btn btn-icon waves-effect"><span class="ion-social-twitter icon"></span></a>
                      <a class="btn btn-icon waves-effect"><span class="ion-social-instagram icon"></span></a>
                      <a class="btn btn-icon waves-effect"><span class="ion-social-linkedin icon"></span></a>
                    </div>
                    <div class="select-lang select-outlined">
                      <select class="select" id="lang_select">
                        <option value="ar">󠁥󠁮󠁧󠁿العربيّة</option>
                        <option value="de">Deutsch</option>
                        <option value="en" selected>English</option>
                        <option value="id">󠁥󠁮󠁧󠁿Bahasa Indonesia</option>
                        <option value="pt">󠁥󠁮󠁧󠁿Português</option>
                        <option value="zh">简体中文</option>
                      </select>
                    </div>
                    <p class="body-2 mt-5 text-center hidden-md-up">&copy; Nirwana Theme 2022</p>
                  </div>
                </div>
              </div>
            </footer>
          </div><!-- ##### END FOOTER #####-->
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