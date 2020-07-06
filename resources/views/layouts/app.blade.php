<!doctype html>
<html lang="en">

<head>
  <title>Krzysztof Bubnowski - Psychoterapeutyka</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/animsition.min.css">

  <link href="{{ mix('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in"
    data-animsition-out-class="fade-out">

    <header class="site-header">
      <div class="container">
        <div class="row">
          <div class="col-4 site-logo" data-aos="fade">
            <a href="{{ route('landing') }}" class="animsition-link">
              <h1>Psychoterapeutyka</h1>
              <h3>Krzysztof Bubnowski</h3>
            </a>
          </div>
          <div class="col-8">
            <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-12 justify-content-center">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="{{ route('landing') }}" class="animsition-link">Strona Główna</a></li>
                        <li><a href="{{ route('about') }}" class="animsition-link">Czym się zajmuję?</a></li>
                        {{-- <li><a href="gallery.html" class="animsition-link">Gallery</a></li> --}}
                        {{-- <li><a href="blog.html" class="animsition-link">News</a></li> --}}
                        <li><a href="{{ route('contact') }}" class="animsition-link">Kontakt</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    @yield('hero')

    @yield('content')

    <footer class="section footer-section">
        <div class="top">
            <div class="container">
                <h3>Psychoterapeutyka</h3>
    
                <div>
                    <a href="mailto:example@example.com">example@example.com</a>
                    <p>111 111 111</p>
                    <p>Gabinet psychologiczny znajduje się w:</p>
                    <p>Poznań</p>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <p>&copy; 2020 by Krzysztof Bubnowski</p>
            </div>
        </div>
    </footer>
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/animsition.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
</body>

</html>