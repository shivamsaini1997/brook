@extends('frontend.layouts.main')
@push('title')
    <title>{{$project->project_name}}</title>
@endpush
@php
    use Illuminate\Support\Facades\Storage;
@endphp
@section('main')
  <!-- Breadcrumb area start -->
  <section class="breadcrumb__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content">
            <h1 class="breadcrumb__title">{{$project->project_name}}</h1>
            <p><a href="{{url('/')}}">Home</a> <span>{{$project->project_name}}</span></p>
          </div>
        </div>
      </div>
    </div>
    <img src="{{url('frontend/imgs/hero/overlay.png')}}" alt="overlay" class="overlay">
  </section>
  <!-- Breadcrumb area end -->


  <!-- Portfolio Meta start -->
  <div class="portfolio__meta-wrap pt-100 pb-100">
    <div class="container">
      <ul class="portfolio__meta">
        <li><strong>Client</strong>{{$project->client_name}}</li>
        <li><strong>start date</strong><?php
            echo date('d-M-Y', strtotime($project->start_date));
            ?></li>
        <li><strong>end date</strong> <?php
            echo date('d-M-Y', strtotime($project->end_date));
            ?></li>
        <li><strong>project type</strong> {{$project->project_type}}</li>
        <li><strong>location</strong> {{$project->location}}</li>
      </ul>
    </div>
  </div>
  <!-- Portfolio Meta end -->


  <!-- Portfolio Details start -->
  <section class="portfolio__details-area pt-120 pb-100">
    <div class="container">
      <div class="portfolio__details">
        <div class="thumb">
          <img src="{{Storage::Url($project->project_image)}}" alt="Image">
        </div>
        <div class="portfolio__details-content">
            {!!$project->project_detail!!}
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio Details end -->


  <!-- Related Portfolio start -->
  <section class="portfolio__related-area pt-120 pb-130">
    <div class="container">
      <h2 class="sec-title">Related Portfolio</h2>

      <div class="portfolio__related">
        <div class="portfolio__item-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">
          <a href="project.html">
            <img src="assets/imgs/portfolio/1.png" alt="Portfolio Thumb" class="pf-thumb">
            <div class="portfolio__info">
              <h4 class="portfolio__title">web Development</h4>
              <h5 class="portfolio__cat">web development</h5>
            </div>
          </a>
        </div>
        <div class="portfolio__item-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
          <a href="project.html">
            <img src="assets/imgs/portfolio/2.png" alt="Portfolio Thumb" class="pf-thumb">
            <div class="portfolio__info">
              <h4 class="portfolio__title">Marketing</h4>
              <h5 class="portfolio__cat">Social Media Marketing</h5>
            </div>
          </a>
        </div>
        <div class="portfolio__item-3 wow animate__animated animate__fadeInUp" data-wow-delay="0.45s">
          <a href="project.html">
            <img src="assets/imgs/portfolio/3.png" alt="Portfolio Thumb" class="pf-thumb">
            <div class="portfolio__info">
              <h4 class="portfolio__title">Marketing</h4>
              <h5 class="portfolio__cat">Social Media Marketing</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Related Portfolio end -->


  <!-- Brand area start -->
  <section class="brand__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="brand__list">
            <div class="brand__item">
              <img src="assets/imgs/brand/1.png" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="assets/imgs/brand/2.png" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="assets/imgs/brand/3.png" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="assets/imgs/brand/4.png" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="assets/imgs/brand/2.png" alt="Brand Logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand area end -->

@endsection
