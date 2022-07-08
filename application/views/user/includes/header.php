


<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <title>Smiiyi.Az</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="<?php echo base_url('assets/user/img/') ?>favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/user/img/') ?>apple-touch-icon.png" />
    <link href="<?php echo base_url('assets/user/css/') ?>darkmode.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i"
      rel="stylesheet"
    />

    <!-- Custom & Default Styles -->
    <link href="<?php echo base_url('assets/user/css/') ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/') ?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/') ?>carousel.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/') ?>animate.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/') ?>style.css" rel="stylesheet">


  </head>

  <body>
    <div id="preloader">
      <img class="preloader" src="<?php echo base_url('assets/user/img/') ?>loader.gif" alt="" />
    </div>
    <!-- end loader -->

    <div id="wrapper">
      <div
        class="modal fade"
        id="login-modal"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
        style="display: none"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Begin # DIV Form -->
            <div id="div-forms">
              <form id="login-form">
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span class="flaticon-add" aria-hidden="true"></span>
                </button>
                <div class="modal-body">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="What you are looking for?"
                    required
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <header class="header header-normal">
        <div class="nav-container">
          <nav class="navbar navbar-default yamm">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#navbar"
                aria-expanded="false"
                aria-controls="navbar"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="logo-normal">
                <a class="navbar-brand" href="<?php echo base_url('index') ?>"
                  ><img
                    src="<?php echo base_url('assets/user/img/') ?>logo.png"
                    width="140"
                    alt=""
                    style="margin-top: -33px !important"
                /></a>
              </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url('index') ?>">Ana Səhifə</a></li>
                <li class="dropdown hassubmenu">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                    >Haqqımızda <span class="fa fa-angle-down"></span
                  ></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url('asoiu') ?>">ADNSU Haqqında</a></li>
                    <li><a href="<?php echo base_url('smiiyi') ?>">SMİİYİ Haqqında</a></li>
                    <li><a href="<?php echo base_url('rector') ?>">Rektor Haqqında</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url('announcement') ?>">Elanlar</a></li>
                <li class="dropdown hassubmenu">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                    >Müəllimlər <span class="fa fa-angle-down"></span
                  ></a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="../teachers/"
                        >Fövqəladə hallar və həyat fəaliyətinin təhlükəsizliyi
                      </a>
                    </li>
                    <li>
                      <a href="../teachers/"> İnformasiya texnologiyaları </a>
                    </li>
                    <li>
                      <a href="../teachers/">Elektroenergetika mühəndisliyi </a>
                    </li>
                    <li><a href="../teachers/"> Kimya mühəndisliyi </a></li>
                    <li>
                      <a href="../teachers/"
                        >Texnoloji maşın və avadanlıqlar mühəndisliyi
                      </a>
                    </li>
                    <li><a href="../teachers/">Neft-qaz mühəndisliyi </a></li>
                    <li>
                      <a href="../teachers/"
                        >Neft-qaz qurğuları mühəndisliyi
                      </a>
                    </li>
                    <li>
                      <a href="../teachers/"
                        >Sənayenin təşkili və idarə edilməsi
                      </a>
                    </li>
                    <li><a href="../teachers/">Geofizika mühəndisliyi </a></li>
                  </ul>
                </li>
                <li class="dropdown hassubmenu">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                    >Təkrar Ali Təhsil <span class="fa fa-angle-down"></span
                  ></a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="<?php echo base_url('tekrar_tehsil_tedris_plani') ?>">Tədris Planları</a
                      >
                    </li>
                    <li><a href="onlayn-mur">Onlayn Müraciət</a></li>
                    <li>
                      <a href="<?php echo base_url('tekrar_tehsil_ixtisaslar') ?>">İxtisasların Siyahısı</a
                      >
                    </li>
                    <li>
                      <a href="elektron-jurnal">Müəllimin ELektron Jurnalı</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown hassubmenu">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                    >Yenidən Hazırlanma <span class="fa fa-angle-down"></span
                  ></a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="<?php echo base_url('yeni_h_tedris_plani') ?>"
                        >Tədris Planları</a
                      >
                    </li>
                    <li>
                      <a href="<?php echo base_url('yeni_h_tedris_qrafiki') ?>"
                        >Tədris Qrafikləri</a
                      >
                    </li>
                    <li>
                      <a
                        href="<?php echo base_url('yeni_hazir_imtahan_sual') ?>"
                        >Dövlət İmtahan Sualları</a
                      >
                    </li>
                    <li>
                      <a href="<?php echo base_url('yh_ixtisaslar') ?>"
                        >İxtisasların Siyahısı</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="dropdown hassubmenu">
                  <a
                    href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                    >Əlaqə<span class="fa fa-angle-down"></span
                  ></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url('contact') ?>">Əlaqə Məlumatları</a></li>
                    <li>
                      <a href="<?php echo base_url('uni_admission')?>">Universitetə Qəbul</a>
                    </li>
                    <li>
                      <a href="komputer-hazirligi"
                        >Kompüter Hazırlığı üçün Elektron Qeydiyyat</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="iconitem">
                  <a class="shopicon" href="<?php echo base_url('login') ?>"
                    ><button class="btn-nav">İstifadəçi Girişi</button>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>