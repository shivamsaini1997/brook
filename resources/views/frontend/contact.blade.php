
@extends('frontend.layouts.main')
@section('main')

  <!-- Breadcrumb area start -->
  <section class="breadcrumb__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content">
            <h1 class="breadcrumb__title">Contact Us</h1>
            <p><a href="index.html">Home</a> <span>Contact Us</span></p>
          </div>
        </div>
      </div>
    </div>
    <img src="{{url('frontend/imgs/hero/overlay.png')}}" alt="overlay" class="overlay">
  </section>
  <!-- Breadcrumb area end -->


  <!-- Contact area start -->
  <section class="contact__area">
    <div class="contact__top pt-130 pb-125">
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-x-8 col-lg-9">
            <div class="contact__top-inner">
              <div class="contact__item">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="title">Phone</div>
                <ul>
                  <li><a href="tel: 63473547464823">+634 7354 7464 823 </a></li>
                  <li><a href="tel:67353428355098">+673 5342 8355 098</a></li>
                </ul>
              </div>
              <div class="contact__item">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="title">Email</div>
                <ul>
                  <li><a href="mailto:info@yourdomain.com">info@yourdomain.com </a></li>
                  <li><a href="mailto:company@domain.com">company@domain.com</a></li>
                </ul>
              </div>
              <div class="contact__item">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="title">Location</div>
                <ul>
                  <li>1362 McKinley Avenue Parker, <br> Colorado, USA-234</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58408.97484139959!2d90.33915680783855!3d23.798644768568714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c102e2ece5bb%3A0x446e9dc895326a70!2sBangladesh%20National%20Zoo!5e0!3m2!1sen!2sbd!4v1671466814402!5m2!1sen!2sbd"></iframe>
    </div>

    <div class="contact__form pt-130 pb-130">
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-x-8 col-lg-6">
            <h2 class="contact__title">Get in touch</h2>
            <div class="text-success thankyoumessage"></div>
            <div class="text-danger errormessage"></div>
            <form id="myform" >
                @csrf
                <input type="hidden" name="_token" value="">
              <div class="input-grp">
                <div>
                    <input type="text" placeholder="Your Name*" class="nameinput form-control" name="name" id="name">
                    <div id="msg-box" class="errors" style="font-size: 14px;"></div>
                </div>
                <div>
                    <input type="email" name="email" id="email" class="emailinput form-control" placeholder="Type Your Email">
                     <div id="msg-box2" class="errors" style="font-size: 14px;"></div>
                </div>

              </div>
              <input type="text" name="subject"  id="subject" class="subjectinput form-control" placeholder="Write Subject">
              <div id="msg-box3" class="errors" style="font-size: 14px;"></div>

              <textarea name="message" id="message" rows="3" class="messageinput form-control" placeholder="Write Your Messages"></textarea>
              <div id="msg-box4" class="errors" style="font-size: 14px;"></div>

              <input type="submit" value="comment" class="submit" class="formsubmit">
            </form>
          </div>
        </div>
      </div>
    </div>

    <img src="{{url('frontend/imgs/bg/contact.png')}}" alt="Contact image" class="bg">
  </section>
  <!-- Contact area end -->


  <!-- Brand area start -->
  <section class="brand__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="brand__list">
            <div class="brand__item">
              <img src="{{url('frontend/imgs/brand/1.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="{{url('frontend/imgs/brand/2.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="{{url('frontend/imgs/brand/3.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="{{url('frontend/imgs/brand/4.png')}}" alt="Brand Logo">
            </div>
            <div class="brand__item">
              <img src="{{url('frontend/imgs/brand/2.png')}}" alt="Brand Logo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Brand area end -->
@endsection

