@section('footer')
<!-- end work-with-us -->
<footer class="footer" data-footer="team">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="career wow fadeInUp">
                <h6>CAREER OF FAVDIGITAl</h6>
                <h2>We allways looking for talented peoples, soo let's work together</h2>
                <div class="custom-link"><a href="#">Apply Now</a> <span></span> <i></i>
                </div>
                <!-- end custom-link -->
                </div>
              <!-- end career --> 
            </div>
            <!-- end col-12 -->
            <div class="col-lg-5 wow fadeInUp">
              <figure class="logo"> <img src="{{asset('images/logo.png')}}" alt="Image"> </figure>
            </div>
            <!-- end col-5 --> <div class="col-lg-4 col-md-6 wow fadeInUp">
              <h5>Location</h5>
              <address>
              Studio Favdigital<br>
              Deribasivska 20, Floot 17<br>
              Odessa, Ukraine 65000
              </address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <h5>Say Hello</h5>
              <address>
              hello@favdigital.eu <br>
              +380 063 186 6113
              </address>
            </div>
            <!-- end col-3 -->
            <div class="col-12 wow fadeInUp">
              <div class="sub-footer">
                <ul>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Term & Condutions</a></li>
                  <li><a href="#">Awwwards</a></li>
                </ul>
                <span>© 2019 Favdigital - All rights Reserved</span> </div>
              <!-- end sub-footer --> 
            </div>
            <!-- end col-12 --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </footer>
      <!-- end footer --> 
    </div>
<audio id="hamburger-hover" src="{{asset('audio/link.mp3')}}" preload="auto"></audio>

<!-- JS FILES --> 

<script src="{{ asset('js/jquery.min.js') }}" ></script> 
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script> 
<script src="{{ asset('js/isotope.min.js') }}"></script> 
<script src="{{ asset('js/swiper.min.js') }}"></script> 
<script src="{{ asset('js/TweenMax.min.js') }}"></script> 
<script src="{{ asset('js/odometer.min.js') }}"></script> 
<script src="{{ asset('js/fancybox.min.js') }}"></script> 
<script src="{{ asset('js/wow.min.js') }}"></script> 
<script src="{{ asset('js/scripts.js') }}"></script> 
@if (Route::current()->getName() == 'index')
<script src="{{ asset('js/consoleText.js') }}"></script> 
@endif
<script src="{{ asset('js/workSlider.js') }}"></script> 
<script src="{{ asset('js/form.js')}}"></script>
</body>
</html>
@endsection