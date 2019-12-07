@section('contactPage')
<section class="page-header">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68780316407!2d30.252511957059642!3d50.4016990487754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNGX0LIsINCj0LrRgNCw0ZfQvdCwLCAwMjAwMA!5e0!3m2!1suk!2str!4v1555663203384!5m2!1suk!2str"></iframe>
        </section>
        <!-- end page-header -->
        <section class="contact">
            <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp">
                <h5>ADDRESS</h5>
                    <address>Favdigital<br>
        Kristiatik 15th Street, Floot 17<br>
        Kiev, Ukraine 78692
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
                 <div class="contact-form">
                     <h5>CONTACT FORM</h5>
                     <form id="contact" name="contact" method="post">
                  <div class="form-group">
                    <input type="text" name="name" id="name" autocomplete="off" required>
                     <span>Your name</span>
                  </div>
                  <!-- end form-group -->
                  <div class="form-group"> 
                    <input type="text" name="email" id="email" autocomplete="off" required>
                    <span>Your e-mail</span>
                  </div>
                  <!-- end form-group -->
                  <div class="form-group"> 
                    <input type="text" name="subject" id="subject" autocomplete="off" required>
                    <span>Subject</span>
                  </div>
                  <!-- end form-group -->
                  <div class="form-group"> 
                    <textarea name="message" id="message" autocomplete="off" required></textarea>
                    <span>Your message</span>
                  </div>
                  <!-- end form-group -->
                  <div class="form-group">
                    <button id="submit" type="submit" name="submit">
        <strong>Submit Now<b></b> <i></i></strong>
                 </button>
                  </div>
                  <!-- end form-group -->
                </form>
                <!-- end form --> 
                 <div class="form-group">
                  <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
                <!-- end success -->
                <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
                <!-- end error --> 
                </div>
                <!-- end form-group -->
                </div>
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