@extends('frontend.layouts.main')
@push('title')
    <title>Project</title>
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
            <h1 class="breadcrumb__title wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">Our Project
            </h1>
            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.3s"><a href="index.html">Home</a>
              <span>Our Project</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <img src="{{url('frontend/imgs/hero/overlay.png')}}" alt="overlay" class="overlay">
  </section>
  <!-- Breadcrumb area end -->
  @php
  $categories = $project->pluck('category');
 //  dd($categories);
 @endphp

  <!-- Portfolio area start -->
  <section class="portfolio__area-2 pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
            <div class="portfolio__btns-2 wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">
              <button type="button" class="projectbutton" data-filter="all">All Shots</button>
              @foreach ($category as $val)
              <button type="button" class="projectbutton" data-filter=".<?php echo str_replace(' ','-',$val->category); ?>">{{$val->category}}</button>
              @endforeach
            </div>

            <div class="portfolio__search-2 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
              <form action="#">
                <input type="text" name="s" placeholder="Search Shots...">
              </form>
            </div>

            <div class="portfolio__items-2 mixit-active">
                @foreach ($project as $data)
                <div class="portfolio__item-2 portfolio__item3 <?php echo str_replace(' ','-',$data->category); ?> mix
                wow animate__animated animate__fadeInUp"
                 data-wow-delay="0.15s">
                 <div class="portfolio__thumb-2">
                   <img src="{{Storage::url($data->project_image)}}" alt="Portfolio Thumb">
                   <div class="portfolio__info-2">
                     <h2 class="portfolio__cat-2">{{$data->category}}</h2>
                     <a href="{{route('project-detail', $data->slug)}}" class="link-wrap">
                       <span class="arrow"><i class="fa-solid fa-arrow-right"></i></span>
                     </a>
                   </div>
                 </div>
                 <a href="{{route('project-detail', $data->slug)}}">
                   <h3 class="portfolio__title-2">{{$data->project_name}}</h3>
                 </a>
               </div>
                @endforeach

            </div>

            <div class="portfolio__btn wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
              <button class="load-more"> LOAD MORE PROJECTS</button>
            </div>
          </div>

      </div>
    </div>
  </section>
  <!-- Portfolio area end -->


  <!-- Brand area start -->
  <section class="brand__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="brand__list">
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.15s">
              <img src="{{url('frontend/imgs/brand/1.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
              <img src="{{url('frontend/imgs/brand/2.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.45s">
              <img src="{{url('frontend/imgs/brand/3.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
              <img src="{{url('frontend/imgs/brand/4.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item wow animate__animated animate__fadeInUp" data-wow-delay="0.75s">
              <img src="{{url('frontend/imgs/brand/2.png')}}" alt="Brand Logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand area end -->

@endsection


