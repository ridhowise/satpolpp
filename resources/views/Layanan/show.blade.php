@extends('layouts.index') 
@section('content')

<main id="main">

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>{{$Details->layanan->nama}}</h2>
    <p>
      {{-- @foreach ($Details as $detail) --}}
      {{$Details->title}}
      {{-- @endforeach --}}
    </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Cource Details Section ======= -->
<section id="course-details" class="course-details">
  <div class="container" data-aos="fade-up">

    <div class="row">
   
        <div class="col-lg-12">
        <img src="/images/{{$Details->image}}" class="img-fluid" alt="">
        <h3> {{$Details->subtitle}} </h3>
        <div class="ckeditor">
      
          @php
            echo $Details->details
          @endphp	
        
        </div>
         
      </div>
      
    </div>

  </div>
</section><!-- End Cource Details Section -->


</main><!-- End #main -->



@endsection