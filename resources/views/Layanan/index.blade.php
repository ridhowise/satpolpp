@extends('layouts.index') 
@section('content')

  <main id="main">
  

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
      
        <!-- {{-- @foreach ($Details as $detail) --}} -->
        <h2>{{$Detailz->nama}}</h2>
        <!-- {{-- @endforeach --}} -->

      </div>
    </div><!-- End Breadcrumbs -->

       <!-- ======= Features Section ======= -->
       {{-- style="margin-top:100px" --}}
      <section id="courses" class="courses" >
      <div class="container" data-aos="fade-up">

        {{-- <div class="row" data-aos="zoom-in" data-aos-delay="100" >
          @foreach ($Details as $detail)
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="" style="color: #ffbb2c;"></i>
                <h3><a href="/layanans/{{$detail->layanan_id}}/{{$detail->layanan->slug}}/{{$detail->slug_details}}"> {{ $detail->title }} </a></h3>
              </div> 
            </div>
          @endforeach
        </div> --}}
        <div class="row" data-aos="zoom-in" data-aos-delay="100" >
          @foreach ($Details as $detail)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="/images/{{$detail->image}}" style="height:15vw; width:100%; object:cover" class="img-fluid" alt="...">
              <div class="course-content">
                <h3>{{$detail->title}}</h3>
                <p>{{$detail->subtitle}}</p>
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <a  href="/kategori/{{$detail->layanan->slug}}/{{$detail->slug}}" class="btn btn-primary " >Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center  mt-4 mt-md-4">
            {{$Details->links('pagination::bootstrap-4')}}
          </ul>
        </nav>

       
      </div>
    </section><!-- End Features Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        

      </div>
    </section><!-- End About Section -->

   


  </main><!-- End #main -->


	@endsection
