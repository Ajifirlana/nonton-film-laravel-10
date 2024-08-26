@extends('backend.layouts.app')
@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            
          <script>
        // Display success message if it exists in the session
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                alert('{{ session('success') }}');
            @endif

            @if ($errors->any())
                let errorMessages = '';
                @foreach ($errors->all() as $error)
                    errorMessages += '{{ $error }}\n';
                @endforeach
                alert(errorMessages);
            @endif
        });
    </script>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <form action="{{url('actupdateVideo', $row->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Judul Film</label>
                 <input type="text" class="form-control" placeholder="judul film anda" name="judul_film" value="{{$row->judul_film}}" >
                </div>
                
              </div>
              
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>ID Kategori</label>
                  <select name="id_kategori" class="form-control select2" style="width: 100%;">
                  <option value="{{$row->id}}">{{$row->id}}</option>
                  @foreach($kategori as $kat)
                    <option value="{{$kat->id}}">{{$kat->nama}}</option>
                    @endforeach
                  </select>
                </div>
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </div>
             
              <!-- /.col -->
            </div><button type="submit" class="btn btn-primary">Simpan</button>
            <!-- /.row -->

            <!-- /.row -->
          </div>
          </form>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection