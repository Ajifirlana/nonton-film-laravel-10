@extends('frontend.layouts.app')
@section('content')
<section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Film Terbaru
                        </h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    @foreach($result as $row)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                <!-- {{ asset('frontend/assets/images/blog/news-1-1.jpg')}} -->
                                <iframe src="{{asset('film/'.$row->url_video)}}"></iframe>
                                </div>
                                <div class="news-one__date">
                                    <p>{{$row->judul}}</p>
                                </div>
                                <ul class="news-one__meta list-unstyled">
                                    <li>
                                        <a href="news-details.html"><i class="fas fa-user-circle"></i>by Aji Firlana</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="news-details.html">{{ $row->judul }}</a></h3>
                                <div class="news-one__bottom">
                                    <a href="{{url('film/'.$row->slug)}}" class="news-one__read-more">Tonton</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
                </div>
            </div>
        </section>
        @endsection
