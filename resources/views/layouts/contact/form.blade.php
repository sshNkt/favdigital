@section('form')
<div class="contact-form">
    <h5>CONTACT FORM</h5>
<form id="contact" action="{{url('/contact')}}" name="contact" method="post">
    {{ csrf_field() }}
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
@endsection