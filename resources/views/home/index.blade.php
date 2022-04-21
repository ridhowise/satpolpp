@extends('layouts.index') 
@section('content')

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <style>
    .carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
      .select{
          font-family: fontAwesome
      }
      .carousel-inner{overflow:visible!important} 
      .carousel-inner img {
        width:100% !important;
        min-width:100 !important;
        height: auto;
        display: flex;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
      }
      
      
  /* background: url("/assets/img/Tugu-Ikan-di-Bitung.jpg") top center; */

  </style>
  
  <!-- ======= Hero Section ======= -->
  
  <!-- <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Selamat Datang di,<br> Web carousel</h1>
    </div>
  </section> -->
  <div id="demo" class="carousel" data-ride="carousel" data-interval="3000">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="/assets/img/carousel1.jpg" alt="" >
      <div class="carousel-caption">
        <!-- <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/assets/img/carousel2.jpg" alt="" >
      <div class="carousel-caption">
        <!-- <h3>Chicago</h3>
        <p>Thank you, Chicago!</p> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/assets/img/carousel3.jpg" alt="" >
      <div class="carousel-caption">
        <!-- <h3>New York</h3>
        <p>We love the Big Apple!</p> -->
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/course-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/course-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/course-3.jpg" alt="Third slide">
    </div>
  </div>
</div> -->
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
          @foreach ($Kategoris as $Kategori)
          <div class="col-lg-4 col-md-4 mt-4 mt-md-4">
            <div class="icon-box">
              <i class="fa {{$Kategori->icon}}" style="color: {{ $Kategori->color}}"></i>
              <h3><a href="{{ count($Kategori->post) > 0 ? '/'.'kategori'.'/'.$Kategori->slug : '#'  }}">{{ $Kategori->nama}}</a></h3>
            </div>
          </div>
          @endforeach
          
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center  mt-4 mt-md-4">
              {{$Kategoris->links('pagination::bootstrap-4')}}
            </ul>
          </nav>
        </div>

      </div>
    </section>
    <!-- End Features Section -->

  </main>
  <!-- End #main -->

	@endsection
 