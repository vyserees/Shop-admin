<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo APP_NAME ?></title>
    <!--Jquery library-->
    <script src="/assets/js/jquery-1.11.2.min.js"></script>
    

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="/assets/css/style.css" rel="stylesheet">
    
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <header>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p><?=date('d.m.Y.')?></p>
                        </div>
                        <div class="col-lg-6">
                            <a href="/logout" class="btn btn-danger pull-right btn-sm">Odlogujte se</a>
                        </div>
                    </div>
                </div>                
            </div>
        </header>
      <nav>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="menubar">
                          <ul>
                              <li><a href="/pocetna">Pocetna</a></li>
                              <li class="menu-drop"><a href="/porudzbine">Porudzbine</a>
                                  <ul class="submenu" hidden="">
                                      <li><a href="/porudzbine">Pregled</a></li>
                                      <li><a href="/kreiraj-sablon">Kreiraj sablon</a></li>
                                  </ul>
                              </li>
                              <li class="menu-drop"><a href="/proizvodi">Proizvodi</a>
                                  <ul class="submenu" hidden="">
                                      <li><a href="/proizvodi">Pregled</a></li>
                                      <li><a href="/dodaj-novi">Dodaj novi</a></li>
                                      <li><a href="/karakteristike">Karakteristike</a></li>
                                  </ul>
                              </li>
                              <li class="menu-drop"><a href="/multimedija">Multimedija</a>
                                  <ul class="submenu" hidden="">
                                      <li><a href="/slike">Slike</a></li>
                                      <li><a href="/video">Video</a></li>
                                      <li><a href="/slajderi">Slajderi</a></li>
                                  </ul>
                              </li>
                              <li class="menu-drop"><a href="/blokovi">Blokovi</a>
                                  <ul class="submenu" hidden="">
                                      <li><a href="/upravljanje-blokovima">Upravljanje blokovima</a></li>
                                      <li><a href="/filteri">Filteri</a></li>
                                      <li><a href="/vidzeti">Vidzeti</a></li>
                                      <li><a href="/ostalo">Ostalo</a></li>
                                  </ul>
                              </li>
                              <li class="menu-drop"><a href="/stranice">Stranice</a>
                                  <ul class="submenu" hidden="">
                                      <li><a href="/pocetna-strana">Pocetna strana</a></li>
                                      <li><a href="/lista-proizvoda">Lista proizvoda</a></li>
                                      <li><a href="/singl-proizvod">Singl proizvod</a></li>
                                      <li><a href="/korpa-placanje">Korpa/placanje</a></li>
                                      <li><a href="/info-strane">Info strane</a></li>
                                  </ul>
                              </li>
                              <li><a href="/kupci">Kupci</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
   
    <!-- Begin page content -->
    <div class="container">
        