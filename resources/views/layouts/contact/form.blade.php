@section('form')
<div class="container">
 
  
  <form id="minimal" action="/contact" method="POST">
    
    <h1>Get in touch</h1>
    <div class="alert alert-success">Thank you for submitting the form.</div>
    <div class="alert alert-warning">Error submitting form. </div>
    <input type="text" placeholder="first name" required="required" name="fname"/>
    <input type="text" placeholder="last name" required="required" name="lname"/>
    <input type="text" placeholder="email" required="required" name="email"/>
    <button class="btn btn-brand">Submit</button>
    <div class="alert empty-form">*Please dont leave the field empty</div>
  </form>  
    <div>Fill the field and press "Enter"</div>
</div>
@endsection