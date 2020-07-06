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
            <a href="index.html" class="animsition-link">
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
                        <li class="active"><a href="index.html" class="animsition-link">Strona Główna</a></li>
                        <li><a href="/about" class="animsition-link">O mnie</a></li>
                        {{-- <li><a href="gallery.html" class="animsition-link">Gallery</a></li> --}}
                        {{-- <li><a href="blog.html" class="animsition-link">News</a></li> --}}
                        <li><a href="contact.html" class="animsition-link">Contact</a></li>
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

    @if (Request::path() == '/')
    <section class="site-hero overlay" style="background-image: url(img/hero_1.jpg)">
        <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center">
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">
                Odnajdź balans w swoim życiu.
            </p>
            </div>
        </div>
        </div>
    </section>
    <!-- END section -->
    @else
    <section class="site-hero overlay page-inside" style="background-image: url(images/hero_2.jpg)">
        <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">About Us</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">
                A free template by <a href="#" target="_blank">Colorlib</a>. Download and share!
            </p>
            </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
        </div>
    </section>
    <!-- END section -->
    @endif



    <section class="section" id="next-section">
      <div class="container">
        <div class="row align-items-center" style=" position: relative; z-index:1">
          <div class="col-lg-6 mb-4" data-aos="fade-up">
            <p>
              <img src="img/img_1_long.jpg" alt="Image" class="img-fluid">
            </p>
          </div>
          <div class="col-lg-6 pl-lg-5" data-aos="fade-up">
            <h2 class="mb-2 intro-header">Witam na mojej stronie internetowej,</h2>
            <h4 class="mb-4 intro-header">nazywam się Krzysztof Bubnowski,</h4>
            <p>
              jestem psychoterapeutą. Zawód, który obecnie wykonuję zrodził się z pasji.
            </p>
            <p>
              Po ukończeniu studiów wyższych miałem potrzebę poszukiwania takiej dziedziny wiedzy, która pozwoli mi
              robić to, co przynosić mi będzie wewnętrzną satysfakcję.
            </p>
            <p>
              Prowadzona przeze mnie psychoterapia podlega stałej superwizji, a wiedzę poszerzam nieustannie na kursach
              i szkoleniach. Nie ma dla mnie tematów tabu.
            </p>
            <p>
              Oferuję Pomoc w kryzysie, wsparcie w pokonywaniu własnych lęków, pomoc w sytuacji kiedy zbyt długo towarzyszy nam
              obniżony nastrój, niska samoocena oraz brak motywacji do działania, towarzyszenie w procesie odnajdywania
              osobistych celów i wartości.
            </p>
            <p>Jestem otwarty na wszystkich, którzy wyrażą chęć zmiany.</p>
          </div>
        </div>
      </div>
    </section>

  <!-- 
    <section class="section bg-light-2">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Experience Once In Your Life Time</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from
              the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="d-block ftco-img-flaticon">
              <img src="fonts/flaticon/svg/001-breakfast.svg" alt="Image" class="img-fluid mb-4">
              <h3>PSYCHOTERAPIA INDYWIDUALNA</h3>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="d-block ftco-img-flaticon">
              <img src="fonts/flaticon/svg/002-planet-earth.svg" alt="Image" class="img-fluid mb-4">
              <h3>PSYCHOTERAPIA PAR I MAŁŻEŃSTW</h3>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="d-block ftco-img-flaticon">
              <img src="fonts/flaticon/svg/003-airplane.svg" alt="Image" class="img-fluid mb-4">
              <h3>PSYCHOTERAPIA RODZINNA, DZIECI I MŁODZIEŻY</h3>
            </div>
          </div>

        </div>
      </div>
    </section>
  -->
  
    <section class="section blog-post-entry bg-light slant-top">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8 primary-bg-text">
            <h2 class="heading" data-aos="fade-up">KONSULTACJE PSYCHOLOGICZNE & PSYCHOTERAPIA</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder"
                  class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3">PSYCHOTERAPIA INDYWIDUALNA</h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block">
                <img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid">
              </a>
              <div class="media-body">
                <h2 class="mt-0 mb-3">PSYCHOTERAPIA PAR I MAŁŻEŃSTW</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12 post">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder"
                  class="img-fluid"></a>
              <div class="media-body">
                <h2 class="mt-0 mb-3">PSYCHOTERAPIA RODZINNA, DZIECI I MŁODZIEŻY</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->



    <section class="section testimonial-section bg-light-2">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">OPINIE PACJENTÓW</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial">
              {{-- <div class="author-image mb-3">
                <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle">
              </div> --}}
              <blockquote>
                <p>
                  &ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla augue eros, dictum ac dolor ac, finibus molestie lacus. In placerat eros ex. Quisque tincidunt quis ligula ac rhoncus. Aenean aliquam augue velit, a pharetra arcu laoreet eget. In hac habitasse platea dictumst. Sed commodo efficitur libero, et lobortis risus venenatis non. Fusce at sodales nunc. Nunc egestas varius diam, nec hendrerit tellus interdum et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ex leo, porta non pretium at, varius euismod dolor. Nullam eleifend metus venenatis, finibus mauris ut, dapibus ligula.
                  &rdquo;
                </p>
              </blockquote>
              <p><em>&mdash; Kazimierz W.</em></p>

            </div>
          </div>
          <!-- END col -->
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial">
              {{-- <div class="author-image mb-3">
                <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle">
              </div> --}}
              <blockquote>
                <p>
                  &ldquo;
                  Praesent auctor sodales lectus, sed mattis ligula vestibulum sit amet. Maecenas placerat enim ac orci consectetur, in iaculis diam faucibus. Proin a aliquet sem. Aenean sagittis ex non commodo rhoncus. Aliquam dapibus enim non gravida aliquet. Maecenas rutrum est nisi, in facilisis mauris bibendum non. Nullam aliquet eros nunc, sed venenatis est tristique vitae. Suspendisse ac massa non sem molestie vestibulum vel mattis ligula. Nulla placerat magna at dui consequat, quis consectetur orci congue. Aenean egestas lacus id neque pretium, sed sollicitudin diam malesuada.
                  &rdquo;
                </p>
              </blockquote>
              <p><em>&mdash; Anna S.</em></p>
            </div>
          </div>
          <!-- END col -->

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial">
              {{-- <div class="author-image mb-3">
                <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle">
              </div> --}}
              <blockquote>
                <p>
                  &ldquo;
                  Nullam in volutpat felis. Maecenas a molestie lacus. Phasellus auctor ipsum nec odio maximus, at laoreet ipsum convallis. Vestibulum et sapien est. Cras nunc massa, bibendum quis fermentum vel, condimentum quis massa. Sed tempor pellentesque sapien, in cursus justo lacinia in. Phasellus consequat quam sit amet ipsum gravida, a commodo neque efficitur. Nulla ut malesuada mauris. Praesent rhoncus venenatis risus id finibus. Nulla lobortis velit ut diam laoreet viverra. Vivamus vel lectus quis dolor ullamcorper feugiat ut eget nulla. Fusce tincidunt porttitor purus eget congue.
                  &rdquo;
                </p>
              </blockquote>
              <p><em>&mdash; Jacek Ł.</em></p>
            </div>
          </div>
          <!-- END col -->
        </div>
      </div>
    </section>

    <section class="section quote-section">
      <div class="container">

        <div class="row">
          <div class="quote-wrapper">
            <div class="quote-item">
              <blockquote>
                I zawsze pamiętaj, że jesteś kimś wyjątkowym. Jedyne, co musisz zrobić, to pozwolić innym zobaczyć, że taki jesteś.
                <span>
                  Milton H. Erickson
                </span>
              </blockquote>
            </div>
            <div class="quote-item">
              <img src="img/img_4.jpg" alt="Image placeholder" class="img-fluid">
            </div>
          </div>

          
          
        </div>
      </div>
    </section>
    <!-- END section -->

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
  </div> <!-- .animsition -->

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