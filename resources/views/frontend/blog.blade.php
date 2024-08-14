@extends('frontend.layouts.main')
@push('title')
    <title>Blog</title>
@endpush
@php
    use Illuminate\Support\Facades\Storage;
@endphp
<style>
    .blog__pagination svg {
    width: 25px;
}
</style>
@section('main')
    <!-- Breadcrumb area start -->
    <section class="breadcrumb__area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content">
                        <h1 class="breadcrumb__title wow animate__animated animate__fadeInUp" data-wow-delay="0.2s"> Blog</h1>
                        <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0.4s"><a href="index.html">Home</a>
                            <span> Blog</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ url('frontend/imgs/hero/overlay.png') }}" alt="overlay" class="overlay">
    </section>
    <!-- Breadcrumb area end -->


    <section class="blog__area-3 pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="blog__inner-3">
                        <div class="blog__items-3">
                            <div class="row">
                                @foreach ($blog as $blogs)
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog__item mb-4 shadow wow animate__animated animate__fadeInUp"
                                            data-wow-delay="0.2s">
                                            <a href="{{ route('blog-details', $blogs->slug) }}"><img
                                                    src="{{ Storage::url($blogs->blog_image) }}" alt="Blog Image"></a>
                                            <div class="blog__content">
                                                <div class="date">{{ $blogs->created_at->format('d F Y') }}</div>
                                                <a href="{{ route('blog-details', $blogs->slug) }}">
                                                    <h2 class="blog__title">
                                                        {{ \Illuminate\Support\Str::words($blogs->title, 6) }}</h2>
                                                </a>
                                                <p>{!! \Illuminate\Support\Str::words($blogs->blog_detail, 30) !!}</p>
                                                <a href="{{ route('blog-details', $blogs->slug) }}" class="link">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            <div class="blog__pagination">
                                {{ $blog->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                        <div class="blog__sidebar">
                            <div class="sidebar__widgets">
                                <div class="widget__search wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                                    <form action="#">
                                        <input type="search" name="search" placeholder="Search Keywords">
                                        <input type="submit" class="submit" value="Search">
                                    </form>
                                </div>
                                <div class="widget__category wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="widget__title">Categories</h2>
                                    <ul>
                                        <li><a href="#">Digital Marketing <span>(05)</span></a></li>
                                        <li><a href="#">Branding Designs <span>(05)</span></a></li>
                                        <li><a href="#">Sterling Silver <span>(05)</span></a></li>
                                        <li><a href="#">Business Solution <span>(05)</span></a></li>
                                        <li><a href="#">Corporate Policy <span>(05)</span></a></li>
                                        <li><a href="#">Development <span>(05)</span></a></li>
                                        <li><a href="#">Web Design <span>(05)</span></a></li>
                                    </ul>
                                </div>
                                <div class="widget__rposts wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                                    <h2 class="widget__title">Recent Posts</h2>

                                    <div class="recent-items">
                                        @foreach ($blog as $blogs)
                                        <div class="recent-item">
                                            <div class="img">
                                                <a href="{{ route('blog-details', $blogs->slug) }}"><img src="{{ Storage::url($blogs->blog_image) }}" alt="Image"></a>
                                            </div>
                                            <div class="info">
                                                <a href="{{ route('blog-details', $blogs->slug) }}">
                                                    <h2 class="title">{{ \Illuminate\Support\Str::words($blogs->title, 3) }}</h2>
                                                </a>
                                                <p>{{ $blogs->created_at->format('d F Y') }}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
