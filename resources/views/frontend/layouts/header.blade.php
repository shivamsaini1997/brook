<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Site Title -->
    @stack('title')

  <!-- Site Favicon -->
  <link rel="shortcut icon" href="{{url('frontend/imgs/logo/favicon.png')}}" type="image/x-icon">


  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,900;1,700&amp;display=swap"
    rel="stylesheet">


  <!-- All CSS Files -->
  <link rel="stylesheet" href="{{url('frontend/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/progressbar.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/master.css')}}">


</head>

<body>
  <!-- Scroll to top -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  <header class="header__area" id="header__sticky">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="header__inner">
            <div class="header__logo">
              <a href="{{url('/')}}">
                <img src="{{url('frontend/imgs/logo/logo.png ')}}" alt="Logo" class="logo">
                <img src="{{url('frontend/imgs/logo/logo-3.png ')}}" alt="Logo" class="sticky-logo">
              </a>
            </div>
            <div class="header__menu">
              <div class="main-menu">
                <ul>
                  {{-- <li class="has-dropdown"><a href="#">Home</a>
                    <ul class="main-dropdown">
                      <li><a href="index.html">digital Agency</a></li>
                      <li><a href="index-dark.html">digital Agency dark</a></li>
                      <li><a href="index-slider.html">digital Agency Banner Slider</a></li>
                      <li><a href="index-2.html">Creative Agency</a></li>
                      <li><a href="index-2-dark.html">Creative Agency dark</a></li>
                    </ul>
                  </li> --}}
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li><a href="{{url('/service')}}">Service</a></li>
                  <li><a href="{{url('/team')}}">Team</a></li>
                  <li><a href="{{url('/blog')}}">Blog</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="header__others">
              <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
              <button class="search-close"><i class="fa-solid fa-xmark"></i></button>
              <button class="menu-icon"><i class="fa-solid fa-bars"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header area end -->

  <div class="header__search">
    <form action="#">
      <input type="text" name="s" placeholder="Search...">
    </form>
  </div>

  <!-- Offcanvas area start -->
  <div class="offcanvas__area">
    <div class="offcanvas__inner">
      <div class="offcanvas__top">
        <img src="{{url('frontend/imgs/logo/logo.png')}}" alt="Logo">
        <button id="offcanvas_close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="offcanvas__search">
        <form action="#">
          <input type="text" placeholder="Search..." name="s">
        </form>
      </div>
      <div class="offcanvas__menu">
        <div class="offcanvas-menu">
          <ul>
            <li><a href="#">Home</a>
              <ul>
                <li><a href="index.html">digital Agency</a></li>
                <li><a href="index-dark.html">digital Agency dark</a></li>
                <li><a href="index-slider.html">digital Agency Banner Slider</a></li>
                <li><a href="index-2.html">Creative Agency</a></li>
                <li><a href="index-2-dark.html">Creative Agency dark</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>

            <li><a href="#">Service</a>
              <ul>
                <li><a href="service.html">Service</a></li>
                <li><a href="service-dark.html">Service dark</a></li>
                <li><a href="service-2.html">Service v.2</a></li>
                <li><a href="service-2-dark.html">Service v.2 dark</a></li>
              </ul>
            </li>
            <li><a href="#">portfolio</a>
              <ul>
                <li><a href="project.html">portfolio</a></li>
                <li><a href="project-dark.html">portfolio dark</a></li>
                <li><a href="project-2.html">portfolio v.2</a></li>
                <li><a href="project-2-dark.html">portfolio v.2 dark</a></li>
                <li><a href="project-details.html">portfolio details</a></li>
                <li><a href="project-details-dark.html">portfolio details dark</a></li>
              </ul>
            </li>
            <li><a href="#">team</a>
              <ul>
                <li><a href="team.html">team</a></li>
                <li><a href="team-dark.html">team dark</a></li>
                <li><a href="team-detail.html">team detail</a></li>
                <li><a href="team-detail-dark.html">team detail dark</a></li>
                <li><a href="testimonial.html">testimonial</a></li>
              </ul>
            </li>
            <li><a href="#">blog</a>
              <ul>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-dark.html">Blog dark</a></li>
                <li><a href="blog-2.html">Blog v.2</a></li>
                <li><a href="blog-2-dark.html">Blog v.2 dark</a></li>
                <li><a href="blog-details.html">blog details</a></li>
                <li><a href="blog-details-dark.html">blog details dark</a></li>
                <li><a href="blog-details-2.html">blog details v.2</a></li>
                <li><a href="blog-details-2-dark.html">blog details v.2 dark</a></li>
              </ul>
            </li>
            <li><a href="#">others</a>
              <ul>
                <li><a href="about.html">about</a></li>
                <li><a href="about-dark.html">about dark</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="contact-dark.html">Contact dark</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="faq-dark.html">FAQs dark</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="404-dark.html">404 dark</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58408.97484139959!2d90.33915680783855!3d23.798644768568714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c102e2ece5bb%3A0x446e9dc895326a70!2sBangladesh%20National%20Zoo!5e0!3m2!1sen!2sbd!4v1671466814402!5m2!1sen!2sbd"></iframe>
      </div>
      <div class="offcanvas__btm">
        <ul class="footer__location">
          <li>
            <i class="fa-solid fa-location-dot"></i>
            <span>500 Treat Ave, Suite 200 San Francisco, <br>CA 94110, USA-265</span>
          </li>
          <li>
            <i class="fa-solid fa-phone"></i>
            <a href="tel:025698259145">+025 698 259 145 (Support)</a>
          </li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            <a href="mailto:gurudev@mail.com">Info,gurudev@mail.com</a>
          </li>
        </ul>
        <div class="separator"></div>
        <ul class="social-media">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Offcanvas area end -->
