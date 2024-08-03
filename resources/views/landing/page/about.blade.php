@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')
<section class="pager-section">
   <div class="container">
      <div class="pager-content text-center">
         <h2>Tentang Kami</h2>
         <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Tentang Kami</span></li>
         </ul>
      </div><!--pager-content end-->
      <h2 class="page-titlee">Pirngadi</h2>
   </div>
</section><!--pager-section end-->

<section class="about-page-content">
   <div class="container">
      <div class="abt-page-row">
         <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
               <div class="section-title">
                  <h2>SD Kristen<span>Pirngadi</span></h2>
                  <h3 class="pt-2 pb-4">"Membentuk Karakter, Mengembangkan Potensi, Menyebarkan Kasih."</h3>
                  <p>Selamat Datang di SD Kristen Pirngadi Di SD Kristen Pirngadi, kami percaya bahwa pendidikan adalah perjalanan yang lebih dari sekadar akademik. Kami berkomitmen untuk membentuk karakter anak, mengembangkan potensi unik mereka, dan menyebarkan kasih melalui nilai-nilai Kristen.</p>
                  <a href="classes.html" title="" class="btn-default">Kelas Kami <i class="fa fa-long-arrow-alt-right"></i></a>
               </div><!--section-title end-->
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="avt-img">
                  <img src="{{ asset('assets/img/index/banner.png') }}" alt="">
               </div><!--avt-img end-->
            </div>
         </div>
         <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
               <div class="avt-img">
                  <img src="{{ asset('assets/img/index/galery7.png') }}" alt="" style="width: 576px">
               </div><!--avt-img end-->
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="act-inffo">
                  <span>Visi & Misi</span>
                  <h2>Pirngadi</h2>
                  <p>Misi : Menjadi lembaga pendidikan Kristen unggulan yang mewujudkan pribadi yang berkualitas, cerdas dan berkarakter berlandaskan iman Kristen</p>
                  <p>Visi</p>
                  <ul>
                     <li>1. Membina kerohanian peserta didik secara konsisten dan berkesinambungan.</li>
                     <li>2. Membimbing peserta didik agar mengerti dan memiliki Karakter Kristus</li>
                     <li>3. Melaksanakan Kegiatan Belajar Mengajar yang berkualitas berdasarkan nilai-nilai Kristiani.</li>
                     <li>4. Meningkatkan kualitas sumber daya manusia, profesinalisme dan prestasi.</li>
                     <li>5. Menanamkan desiplin, dedikasi dan loyalitas serta kebanggaan terhadap yayasan</li>
                     <li>6. Berkepribadian kuat, berbudaya dan berwawasan kebangsaan</li>
                     <li>7. Membangun kebersamaan, kekeluargaan dan persaudaraan yang saling melayani</li>
                     <li>8. Menciptakan suasana kerja yang kondusif, aman, tentram dan damai sejahtera.</li>
                  </ul>
               </div><!--act-inffo end-->
            </div>
         </div>
      </div><!--abt-page-row end-->
   </div>
</section><!--about-page-content end-->

<section class="benifit-section">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="section-title">
               <h2>Welcome to SD Kristen Pirngadi</h2>
               <p>Di sini, kami tidak hanya mengajarkan pelajaran, tetapi juga memupuk nilai-nilai kehidupan yang akan membimbing anak-anak menjadi individu yang berkarakter, berpengetahuan, dan penuh kasih.</p>
               <a href="contacts.html" title="" class="btn-default">Contacts <i class="fa fa-long-arrow-alt-right"></i></a>
            </div><!--section-title end-->
         </div>
         <div class="col-lg-6">
            <div class="about-us-section p-0">
               <div class="about-sec">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="abt-col">
                           <img src="assets/img/icon5.png" alt="">
                           <h3>Pengajar Terbaik </h3>
                           <p>Pengajar Terbaik Di SD Kristen Pirngadi, kami bangga memiliki tim pengajar yang luar biasa.</p>
                        </div><!--abt-col end-->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="abt-col">
                           <img src="assets/img/icon7.png" alt="">
                           <h3>Akreditasi Pendidikan</h3>
                           <p>Program Akreditasi memastikan bahwa kurikulum kami memenuhi standar pendidikan internasional terbaik.</p>
                        </div><!--abt-col end-->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="abt-col">
                           <img src="assets/img/icon9.png" alt="">
                           <h3>Program Akademik Unggulan</h3>
                           <p>Kami menggunakan kurikulum yang dirancang untuk mengembangkan kompetensi inti siswa dalam berbagai mata pelajaran.</p>
                        </div><!--abt-col end-->
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="abt-col">
                           <img src="assets/img/icon8.png" alt="">
                           <h3>Layanan Dukungan Siswa</h3>
                           <p>Kami memahami bahwa setiap siswa memiliki kebutuhan unik dan tantangan pribadi yang mungkin mereka hadapi selama proses belajar.a</p>
                        </div><!--abt-col end-->
                     </div>
                  </div>
               </div><!--about-rw end-->
            </div>
         </div>
      </div>
   </div>
</section><!--benifit-section end-->

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


@endsection

@push('after-script')


@endpush