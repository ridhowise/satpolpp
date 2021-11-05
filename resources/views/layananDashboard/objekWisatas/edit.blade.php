@extends('layoutsDashboard.index')
 
@section('content')

<style>
    input[type="file"]{
    color: transparent;
    }
</style>

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Keamanan post</h1>
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
                    <h2>Create New Post</h2>
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
    
        <form action="{{ route('objek-wisata.update',$objekWisata->id) }}" method="POST" enctype="multipart/form-data"n>
            @csrf
            @method('PUT')
            <div class="row">
                {{-- @if($objekWisata->image == null)
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <input type="file" value="{{$objekWisata->image}}" name="image" placeholder="image" id="image">
                        {{-- @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror --}}
                      {{-- </div>
                </div>
                @else --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <input type="hidden" value="{{$objekWisata->id}}" name="id" >
                        <input type="hidden" value="{{$objekWisata->image}}" name="image">
                        <input type="hidden" value="{{$objekWisata->layanan_id}}" name="layanan_id">

                        <img src="{{url('images')}}/{{$objekWisata->image}}" style="width:70px"><br>
                        <input style="padding:0px" type="file" value="{{$objekWisata->image}}" name="image" placeholder="{{$objekWisata->image}}" id="image">
                        {{-- <p>{{$objekWisata->image}}"</p> --}}
                        {{-- @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror --}}
                      </div>
                </div>
                {{-- @endif --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="namaObjekWisata" value="{{ $objekWisata->namaObjekWisata }}" class="form-control" placeholder="Title">
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>subtitle:</strong>
                        <input type="text" name="subtitle" value="{{ $objekWisata->detailsObjekWisata }}"  class="form-control" placeholder="subtitle">
                    </div>
                </div> --}}
                <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.ckeditor').ckeditor();
                    });
                </script>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>details:</strong>
                        <br>
                        <textarea class="ckeditor" name="detailsObjekWisata" placeholder="details">{{ $objekWisata->detailsObjekWisata }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </div>
        
        </form>
            </table>
        </div>
    </div>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function () {
    $('input[type="file"]').change(function () {
         if ($(this).val() != "") {
                $(this).css('color', '#333');
         }else{
                $(this).css('color', 'transparent');
         }
    });
})
</script>

<!-- /.container-fluid -->


        


@endsection