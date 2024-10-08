@extends('backend.layouts.app')
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
          <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
               <a href="{{url('tambah_video')}}"><button class="btn btn-primary">Tambah</button></a>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Judul Film</th>
                    <th>ID Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                        @foreach($film_terbaru as $row)
                      
                        <tr><td>{{$row->judul_film}}</td>
                    <td>{{$row->id_kategori}}</td>
                    <td>
                    <a href="{{ url('edit_video/' . $row->id) }}" class="btn btn-success" role="button">Edit</a>

                    <a href="{{ url('play/' . $row->slug) }}" class="btn btn-primary" target="_blank" role="button">Play</a>
                    </tr>  @endforeach
                  
                 
                  </tbody>
                </table>
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