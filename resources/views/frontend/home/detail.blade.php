@extends('frontend.layouts.app')
@section('content')
<section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">{{$row->judul_film}}
                        </h2>
                </div>
                <div class="row">
                <?php
$url = $row->url_video;
$pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

$encode = base64_encode($url);
?>
<?php if (!preg_match($pattern, $url, $matches)) {
?>
<video width="1280px" height="400px" controls>
    <source src="{{ asset('film/'.base64_decode($encode)) }}" type="video/mp4">
    Browser tidak didukung
</video>
<?php }else{?>
    
<iframe  src="<?= $url?>" width="1280px" height="400px">
</iframe>
    <?php }?>

                </div>
            </div>
        </section>
        @endsection
