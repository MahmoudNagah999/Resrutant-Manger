@extends('layouts.app')
    @section('title','Contact Us')
    @section('content')
        <body class="ContactBody">
            <div class="full-height ContactContent">
                <h1 class="ContactH1"> We would love to hear from you ! </h1>
            </div>
            <!-- Section: Contact v.1 -->
<section class="my-5">

    <div class="row">
      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-4">
  
        <!-- Form with header -->
        <div class="card">
          <div class="card-body">
            <!-- Header -->
            <div class="form-header accent-1 title">
              <h3 class="mt-2 text-center"><i class="fa fa-envelope"></i> Write To Us :</h3>
            </div>
            <!-- Body -->
            <div class="md-form">
              <i class="fa fa-user prefix pull-left"></i>
              <label for="form-name" class="pull-right"> Your Name</label>
              <input type="text" id="form-name" class="form-control" placeholder="Your Name">
            </div>
            <div class="md-form">
              <i class="fa fa-envelope prefix pull-left"></i>
              <label for="form-email" class="pull-right"> Your Email</label>
              <input type="text" id="form-email" class="form-control" placeholder="Your Email">
            </div>
            <div class="md-form">
              <i class="fa fa-tag prefix pull-left"></i>
              <label for="form-Subject" class="pull-right">Subject</label>
              <input type="text" id="form-Subject" class="form-control" placeholder="The Purpose Of The Message">
            </div>
            <div class="md-form">
              <i class="fa fa-edit pull-left"></i>
              <label for="form-text" class="mess pull-right">Send Message</label>
              <textarea id="form-text" class="form-control md-textarea" rows="3" placeholder="Write Your Message"></textarea>      
            </div>
            <div class="text-center Send">
              <button class="btn btn-success">Send</button>
            </div>
          </div>
        </div>
        <!-- Form with header -->
  
      </div>
      <!-- Grid column -->

  
    </div>
  
</section>
  <!-- Section: Contact v.1 -->
        </body>
@endsection