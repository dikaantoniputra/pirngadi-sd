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
         <h2>Semua Kelas</h2>
         <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Semua Kelas</span></li>
         </ul>
      </div><!--pager-content end-->
      <h2 class="page-titlee">Pirngadi</h2>
   </div>
</section><!--pager-section end-->

<section class="classes-page">
   <div class="container">
      {{-- <div class="classes-banner">
         <span>Try now </span>
         <h2>Start Investing in You</h2>
         <a href="classes.html" title="" class="btn-default">Classes <i class="fa fa-long-arrow-alt-right"></i></a>
      </div><!--classes-banner end--> --}}
      <div class="classes-section">
         <div class="classes-sec">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
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

               <div class="col-lg-3 col-md-6 col-sm-6">
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
              
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
               
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
   
               <div class="col-lg-3 col-md-6 col-sm-6">
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
         </div><!--classes-sec end-->
        
      </div>
   </div>
</section><!--classes-page end-->

<section class="newsletter-section">
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
</section><!--newsletter-sec end-->


@endsection

@push('after-script')


@endpush