@extends('layoutsDashboard.index')
 
@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->

        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
            <div class="row mt-5 mb-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-left">
                    <h2>Create Objek Wisata</h2>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('objek-wisata.index') }}"> Back</a>
                </div>
            </div>
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('objek-wisata.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <strong class="col-lg-2 form-control-label">Layanan:</strong>
                <div class="col-lg-3">
                    <select name="layanan_id" id="layanan_id" class="form-control select" required>
                    <option value="">-- PILIH layanan --</option>
                    @foreach ($Layanans as $layanan)
                    <option value="{{ $layanan->id }}">{{ $layanan->nama}}</option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Objek Wisata:</strong>
                        {{-- @error('title') --}}
                            <input type="text" name="namaObjekWisata" class="form-control" placeholder="Nama Objek Wisata" required>
                        {{-- @enderror --}}
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12"> --}}
                    {{-- <div class="form-group"> --}}
                        {{-- <strong>Subtitle:</strong> --}}
                        {{-- @error('subtitle') --}}
                            {{-- <input type="text" name="subtitle" class="form-control" placeholder="Subtitle" required> --}}
                        {{-- @enderror --}}
                    {{-- </div> --}}
                {{-- </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                      </div>
                </div>
                <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.ckeditor').ckeditor();
                    });
                </script>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details Objek Wisata:</strong>
                        <br>
                        <textarea class="ckeditor" name="detailsObjekWisata" placeholder="Details Objek Wisata" required></textarea>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        
        </form>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


        


@endsection