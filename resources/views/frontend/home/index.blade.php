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
                            
<video width="500px" height="100px"controls>
    <source src="{{asset('film/'.$row->url_video)}}" type="video/mp4">
    Browser tidak didukung
</video>    
                            </div>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="{{url('film/'.$row->slug)}}">{{ $row->judul_film }}</a></h3>
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
