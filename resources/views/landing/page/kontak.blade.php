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
         <h2>Kontak</h2>
         <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Pirngadi</span></li>
         </ul>
      </div><!--pager-content end-->
   
   </div>
</section><!--pager-section end-->

<section class="page-content">
   <div class="container">
      <div class="mdp-map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15831.588390194815!2d112.7349433!3d-7.2525513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f94164e02c4f%3A0x4e19e511ae8e3f61!2sPirngadi!5e0!3m2!1sid!2sid!4v1722704178455!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!--mdp-map end-->
      <div class="mdp-contact">
         <div class="row">
            <div class="col-lg-8 col-md-7">
               <div class="comment-area">
                  <h3>Add Comment</h3>
                  <form id="contact-form" method="post" action="#">
                     <div class="response"></div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input type="text" name="name" class="name" placeholder="Name" required>
                           </div><!--form-group end-->
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input type="email" name="email" class="email" placeholder="Email" required>
                           </div><!--form-group end-->
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <textarea name="message" placeholder="Message"></textarea>
                           </div><!--form-group end-->
                        </div>
                        <div class="col-lg-12">
                           <div class="form-submit">
                              <button type="button" id="submit" class="btn-default">Send Now <i class="fa fa-long-arrow-alt-right"></i></button>
                           </div><!--form-submit end-->
                        </div>
                     </div>
                  </form>
               </div><!--comment-area end-->
            </div>
            <div class="col-lg-4 col-md-5">
               <div class="mdp-our-contacts">
                  <h3>Our Contacts</h3>
                  <ul>
                     <li>
                        <div class="d-flex flex-wrap">
                           <div class="icon-v">
                              <img src="assets/img/icon15.png" alt="">
                           </div>
                           <div class="dd-cont">
                              <h4>Call</h4>
                              <span>+ 0315484398</span>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="d-flex flex-wrap">
                           <div class="icon-v">
                              <img src="assets/img/icon16.png" alt="">
                           </div>
                           <div class="dd-cont">
                              <h4>Jam Sekolah</h4>
                              <span>Senin - Jumat 7 Pagi - 2 Sore</span>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="d-flex flex-wrap">
                           <div class="icon-v">
                              <img src="assets/img/icon17.png" alt="">
                           </div>
                           <div class="dd-cont">
                              <h4>Alamat</h4>
                              <span>Surabaya di Jl. Pirngadi 4 - 6</span>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div><!--mdp-our-contacts end-->
            </div>
         </div>
      </div><!--mdp-contact end-->
   </div>
</section><!--page-content end-->



@endsection

@push('after-script')


@endpush