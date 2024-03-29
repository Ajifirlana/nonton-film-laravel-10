@extends('frontend.layouts.app')
@section('content')
<section class="testimonial-four">
            <div class="testimonial-four__big-img">
                <img src="{{asset('frontend/assets/images/resources/fotoku.jpg')}}" alt="">
                <div class="testimonial-four__experience">
                    <h3 class="testimonial-four__experience-year">18</h3>
                    <p class="testimonial-four__experience-text">Years of <br> experience</p>
                </div>
            </div>
            <div class="testimonial-four__wrap">
                <div class="testimonial-four__bg-one float-bob-x"
                    style="background-image: url(assets/images/backgrounds/testimonial-four-bg-1.jpg);"></div>
                <div class="testimonial-four__shape-1 float-bob-y">
                    <img src="{{asset('frontend/assets/images/shapes/testimonial-four-shape-1.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9">
                            <div class="testimonial-four__left">
                                <div class="section-title text-left">
                                    <h2 class="section-title__title">Tentang Kami?</h2>
                                </div>
                                <div class="testimonial-four__slider">

                                    <div class="swiper-container" id="testimonial-four__thumb">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                               
                                            </div><!-- /.swiper-slide -->
                                           
                                           
                                        </div><!-- /.swiper-wrapper -->
                                    </div><!-- /#testimonials-one__thumb.swiper-container -->

                                    <div class="testimonial-one__main-content">
                                        <div class="swiper-container" id="testimonial-four__carousel">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="testimonial-four__client-info">
                                                      
                                                        <div class="testimonial-four__client-content">
                                                            <p class="testimonial-four__client-text">Situs web kami, 'NontonFilm', adalah destinasi utama bagi para pecinta film yang mencari pengalaman sinematik terbaik secara daring. Dengan koleksi yang luas dan beragam, kami menyajikan ribuan judul film dari berbagai genre, mulai dari film Hollywood terbaru hingga klasik-klasik yang tak terlupakan</p>
                                                            <div class="testimonial-four__client-details">
                                                                <div class="testimonial-four__client-title-box">
                                                                    <div class="testimonial-four__client-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <h4 class="testimonial-four__client-name">Aji Firlana
                                                                    </h4>
                                                                   
                                                                </div>
                                                                <div class="testimonial-four__quote">
                                                                    <span class="icon-quote"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.swiper-slide -->


                                            </div><!-- /.swiper-wrapper -->
                                        </div>
                                        <div class="testimonial-four__nav">
                                            <div class="swiper-button-prev" id="testimonial-four__swiper-button-next">
                                                <i class="icon-left-arrow"></i>
                                            </div>
                                            <div class="swiper-button-next" id="testimonial-four__swiper-button-prev">
                                                <i class="icon-right-arrow"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
