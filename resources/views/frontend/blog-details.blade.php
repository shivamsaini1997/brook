
@extends('frontend.layouts.main')
@push('title')
    <title>{{$blog->title}}</title>
@endpush
@php
    use Illuminate\Support\Facades\Storage;
@endphp
@section('main')
  <section class="breadcrumb__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content">

            <h1 class="breadcrumb__title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">{{$blog->title}}</h1>
            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.4s"><a href="index.html">HOME</a> <a
                href="blog.html">Blog</a> <span>{{$blog->title}}</span></p>
          </div>
        </div>
      </div>
    </div>
    <img src="{{url('frontend/imgs/hero/overlay.png')}}" alt="overlay" class="overlay">
  </section>


  <section class="blog__detail-area pt-130">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="blog__inner-4">
            <div class="blog__items-3">
              <article class="blog__item-3">
                <a href="#"><img src="{{Storage::url($blog->blog_image)}}" alt="Blog Image"></a>
                <div class="blog__content-3">
                  <div class="blog__meta plr">
                    <div class="date"><span><i class="fa-solid fa-calendar-days"></i> {{$blog->created_at->format('d') }} </span> {{$blog->created_at->format('F Y') }}</div>
                    <ul>
                      <li><a href="#"><i class="fa-regular fa-folder"></i> Apartment</a></li>
                      <li><a href="#"><i class="fa-regular fa-user"></i> Nirob Aronno</a></li>
                      <li><a href="#"><i class="fa-regular fa-comment"></i> 34 Comments</a></li>
                    </ul>
                  </div>
                  <h2 class="blog__title-3 plr">Incorporation is A Big Milestone for Your Business You Need Considering
                  </h2>

                  <div class="blog__detail">
                    <div class="blog__detail-content">
                      {!!$blog->blog_detail!!}
                    </div>

                    <div class="feedback">
                      <div class="text">
                        <p>Is this content most useful?</p>
                      </div>
                      <div class="btns">
                        <button><i class="fa-solid fa-thumbs-up"></i> like</button>
                        <button><i class="fa-solid fa-thumbs-down"></i> dislike</button>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <div class="blog__tag-share">
                <div class="blog__tags">
                  <p>tags:</p>
                  <ul>
                    <li><a href="#">Corporate,</a></li>
                    <li><a href="#">Business,</a></li>
                    <li><a href="#">Finance</a></li>
                  </ul>
                </div>
                <div class="blog__share">
                  <p><i class="fa-solid fa-share-nodes"></i> Share</p>
                  <ul class="header__social-2 share">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>


              <div class="blog__author">
                <div class="img">
                  <a href="#"><img src="{{url('frontend/imgs/team/1.jpg')}}" alt="Author"></a>
                </div>
                <div class="info">
                  <a href="#">
                    <h2 class="name">Jonathan Patawari</h2>
                  </a>
                  <h3 class="role">Reporter, CNN & Instructor</h3>
                  <p>I'm Nirob Aronno a UI Designer designed for creatives and made for everyone. Take a course on Code,
                    Design, or Project . We are believing everyone should have the opportunity.</p>
                  <ul class="header__social-2 share">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>

              <div class="comment__area">
                <h2 class="comment__total">4 Comments</h2>

                <div class="comment__list">
                  <div class="comment__item">
                    <div class="img">
                      <img src="{{url('frontend/imgs/team/1.jpg')}}" alt="Author">
                    </div>
                    <div class="info">
                      <h2 class="name">Jonathan Patawari</h2>
                      <h3 class="date">28 March, 2021 <span>10:21 am</span></h3>
                      <p>I'm Nirob Aronno a UI Designer designed for creatives and made for everyone. Take a course on
                        Code, Design, or Project . We are believing everyone should have the opportunity.</p>
                      <ul class="comment__meta">
                        <li><a href="#"><i class="fa-solid fa-thumbs-up"></i> like</a></li>
                        <li><a href="#"><i class="fa-solid fa-thumbs-down"></i> dislike</a></li>
                        <li><a href="#"><i class="fa-solid fa-reply"></i> reply</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment__item">
                    <div class="img">
                      <img src="{{url('frontend/imgs/team/1.jpg')}}" alt="Author">
                    </div>
                    <div class="info">
                      <h2 class="name">Jonathan Patawari</h2>
                      <h3 class="date">28 March, 2021 <span>10:21 am</span></h3>
                      <p>I'm Nirob Aronno a UI Designer designed for creatives and made for everyone. Take a course on
                        Code, Design, or Project . We are believing everyone should have the opportunity.</p>
                      <ul class="comment__meta">
                        <li><a href="#"><i class="fa-solid fa-thumbs-up"></i> like</a></li>
                        <li><a href="#"><i class="fa-solid fa-thumbs-down"></i> dislike</a></li>
                        <li><a href="#"><i class="fa-solid fa-reply"></i> reply</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment__item reply">
                    <div class="img">
                      <img src="{{url('frontend/imgs/team/1.jpg')}}" alt="Author">
                    </div>
                    <div class="info">
                      <h2 class="name">Jonathan Patawari</h2>
                      <h3 class="date">28 March, 2021 <span>10:21 am</span></h3>
                      <p>I'm Nirob Aronno a UI Designer designed for creatives and made for everyone. Take a course on
                        Code, Design, or Project . We are believing everyone should have the opportunity.</p>
                      <ul class="comment__meta">
                        <li><a href="#"><i class="fa-solid fa-thumbs-up"></i> like</a></li>
                        <li><a href="#"><i class="fa-solid fa-thumbs-down"></i> dislike</a></li>
                        <li><a href="#"><i class="fa-solid fa-reply"></i> reply</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment__item">
                    <div class="img">
                      <img src="{{url('frontend/imgs/team/1.jpg')}}" alt="Author">
                    </div>
                    <div class="info">
                      <h2 class="name">Jonathan Patawari</h2>
                      <h3 class="date">28 March, 2021 <span>10:21 am</span></h3>
                      <p>I'm Nirob Aronno a UI Designer designed for creatives and made for everyone. Take a course on
                        Code, Design, or Project . We are believing everyone should have the opportunity.</p>
                      <ul class="comment__meta">
                        <li><a href="#"><i class="fa-solid fa-thumbs-up"></i> like</a></li>
                        <li><a href="#"><i class="fa-solid fa-thumbs-down"></i> dislike</a></li>
                        <li><a href="#"><i class="fa-solid fa-reply"></i> reply</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="comment__item reply">
                    <div class="img">
                      <img src="{{url('frontend/imgs/team/1.jpg')}}" alt="Author">
                    </div>
                    <div class="info">
                      <h2 class="name">Jonathan Patawari</h2>
                      <h3 class="date">28 March, 2021 <span>10:21 am</span></h3>
                      <p>I'm Nirob Aronno a UI Designer designed for creatives and made for everyone. Take a course on
                        Code, Design, or Project . We are believing everyone should have the opportunity.</p>
                      <ul class="comment__meta">
                        <li><a href="#"><i class="fa-solid fa-thumbs-up"></i> like</a></li>
                        <li><a href="#"><i class="fa-solid fa-thumbs-down"></i> dislike</a></li>
                        <li><a href="#"><i class="fa-solid fa-reply"></i> reply</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="comment__form">
                <h2 class="title">Leave a Comment</h2>
                <form action="#">
                  <div class="input-grp">
                    <input type="text" placeholder="name" name="name">
                    <input type="email" name="email" placeholder="email">
                  </div>
                  <textarea name="message" rows="3" placeholder="Comment..."></textarea>
                  <input type="submit" value="comment" class="submit">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
