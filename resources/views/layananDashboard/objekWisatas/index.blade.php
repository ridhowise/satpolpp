@extends('layoutsDashboard.index') 
@section('content')
 
 
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Objek Wisata</h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->

        <div class="float-right"  style="margin-buttom:100px"  >
            <a class="btn btn-success" href="{{ route('objek-wisata.create') }}"> Create Post</a>
        </div>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th style="text-align:center; width:15%" >layanan</th>
                        <th style="text-align:center; width:20%" >action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th style="text-align:center; width:15%" >layanan</th>
                        <th style="text-align:center; width:20%" >action</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach ($ObjekWisatas as $ObjekWisata)
                    <tr>
                        <td>{{$ObjekWisata->namaObjekWisata}}</td>
                        <td style="text-align:center" >{{$ObjekWisata->layanan->nama}}</td>
                        <td class="text-center">
                            <form action="{{ route('objek-wisata.destroy',$ObjekWisata->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('objek-wisata.show',$ObjekWisata->id) }}">Info Detail</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('objek-wisata.edit',$ObjekWisata->id) }}">Edit</a>         
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection
