@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<section class="about-us-section">
   <div  class="container">
      <div class="section-title text-center">
         <h2>Welcome to <span>SD Kristen Pirngadi</span></h2>
         <p>Di sini, kami tidak hanya mengajarkan pelajaran, tetapi juga memupuk nilai-nilai kehidupan yang akan membimbing anak-anak menjadi individu yang berkarakter, berpengetahuan, dan penuh kasih.</p>
      </div><!--section-title end-->
      <div class="about-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                     <img src="assets/img/icon5.png" alt="">
                     <h3>Pengajar Terbaik</h3>
                     <p>Di SD Kristen Pirngadi, kami bangga memiliki tim pengajar yang luar biasa.</p>
                  </div><!--abt-col end-->
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                     <img src="assets/img/icon7.png" alt="">
                     <h3>Akreditasi Pendidikan </h3>
                     <p>Program Akreditasi  memastikan bahwa kurikulum kami memenuhi standar pendidikan internasional terbaik.</p>
                  </div><!--abt-col end-->
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                     <img src="assets/img/icon8.png" alt="">
                     <h3>Program Akademik Unggulan </h3>
                     <p>Kami menggunakan kurikulum yang dirancang untuk mengembangkan kompetensi inti siswa dalam berbagai mata pelajaran.</p>
                  </div><!--abt-col end-->
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                     <img src="assets/img/icon9.png" alt="">
                     <h3>Layanan Dukungan Siswa</h3>
                     <p>Kami memahami bahwa setiap siswa memiliki kebutuhan unik dan tantangan pribadi yang mungkin mereka hadapi selama proses belajar.</p>
                  </div><!--abt-col end-->
               </div>
            </div>
         </div>
      </div><!--about-rw end-->
      <div class="abt-img">
         <ul class="masonary">
            <li class="width1 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery4.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery4.png') }}" alt=""></a></li>
            <li class="width2 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery1.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery1.png') }}" alt=""></a></li>
            <li class="width3 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery5.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery5.png') }}" alt=""></a></li>
            <li class="width4 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery6.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery6.png') }}" alt=""></a></li>
            <li class="width5 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery2.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery2.png') }}" alt=""></a></li>
            <li class="width6 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery7.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery7.png') }}" alt=""></a></li>
            <li class="width7 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery8.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery8.png') }}" alt=""></a></li>
            <li class="width8 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery8.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery10.png') }}" alt=""></a></li>
            <li class="width9 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery3.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery3.png') }}" alt=""></a></li>
            <li class="width10 wow zoomIn" data-wow-duration="1000ms"><a href="{{ asset('assets/img/index/galery11.png') }}" data-group="set1" title="" class="html5lightbox"><img src="{{ asset('assets/img/index/galery11.png') }}" alt=""></a></li>
         </ul>
      </div><!-- abt-img end-->
   </div>
</section><!--about-us-section end-->

@endsection

@push('after-script')


@endpush