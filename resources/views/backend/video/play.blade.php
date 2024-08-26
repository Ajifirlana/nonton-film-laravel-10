@extends('backend.layouts.app')
@section('content') 
<style>
  /* Ensure the iframe scales with the container */
.youtube-iframe {
    width: 100%;
    height: auto;
    max-width: 1200px; /* You can adjust this maximum width as needed */
    aspect-ratio: 16 / 9; /* Maintains a 16:9 aspect ratio */
    border: none; /* Removes default border */
}

/* Additional styles to ensure video player is responsive */
video {
    width: 100%;
    height: auto;
}

</style>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
          <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
             
              <?php
$url = $row->url_video;
$pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

$encode = base64_encode($url);
?>
<?php if (!preg_match($pattern, $url, $matches)) {
?>
<video controls>
    <source src="{{ asset('film/'.base64_decode($encode)) }}" type="video/mp4">
    Browser tidak didukung
</video>
<?php }else{?>
    
<iframe  src="<?= $url?>" width="1200px">
</iframe>
    <?php }?>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    


        @endsection
