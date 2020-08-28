<?php get_header(); ?>
  <!-- Page-->
  <!-- Page preloader-->
  <div id="page-loader" style="display: none;">
    <div class="cssload-container">
      <div class="cssload-speeding-wheel"></div>
    </div>
  </div>
  <div class="text-center page">
    <!-- Page Header-->
    <header class="page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap" style="height: 118px;">
        <nav class="rd-navbar rd-navbar-default rd-navbar-original rd-navbar-static rd-navbar--is-stuck"
          data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
          data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-fullwidth"
          data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false"
          data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true"
          data-xxl-stick-up="true" data-md-stick-up-offset="300px" data-lg-stick-up-offset="1px" data-stick-up="true">
          <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle toggle-original"
                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img src="img/logo.png" alt=""
                    width="174" height="33"></a></div>
            </div>
            <div class="rd-navbar-aside-right">
              <div class="rd-navbar-nav-wrap toggle-original-elements">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class=""><a href="#Inicio">Inicio</a></li>
                  <li class=""><a href="#Historia">Historia</a></li>
                  <li class=""><a href="#Actualidad">Actualidad & Naturaleza</a></li>
                  <li class=""><a href="#Farandula">Farandula</a></li>
                  <li class=""><a href="#Emprender">Emprender</a></li>
                  <li class=""><a href="#Costum">Costumbres</a></li>
                </ul>
              </div>
            </div>
        </nav>
      </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-container-horizontal" id="Inicio" data-loop="false"
      data-simulate-touch="false" data-autoplay="false">
      <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
        <div class="swiper-slide-video swiper-slide swiper-slide-active" data-slide-bg="img/home-slider-01.jpg"
          style="background-image: url(img/home-slider-01.jpg;); background-size: cover; width: 1343px;">
          <div class="swiper-slide-caption text-lg-left">
            <div class="container container-wide">
              <div class="row justify-content-lg-between justify-content-center">
                <div class="col-xl-4 col-lg-5 offset-xl-1">
                  <div class="oveflow-wrapper">
                    <h5 class="big text-accent fadeInUp animated" data-caption-animate="fadeInUp"
                      data-caption-delay="400">La Mejor Metropolis!</h5>
                  </div>
                  <div class="oveflow-wrapper">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="500" class="fadeInUp animated">Managua</h1>
                  </div>
                  <p data-caption-animate="fadeInUp" data-caption-delay="600" class="fadeInUp animated"></p>
                  <ul class="group text-xs-nowrap">
                    <li> <a class="button button-white fadeInUp animated" href=data-caption-animate="fadeInUp"
                        data-caption-delay="500">Galeria</a></li>
                  </ul>
                </div>
                <div class="col-md-9 col-xl-7 col-lg-6 video-caption-wrapper">
                  <div class="video-caption"><img class="video-caption-overlay" src="img/home.png" alt="">
                    <!-- RD Video-->
                    <div class="rd-video play-on-scroll rd-video-player" data-rd-video-path="img/managua">
                      <div class="rd-video-wrap">
                        <div class="rd-video-preloader"></div>
                        <video style="visibility: visible; opacity: 1;">
                          <source type="video/mp4" src="img/managua.mp4"></video>
                        <div class="rd-video-controls">
                          <!-- Play\Pause button--><a class="rd-video-play-pause fa fa-play icon icon-lg" href="#"></a>
                          <!-- Progress bar-->
                          <div class="rd-video-progress-bar">
                            <div class="current" style="width: 0%;"></div>
                            <div class="current" style="width: 0%;"></div>
                          </div>
                          <div class="rd-video-time">
                            <!-- currentTime--><span class="rd-video-current-time">00:00</span> -
                            <!-- Track duration--><span class="rd-video-duration">01:15</span>
                          </div>
                          <div class="rd-video-volume-wrap">
                            <!-- Volume button--><a class="rd-video-volume fa fa-volume-high icon icon-sm" href="#"></a>
                            <div class="rd-video-volume-bar-wrap">
                              <!-- Volume bar-->
                              <div class="rd-video-volume-bar rd-video-volume-bar-vertical">
                                <div class="current" style="width: 100%; height: 100%;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-next" data-slide-bg="img/home-slider-02.jpg"
          style="background-image: url(img/home-slider-02.jpg;); background-size: cover; width: 1343px;">
          <div class="swiper-slide-caption">
            <div class="container container-wide">
              <h2 data-caption-animate="fadeInUp" data-caption-delay="300" class="not-animated">Descubre la Nueva
                Managua</h2>
              <h3 data-caption-animate="fadeInUp" data-caption-delay="400" class="not-animated">Recuerda la vieja
                Ciudad!</h3>
              <ul class="group text-xs-nowrap">
                <li><a class="button button-white not-animated" href=data-caption-animate="fadeInUp"
                    data-caption-delay="500">galeria</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-slide-bg="img/home-slider-03.jpg"
          style="background-image: url(index_filex/home-slider-03.jpg;); background-size: cover; width: 1343px;">
          <div class="swiper-slide-caption">
            <div class="container container-wide">
              <h2 data-caption-animate="fadeInUp" data-caption-delay="300" class="not-animated">Descubre lo maravilloso
                de Managua</h2>
              <ul class="group text-xs-nowrap">
                <li><a class="button button-white not-animated" href=data-caption-animate="fadeInUp"
                    data-caption-delay="500">Galeria</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev fa fa-chevron-left swiper-button-disabled"></div>
      <div class="swiper-button-next fa fa-chevron-right"></div>
    </section>
    <section class="section context-dark bg-accent section-cta">
      <div class="container container-wide">
        <div class="row row-30 align-items-center">
          <div class="col-xl-9 col-xxl-8 offset-xxl-1 text-xl-left">
            <h3><span class="font-weight-bold">Metropolis Managua</span>Vive la experiencia de conocer</h3>
            <h5>A la mejor Capital de CentroAmerica.</h5>
          </div>
          <div class="col-xl-3 text-center"><a class="button button-white-style-1" target="_blank" href=>Galeria</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-80 section-md-90 section-lg-140 bg-gray-lighter" id="Inicio">
      <div class="container">
        <!-- Text Rotator-->
        <h2>Managua <span class="text-rotator" data-text-class="text-accent-2 font-accent" data-enable="1200"
            data-words="... Memorable,...Conoce la,...Ama la" data-rotate-interval="3000"
            data-rotate-animation="fadeInUp, fadeOutUp"><span
              class="rotate-area fadeInUp animated text-accent-2 font-accent"
              style="display: inline-block; width: 405.683px;">...Memorable</span><span
              class="rotate-list"><span>...Memorable</span><span>...ready to
                use</span><span>...Memorable</span></span></span></h2>
        <div class="row row-60 justify-content-center">
          <div class="col-lg-3 col-md-5 col-sm-6"><a href="htpp://www.facebook.com/metropolismanagua"><span
                class="fa-3x fad fa-facebook"></span></a>
            <!-- CountTo-->
            <div class=" " data-speed=""></div>
            <h5 class="counter-title">Facebook</h5>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-6"><a href="htpp://www.twitter.com/metropolismanagua"><span
                class="fa-3x fad fa-twitter"></span></a>
            <!-- CountTo-->

            <h5 class="counter-title">Twitter</h5>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-6"><a href="htpp://www.instagram.com/metropolismanagua"><span
                class="fa-3x fad fa-instagram"></span></a>
            <!-- CountTo-->
            <div class="" data-speed=""></div>
            <h5 class="counter-title">Instagram</h5>
          </div>
          <div class="col-lg-3 col-md-5 col-sm-6"><a href="htpp://www.youtube.com/metropolismanagua"><span
                class="fa-3x fad fa-youtube"></span></a>
            <!-- CountTo-->
            <div class="" data-speed=""></div>
            <h5 class="counter-title">Youtube</h5>
          </div>
        </div>
      </div>
    </section>
    <section class="section-80 section-md-90 section-lg-140 bg-default" id="Historia">
      <div class="container container-wide container-spacing-30">
        <h2>Historia</h2>
        <p class="offset-top-24 text-gray">De la Linda Managua.</p>
        <div class="row row-50 row-lg-90">
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a
              class="thumbnail-type-1" href="">
              <figure><img src="img/BarriosManagua.jpg" alt="" width="420" height="300"></figure>
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-title">Barrios</div>
                  <p></p>
                </div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a
              class="thumbnail-type-1" href="">
              <figure><img src="img/negocio.jpg" alt="" width="420" height="300"></figure>
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-title">Negocios</div>
                  <p></p>
                </div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a
              class="thumbnail-type-1" href="">
              <figure><img src="img/arbolito.jpg" alt="" width="420" height="300"></figure>
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-title">Direcciones</div>
                  <p>De Referencia</p>
                </div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a
              class="thumbnail-type-1" href="">
              <figure><img src="img/pjapones.jpeg" alt="" width="420" height="300"></figure>
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-title">Lugares</div>
                  <p></p>
                </div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><a
              class="thumbnail-type-1" href="index.html">
              <figure><img src="img/1971.jpg" alt="" width="420" height="300"></figure>
              <div class="caption">
                <div class="caption-inner">
                  <div class="caption-title">Arquitectura.</div>
                  <p></p>
                </div>
              </div>
            </a></div>


        </div>
      </div>
    </section>
    <section class="section-80 section-md-90 section-lg-140 bg-gray-lighter" id="Actualidad">
      <div class="container container-wide container-spacing-30">
        <h2>Actualidad y naturaleza</h2>
        <p class="offset-top-24 text-gray"></p>
        <div class="row row-50 row-lg-90">
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/lago.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">EL Lago</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/lagu.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Las Lagunas</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/xlag.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Xolotlan transformacion</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/met.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Metropolis</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/coma.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Comarcas</div>
              </div>
            </a></div>

        </div>
      </div>
      <div class="col-lg-12 text-center offset-top-40" id="goal-2">
        <button class="button button-primary" data-custom-toggle="#goal, #goal-2"
          data-custom-toggle-disable-on-blur="true"></button>
      </div>

    </section>



    <section class="section section-80 section-md-90 section-lg-140 bg-gray-lighter" id="Farandula">
      <div class="container container-wide">
        <h2>Farandula</h2>
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8">
            <div><img src="img/home-11.png" alt="" width="870" height="59"></div>

          </div>
        </div>
      </div>
    </section>


    <section class="section bg-gray-lighter section-60 section-md-bottom-30 section-lg-top-0 section-lg-bottom-0"
      id="Emprender">
      <div class="container container-wide">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
          <div class="col-sm-7 col-md-5 col-lg-4 col-xxl-4 image-wrapper-3 text-xl-right d-none d-sm-block wow fadeInUp"
            style="visibility: hidden; animation-name: none;"><img class="image__item" src="img/emp.jpg" alt=""></div>

        </div>
      </div>
    </section>



    <section class="section-80 section-md-90 section-lg-140 bg-gray-lighter" id="Costum">
      <div class="container container-wide container-spacing-30">
        <h2>Costumbres</h2>
        <p class="offset-top-24 text-gray"></p>
        <div class="row row-50 row-lg-90">
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Refranes</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Leyendas Urbanas</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Comidas Populares</div>
              </div>
            </a></div>
          <div class="col-xl-3 col-lg-4 col-md-6"><a class="thumbnail-type-2" href="">
              <figure><img src="img/.jpg" alt="" width="350" height="350"></figure>
              <div class="caption">
                <div class="caption-title">Lugares de Referencia</div>
              </div>
            </a></div>

        </div>
      </div>

      <div class="col-lg-12 text-center offset-top-40" id="">
        <button class="button button-primary" data-custom-toggle="#, #"
          data-custom-toggle-disable-on-blur="true"></button>
      </div>
  </div>
  </section>

  <!-- Page Footer-->
  <footer class="page-footer">
    <div class="container">
      <p>MetropolisManagua<span id="copyright-year">2019</span>.
      </p>
    </div>
  </footer>
  <!-- Coded by Mnemon1k-->

  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.js"></script>
  <script src="js/script.js"></script>

  <!---->

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function () {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') +
        '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
  </script><!-- End Google Tag Manager -->
  <a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up active"></a>
  <script type="text/javascript" id="">
    (function () {
      var b = document.location.search.split("aff\x3d")[1];
      if (b) {
        var d = document.querySelectorAll("a"),
          c;
        for (c = 0; c < d.length; c++) {
          var a = d[c];
          0 == a.href.indexOf("") && (0 < a.href.indexOf("?") ? a.href = a.href + "\x26aff\x3d" + b : a.href = a
            .href + "?aff\x3d" + b)
        }
      }
      b = document.location.search.split("i\x3d")[1];
      var e = document.location.search.split("pr_code\x3d")[1];
      if (b && e)
        for (b = b.split("\x26")[0], d = document.querySelectorAll("a"), c = 0; c < d.length; c++) a = d[c], 0 == a
          .href.indexOf("") &&
          (a.href = "" + e)
    })();
  </script>
</body><!-- Google Tag Manager -->

</html>