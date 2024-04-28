@extends('backend.layouts.app')
@section('content') 
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
<video width="800px" controls>
    <source src="{{ asset('film/'.base64_decode($encode)) }}" type="video/mp4">
    Browser tidak didukung
</video>
<?php }else{?>
    
<iframe  src="<?= $url?>">
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
