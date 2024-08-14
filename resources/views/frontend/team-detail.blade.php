
@extends('frontend.layouts.main');
@section('main')
  <!-- Breadcrumb area start -->
  <section class="breadcrumb__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content">
            <h1 class="breadcrumb__title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Our Team</h1>
            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.4s"><a href="index.html">Home</a>
              <span>Our Team</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <img src="assets/imgs/hero/overlay.png" alt="overlay" class="overlay">
  </section>
  <!-- Breadcrumb area end -->


  <!-- Team area start -->
  <section class="team__detail pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="team__left wow animate__animated animate__zoomIn" data-wow-delay="0.2s">
            <img src="assets/imgs/team/1.jpg" alt="Client">
          </div>
        </div>

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="team__right">
            <div class="wrapper wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
              <h4 class="team__name-2">Dipok Hassa Kollol</h4>
              <h5 class="team__role-2">Full stack Developer</h5>
              <ul class="header__social-2">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
              </ul>
              <div class="team__content">
                <p>There are many variations of passages of Lorem Ipsum available, the majority have suffered alteration
                  in
                  some form, by injected humour. randomised words which don't look even slightly believable. It uses a
                  dictionary of over 200 Latin words, combined with </p>
                <p>There are many variations of passages of Lorem Ipsum available, the majority have suffered alteration
                  in
                  some form, by injected humour. randomised words which don't look even slightly believable. It uses a
                  dictionary of over 200 Latin words, combined with </p>
              </div>
              <button data-bs-toggle="modal" data-bs-target="#workProcessModal2" class="cxu-btn-primary">Self
                Introduce</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team area end -->

  <!-- Modal -->
  <div class="modal fade modal__wkprocess" id="workProcessModal2" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <button class="modal-close" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
        <div class="modal-body">
          <iframe src="https://www.youtube.com/embed/CH50zuS8DD0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


  <!-- Experience area start -->
  <section class="experience__area pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="experience__left">
            <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">Skills &
              Experiences
            </h2>
            <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">Team Leaders & <br>
              <span>
                Skills.</span>
            </h3>
            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.45s">There are many variations of
              passages of Lorem Ipsum available, the majority have suffered alteration
              in
              some form, by injected humour. randomised words which don't look even slightly believable. It uses a
              dictionary of over 200 Latin words, combined with </p>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="experience__right">
            <div class="experience__item wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">
              <div class="exp-active" data-width="90" data-target="100">Branding Designs</div>
            </div>
            <div class="experience__item wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
              <div class="exp-active" data-width="70" data-target="100">Marketing</div>
            </div>
            <div class="experience__item wow animate__animated animate__fadeInUp" data-wow-delay="0.45s">
              <div class="exp-active" data-width="95" data-target="100">Marketing</div>
            </div>
            <div class="experience__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
              <div class="exp-active" data-width="80" data-target="100">Corporate Solution</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Experience area end -->


  <!-- Brand area start -->
  <section class="brand__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="brand__list">
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">
              <img src="assets/imgs/brand/1.png" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
              <img src="assets/imgs/brand/2.png" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.45s">
              <img src="assets/imgs/brand/3.png" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
              <img src="assets/imgs/brand/4.png" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.75s">
              <img src="assets/imgs/brand/2.png" alt="Brand Logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand area end -->
@endsection