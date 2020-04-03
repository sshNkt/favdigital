@section('contactPage')
<section class="page-header">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d175899.8546382799!2d30.571704305882903!3d46.459886488269255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6318a0b864c43%3A0x129f8fe28cf2176c!2z0J7QtNC10YHRgdCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1576586985677!5m2!1sru!2sua" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>  
      </section>
        <!-- end page-header -->
        <section class="contact">
            <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp">
                <h5>ADDRESS</h5>
        <address>Favdigital<br>
                      Deribasivska 20, Floot 17<br>
                      Odessa, Ukraine 65000
        </address>
                </div>
                <!-- end col-6 -->
                <div class="col-md-6 wow fadeInUp">
                <h5>CALL US</h5>
                    <address>p: +380 63 186 6113
        </address>
                </div>
                <!-- end col-6 -->
                <div class="col-12 wow fadeInUp">
                <h5>REACH US</h5>
                <address>
                <p>We allways looking for talented peoples, soo let's work together</p>
                <a href="#">hello@favdigital.eu</a>
                    </address>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7 wow fadeInUp">
                 @yield('form')
                <!-- end contat-form -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->
@endsection