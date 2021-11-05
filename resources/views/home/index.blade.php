@extends('layouts.index') 
@section('content')

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <style>
      select{
          font-family: fontAwesome
      }
  /* background: url("/assets/img/Tugu-Ikan-di-Bitung.jpg") top center; */

  </style>
  
  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex justify-content-center align-items-center">

    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang di,<br> Web Desa</h1>
      <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
      <!-- <a href="courses.html" class="btn-get-started">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="container">
        <h2>Home</h2>
      </div>
    </div><!-- End Breadcrumbs -->

     <!-- ======= Features Section ======= -->
     <section id="features" class="features" style='margin-top:100px'>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi</h2>
          <!-- <p>Popular berita</p> -->
        </div>
    
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($Layanans as $layanan)
          <div class="col-lg-4 col-md-4 mt-4 mt-md-4">
            <div class="icon-box">
              <i class="fa {{$layanan->icon}}" style="color: {{ $layanan->color}}"></i>
              <h3><a href="{{ count($layanan->detailsLayanan) > 0 ? '/'.'kategori'.'/'.$layanan->slug : '#'  }}">{{ $layanan->nama}}</a></h3>
            </div>
          </div>
          @endforeach
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center  mt-4 mt-md-4">
              {{$Layanans->links('pagination::bootstrap-4')}}
            </ul>
          </nav>
        </div>

      </div>
    </section>
    <!-- End Features Section -->

  </main>
  <!-- End #main -->

	@endsection
 