@extends('frontend.layouts.app')
@section('content')
<section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">{{$row->judul_film}}
                        </h2>
                </div>
                <div class="row">
                <iframe src="{{asset('film/'.$row->url_video)}}" width="1280px" height="400px"></iframe>
                              
                </div>
            </div>
        </section>
        @endsection
