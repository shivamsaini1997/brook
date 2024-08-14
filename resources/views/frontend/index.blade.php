@extends('frontend.layouts.main')
@push('title')
    <title>Home</title>
@endpush
@php
    use Illuminate\Support\Facades\Storage;
@endphp
@section('main')

  <!-- Hero area start -->
  <section class="hero__area no-pb">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="hero__slider-wrap">
            <div class="swiper hero__slider">
              <div class="swiper-wrapper">
                @foreach ($banner as $banners )

                <div class="swiper-slide">
                    <div class="hero__content">
                        <h1 class="hero__sub-title cxufadeUp">{{ $banners->sub_heading }}</h1>
                        <h2 class="hero__title cxufadeUp2">{{ $banners->main_heading }} <br> <span>{{ $banners->main_heading2 }}</span></h2>
                        <p class="cxufadeUp3">{{ $banners->description }}</p>
                        <a href="about.html" class="cxu-btn-primary cxufadeUp4">DISCOVER MORE</a>
                    </div>
                </div>
                @endforeach


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="{{url('frontend/imgs/hero/overlay.png')}}" alt="overlay" class="overlay">
    <img src="{{url('frontend/imgs/hero/shape.png')}}" alt="overlay" class="shape-1">
    <img src="{{url('frontend/imgs/hero/shape-2.png')}}" alt="overlay" class="shape-2">
  </section>
  <!-- Hero area end -->


  <!-- Feature area start -->
  <section class="feature__area pt-130 pb-125">
    <div class="container">
      <div class="row">
        @foreach ($feature as $index => $features)

        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
          <div class="feature__item wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 * ($index + 1) }}s">
            <img src="{{ Storage::url($features->image) }}" alt="Icon" class="feature__icon">
            <h2 class="feature__text">{{$features->main_heading	}} <br>{{$features->sub_heading}}</h2>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- Feature area end -->


  <!-- About area start -->
  <section class="about__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="about__left">
            <img src="{{Storage::url($about?$about->image1:'')}}" alt="Image" class="image">
            <img src="{{Storage::url($about?$about->image2:'')}}" alt="Image" class="image-2">
            <img src="{{Storage::url($about?$about->image3:'')}}" alt="Image" class="image-3">

            <img src="{{url('frontend/imgs/about/s1.png')}}" alt="shape" class="shape">
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
          <div class="about__right">
            <div class="about__right-inner">
              <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">About Company</h2>
              <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">{{$about?$about->main_heading:''}}
                <span>{{$about?$about->sub_heading:''}}</span>
              </h3>
              <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">{{$about?$about->description:''}}</p>
              <ul class="list-check wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <li>{{$about?$about->point1:''}}</li>
                <li>{{$about?$about->point2:''}}</li>
                <li>{{$about?$about->point3:''}}</li>
                <li>{{$about?$about->point4:''}}</li>
              </ul>
              <a href="#" class="cxu-btn-primary wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">READ
                MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About area end -->


  <!-- Service area start -->
  <section class="service__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="sec-title-wrap">
            <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Our Best Service
            </h2>
            <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">WHAT Services WE’RE <br>
              <span>OFFERING.</span>
            </h3>
          </div>
        </div>
      </div>
      <div class="row">


        @foreach ($serviceoffer as $index =>$serviceoffers)

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <a href="price.html">
                <div class="service__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
              <div class="service__left">
                <div class="icon">
                    {!!$serviceoffers->svg_icon!!}
                </div>
              </div>
              <div class="service__right">
                <h3 class="service__title">{{$serviceoffers->main_heading}} <br>
                    {{$serviceoffers->sub_heading}} </h3>
                <p>{{$serviceoffers->description}}
                </p>
              </div>
            </div>
            <div class="service__serial wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.3 * ($index + 1) }}s"><span>0{{ 1 * ($index + 1) }}</span>
            </div>
          </a>
        </div>

        @endforeach

      </div>
    </div>
  </section>
  <!-- Service area end -->


  <!-- Counter area start -->
  <section class="counter__area">
    <div class="container">
      <div class="counter__inner">
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
              <div class="counter-active counter__number">30K+</div>
              <h3 class="counter__text">HAPPY <br> CUSTOMERS</h3>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
              <div class="counter-active counter__number">90+</div>
              <h3 class="counter__text">SKILLED <br> EMPLOYEES</h3>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
              <div class="counter-active counter__number">27K+</div>
              <h3 class="counter__text">PROJECT <br>COMPLETED</h3>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
            <div class="counter__item wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
              <div class="counter-active counter__number">120+</div>
              <h3 class="counter__text">ACHIEVED <br>TROPHY AWARDS</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter area end -->


  <!-- Testimonial area start -->
  <section class="testimonial__area pt-130 pb-110">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="sec-title-wrap">
            <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Testimonials</h2>
            <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Customer's Awesome <br>
              <span>Feedback.</span>
            </h3>
          </div>
          <div class="testimonial__slider-wrap">
            <div class="swiper testimonial__slider">
              <div class="swiper-wrapper">
                @foreach ($testimonial as $testimonials)

                <div class="swiper-slide">
                  <div class="testimonial__slide">
                    <img src="{{Storage::url($testimonials->profile_image)}}" alt="Client"
                      class="wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">{{$testimonials->description}}</p>
                    <h4 class="testimonial__name wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">{{$testimonials->name}}</h4>
                    <h5 class="testimonial__role wow animate__animated animate__fadeInUp" data-wow-delay="0.9s">
                      {{$testimonials->profile_name}}</h5>
                  </div>
                </div>
                @endforeach

              </div>

              <div class="swiper-pagination wow animate__animated animate__fadeInUp" data-wow-delay="0.8s"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial area end -->

  <!-- Modal -->
  <div class="modal fade modal__wkprocess" id="workProcessModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <button class="modal-close" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
        <div class="modal-body">
          <iframe src="https://www.youtube.com/embed/CH50zuS8DD0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


  <!-- Portfolio area start -->
  <section class="portfolio__area pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="sec-title-wrap">
            <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Our Portfolio</h2>
            <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">Our Recent <br>
              <span>Projects.</span>
            </h3>
          </div>

          <div class="portfolio__items">
            <div class="portfolio__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
              <a href="project-2.html">
                <img src="{{url('frontend/imgs/portfolio/1.png')}}" alt="Portfolio Thumb" class="pf-thumb">
                <div class="portfolio__info">
                  <h4 class="portfolio__title">Mobile UI Designs</h4>
                  <h5 class="portfolio__cat">Social Media Marketing</h5>
                </div>
              </a>
            </div>
            <div class="portfolio__item wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
              <a href="project-2.html">
                <img src="{{url('frontend/imgs/portfolio/2.png')}}" alt="Portfolio Thumb" class="pf-thumb">
                <div class="portfolio__info">
                  <h4 class="portfolio__title">Product Screen Design</h4>
                  <h5 class="portfolio__cat">Social Media Marketing</h5>
                </div>
              </a>
            </div>
            <div class="portfolio__item wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
              <a href="project-2.html">
                <img src="{{url('frontend/imgs/portfolio/3.png')}}" alt="Portfolio Thumb" class="pf-thumb">
                <div class="portfolio__info">
                  <h4 class="portfolio__title">WordPress Website</h4>
                  <h5 class="portfolio__cat">Social Media Marketing</h5>
                </div>
              </a>
            </div>

            <div class="portfolio__item all wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
              <img src="{{url('frontend/imgs/portfolio/4.png')}}" alt="Portfolio Thumb" class="pf-thumb">
              <div class="portfolio__info">
                <h5 class="portfolio__cat">17+ <br> Photoshosts</h5>
                <a href="{{route('project')}}" class="view-all">VIEW ALL PROJECTS</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio area end -->

  <!-- Blog area start -->
  <section class="blog__area pt-125 pb-125">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="sec-title-wrap">
            <h2 class="sec-sub-title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Our Blog</h2>
            <h3 class="sec-title wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">Our Recent
              <span>Posts.</span>
            </h3>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($blog as $blogs)
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
            <div class="blog__item wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
              <a href="{{route('blog-details', $blogs->slug)}}"><img src="{{Storage::url($blogs->blog_image)}}" alt="Blog Image"></a>
              <div class="blog__content">

                <div class="date">{{$blogs->created_at->format('d F Y') }}</div>
                <a href="{{route('blog-details', $blogs->slug)}}">
                  <h2 class="blog__title">{{\Illuminate\Support\Str::words($blogs->title,6)}}</h2>
                </a>
                <p>{!!\Illuminate\Support\Str::words($blogs->blog_detail, 30) !!}</p>
                <a href="{{route('blog-details', $blogs->slug)}}" class="link">Read More</a>
              </div>
            </div>
          </div>
        @endforeach


      </div>
    </div>
  </section>
  <!-- Blog area end -->


  <!-- Brand area start -->
  <div class="brand__area">
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
  </div>
  <!-- Brand area end -->


@endsection()
