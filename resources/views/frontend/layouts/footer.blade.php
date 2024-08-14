
  <!-- Footer area start -->
  <footer class="footer__area">
    <div class="footer__top">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="footer__widgets">
              <div class="widget__one">
                <img src="{{url('frontend/imgs/logo/logo.png')}}" alt="Footer Logo" class="footer__logo">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected humour</p>

                <ul class="social-media">
                  <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                </ul>
              </div>
              <div class="footer__widget-two">
                <h2 class="footer__widget-title">My Account</h2>
                <ul class="footer__menu">
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Affiliates</a></li>
                  <li><a href="#">Return Policy</a></li>
                  <li><a href="#">Web Development</a></li>
                </ul>
              </div>
              <div class="footer__widget-three">
                <h2 class="footer__widget-title">Our Company</h2>
                <ul class="footer__menu">
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">Order History</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Wish List</a></li>
                  <li><a href="#">Newsletter</a></li>
                </ul>
              </div>
              <div class="footer__widget-four">
                <h2 class="footer__widget-title">Newsletter</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                <div class="newsletter">
                  <form action="#">
                    <input type="text" placeholder="Enter your email">
                    <button type="submit" class="submit">SUBSCRIBE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__btm">
      <p>© 2023 — Banizzo by <a href="">CodeXup</a>. All Rights Reserved.</p>
    </div>
  </footer>
  <!-- Footer area end -->


  <!-- All JS Files -->
  <script src="{{url('frontend/js/jquery-3.6.1.min.js')}}"></script>
  <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('frontend/js/counter.js')}}"></script>
  <script src="{{url('frontend/js/jquery.counterup.min.js')}}"></script>
  <script src="{{url('frontend/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{url('frontend/js/progressbar.js')}}"></script>
  <script src="{{url('frontend/js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('frontend/js/mixitup.min.js')}}"></script>
  <script src="{{url('frontend/js/wow.min.js')}}"></script>
  <script src="{{url('frontend/js/main.js')}}"></script>
  @if(session('success'))
    toastr.success('{{ session('success') }}');
@endif

// {{-- // Display error message --}}
@if(session('error'))
    toastr.error('{{ session('error') }}');
@endif
</body>


</html>
