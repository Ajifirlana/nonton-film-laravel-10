<?php 
      $setting = DB::table('setting_webs')->first();
      $kategori = DB::table('kategoris')->get();
      ?>
      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0')}}" />
    <title> {{$setting->judul_web}} </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="austry HTML 5 Template ')}}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/austry-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/austry.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/austry-responsive.css')}}" />
</head>

<body>


<!-- 
    <div class="preloader">
        <div class="preloader__image"></div>
    </div> -->
    <!-- /.preloader -->




    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__top">
                <div class="main-header__top-wrapper">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-left">
                            <p class="main-header__top-text">{{$setting->alamat}}</p>
                            <div class="main-header__social">
                                <a href="{{$setting->url_twitter}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$setting->url_facebook}}"><i class="fab fa-facebook"></i></a>
                                <a href="{{$setting->url_instagram}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-header__top-right">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="{{$setting->email}}">{{$setting->email}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-clock"></i>
                                    </div>
                                    <div class="text">
                                        <p><?php echo date('h:i:s') ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__wrapper-inner-content">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{url('/')}}"><img src="{{asset('frontend/assets/images/resources/logo-nonton.jpg')}}" width="50px" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown">
                                            <a href="{{url('/')}}">Home </a> </li>
                                            <li class="dropdown">
                                            <a href="#">Kategori</a>
                                            <ul>
                                                <li><a href="{{url('kategori/tutorial')}}">Tutorial</a></li>
                                                <li><a href="{{url('kategori/movie')}}">Movie</a></li>
                                                <li><a href="{{url('kategori/musik')}}">Musik</a></li>
                                            </ul>
                                        </li>
                                            <li>
                                            <a href="{{ url('tentang')}}">Tentang</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ url('login')}}">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
<div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
          
        </div>
        <!-- /.stricky-header -->
        @yield('content')

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__img">
                <img src="{{asset('frontend/assets/images/resources/site-footer-img-1.jpg')}}" alt="">
            </div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="{{asset('frontend/assets/images/resources/logo-nonton.jpg')}}" width="50px" height="50px" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">{{$setting->deskripsi}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Kategori</h4>
                                </div>
                                <ul class="footer-widget__links-list list-unstyled">
                                    @foreach($kategori as $kat)
                                    <li><a href="{{url('kategori/'.$kat->nama)}}">{{$kat->nama}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Contact</h4>
                                </div>
                                <p class="footer-widget__contact-text">{{$setting->alamat}}</p>
                                <ul class="footer-widget__Contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="{{$setting->email}}">{{$setting->email}}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:{{$setting->telepon}}">{{$setting->telepon}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__newsletter">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Sosial Media</h4>
                                </div>
                                <div class="site-footer__social">
                                <a href="{{$setting->url_twitter}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$setting->url_facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="{{$setting->url_instagram}}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <p class="site-footer__bottom-text">© Copyright <?= date('Y')?> by <a href="#">Aji Firlana</a></p>
                    <ul class="list-unstyled site-footer__bottom-menu">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('frontend/assets/images/resources/logo-1.png" width="130"
                        alt="')}}" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@austry.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...')}}" />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/circleType/jquery.circleType.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendors/sidebar-content/jquery-sidebar-content.js')}}"></script>




    <!-- template js -->
    <script src="{{asset('frontend/assets/js/austry.js')}}"></script>
</body>

</html>