@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<section class="main-banner">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 col-md-7">
            <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
               <h2>SD Kristen<span>Pirngadi</span></h2>
               <h3 class="pt-2 pb-4">"Membentuk Karakter, Mengembangkan Potensi, Menyebarkan Kasih."</h3>
               <p>Selamat Datang di SD Kristen Pirngadi<br/>
                  Di SD Kristen Pirngadi, kami percaya bahwa pendidikan adalah perjalanan yang lebih dari sekadar akademik. Kami berkomitmen untuk membentuk karakter anak, mengembangkan potensi unik mereka, dan menyebarkan kasih melalui nilai-nilai Kristen.</p>
             
            </div>
         </div>
         <div class="col-lg-5 col-md-5">
            <div class="banner-img wow zoomIn" data-wow-duration="1000ms">
               <img src="{{ asset('assets/img/index/banner.png') }}" alt="">
            </div><!--banner-img end-->
            <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
         </div>
      </div>
   </div>
</section><!--main-banner end-->



</div><!--main-section end-->

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

<section class="classes-section">
   <div class="container">
      <div class="sec-title">
         <h2>Kelas Kami</h2>
         <p>Di SD Kristen Pirngadi, kami menyediakan lingkungan belajar yang mendukung dan inovatif untuk membantu siswa mencapai potensi penuh mereka. </p>
      </div><!--sec-title end-->
      <div class="classes-sec">
         <div class="row classes-carousel">
            <div class="col-lg-3">
               <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/kelas-sd-1.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Kelas  1 - 6</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/dapur.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Dapur Sekolah</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>
           
            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/ruang-guru.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Guru</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/ruang-kepala-sekolah.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Kepala Sekolah</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/ruang-tu.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Tata Sekolah</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/toilet-pria.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Toilet Siswa Pria</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/toilet-wanita.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Toilet Siswa Perempuan</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/ruang-uks.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Kesehatan</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>
            
            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/perpustakaan.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Perpustakaan</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/lap-ipa.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Lap Ipa</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/lap-komputer.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Lap Komputer</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>

            <div class="col-lg-3">
               <div class="classes-col">
                  <div class="class-thumb">
                     <img src="{{ asset('assets/img/kelas/ruang-music.png') }}" alt="" class="w-100">
                     <a href="contacts.html" title="" class="crt-btn">
                        <img src="assets/img/icon10.png" alt="">
                     </a>
                  </div>
                  <div class="class-info">
                     <h3><a href="class-single.html" title="">Ruang Musik</a></h3>
                     
                    
                  </div>
               </div><!--classes-col end-->
            </div>
         </div>
         <div class="lnk-dv text-center">
            <a href="/sd-kristen-pirngadi-kelas" title="" class="btn-default">Kelas Kami <i class="fa fa-long-arrow-alt-right"></i></a>
         </div>
      </div><!--classes-sec end-->
   </div>
</section><!--classes-section end-->

<section class="teachers-section">
   <div class="container">
      <div class="section-title text-center">
         <h2>Guru-guru Hebat Kami</h2>
         <p>Di SD Kristen Pirngadi, kami bangga memiliki tim pengajar yang luar biasa. Guru-guru kami tidak hanya berkompeten dalam bidang akademik, tetapi juga berdedikasi untuk menginspirasi dan membimbing setiap siswa dengan penuh kasih dan perhatian.</p>
      </div><!--section-title end-->
      <div class="teachers">
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
               <div class="teacher">
                  <div class="teacher-img">
                     <img src="https://via.placeholder.com/1120x1680" alt="" class="w-100">
                     <div class="sc-div">
                        <ul>
                           <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                        <span><img src="assets/img/plus.png" alt=""></span>
                     </div>
                  </div>
                  <div class="teacher-info">
                     <h3><a href="teacher-single.html" title="">Polina Kerston</a></h3>
                     <span>English Teacher</span>
                  </div>
               </div><!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
               <div class="teacher">
                  <div class="teacher-img">
                     <img src="https://via.placeholder.com/1376x2064" alt="" class="w-100">
                     <div class="sc-div">
                        <ul>
                           <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                        <span><img src="assets/img/plus.png" alt=""></span>
                     </div>
                  </div>
                  <div class="teacher-info">
                     <h3><a href="teacher-single.html" title="">Faadi Al Rahman</a></h3>
                     <span>Instructor</span>
                  </div>
               </div><!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
               <div class="teacher">
                  <div class="teacher-img">
                     <img src="https://via.placeholder.com/1336x2004" alt="" class="w-100">
                     <div class="sc-div">
                        <ul>
                           <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                        <span><img src="{{ asset('') }}assets/img/plus.png" alt=""></span>
                     </div>
                  </div>
                  <div class="teacher-info">
                     <h3><a href="teacher-single.html" title="">Chikelu Obasea</a></h3>
                     <span>Art Teacher</span>
                  </div>
               </div><!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
               <div class="teacher">
                  <div class="teacher-img">
                     <img src="https://via.placeholder.com/1204x1804" alt="" class="w-100">
                     <div class="sc-div">
                        <ul>
                           <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                        <span><img src="assets/img/plus.png" alt=""></span>
                     </div>
                  </div>
                  <div class="teacher-info">
                     <h3><a href="teacher-single.html" title="">Katayama Fumiki</a></h3>
                     <span>Teacher</span>
                  </div>
               </div><!--teacher end-->
            </div>
         </div>
      </div><!--teachers end-->

      <div class="lnk-dv text-center">
         <a href="/sd-kristen-pirngadi-kelas" title="" class="btn-default">Guru Kami <i class="fa fa-long-arrow-alt-right"></i></a>
      </div>
   </div>
</section>

<section class="course-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="find-course">
               <div class="sec-title">
                  <h2>Informasi Pendaftaran</h2>
                  <p>Kami membuka pendaftaran untuk tahun ajaran baru. Untuk informasi lebih lanjut mengenai pendaftaran, silakan hubungi kami </p>
                  <h3><img src="assets/img/icon11.png" alt="">Call: <strong>+0315484398</strong></h3>
               </div><!--sec-title end-->
               <div class="course-img">
                  <img src="{{ asset('assets/img/about1.png') }}" alt="">
               </div><!--course-img end-->
            </div><!--find-course end-->
         </div>
         <div class="col-lg-6">
            <div class="courses-list">
               <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                  <div class="d-flex flex-wrap align-items-center">
                     
                  </div>
                  <h3><a href="event-single.html" title="">Program Akademik Unggulan Merdeka Belajar</a></h3>
               
               </div><!--course-card end-->
               <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                  <div class="d-flex flex-wrap align-items-center">
                    
                  </div>
                  <h3><a href="event-single.html" title="">Layanan Dukungan Untuk Siswa</a></h3>
                  
               </div><!--course-card end-->
               <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <div class="d-flex flex-wrap align-items-center">
                  
                  </div>
                  <h3><a href="event-single.html" title="">Fasilitas Kelas Aman & Modern</a></h3>
                  
               </div><!--course-card end-->
            </div><!--courses-list end-->
            <a href="/sd-kristen-pirngadi-about" title="" class="all-btn">Kenali Kami <i class="fa fa-long-arrow-alt-right"></i></a>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</section><!--course-section end-->



{{-- <section class="newsletter-section">
   <div class="container">
      <div class="newsletter-sec">
         <div class="row align-items-center">
            <div class="col-lg-4">
               <div class="newsz-ltr-text">
                  <h2>Join us <br /> and stay tuned!</h2>
                  <a href="contacts.html" title="" class="btn-default">Join Us <i class="fa fa-long-arrow-alt-right"></i></a>
               </div><!--newsz-ltr-text end-->
            </div>
            <div class="col-lg-8">
               <form class="newsletter-form">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="text" name="name" placeholder="Name">
                        </div><!--form-group end-->
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="email" name="email" placeholder="Email">
                        </div><!--form-group end-->
                     </div>
                     <div class="col-md-4">
                        <div class="form-group select-tg">
                           <select>
                              <option>Class</option>
                              <option>Class</option>
                              <option>Class</option>
                              <option>Class</option>
                              <option>Class</option>
                              <option>Class</option>
                           </select>
                        </div><!--form-group end-->
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <textarea name="message" placeholder="Message"></textarea>
                        </div><!--form-group end-->
                     </div>
                  </div>
               </form><!--newsletter-form end-->
            </div>
         </div>
      </div><!--newsletter-sec end-->
   </div>
</section><!--newsletter-sec end--> --}}
@endsection

@push('after-script')


@endpush