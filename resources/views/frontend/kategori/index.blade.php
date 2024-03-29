@extends('frontend.layouts.app')
@section('content')
<section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <h2>{{$row->nama}}</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Kategori</a></li>
                            <li><span>/</span></li>
                            <li>{{$row->nama}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="news-page">
            <div class="container">
                <div class="row">
                    @foreach($result as $film)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img-box">
                                <div class="news-one__img">
                                           
<video width="500px" height="100px"controls>
    <source src="{{asset('film/'.$film->url_video)}}" type="video/mp4">
    Browser tidak didukung
</video>    
                                </div>
                                <div class="news-one__date">
                                    <p>{{$film->created_at}}</p>
                                </div>
                                
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="{{url('film/'.$film->slug)}}">{{$film->judul_film}}</a></h3>
                                <div class="news-one__bottom">
                                    <a href="{{url('film/'.$film->slug)}}" class="news-one__read-more">Tonton</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
