@extends('layouts.layout')

@section('head')

  <link rel="stylesheet" type="text/css" href="/css/contacts.css?v={{rand()}}" >


@endsection


@section('content')

<!-- Section: Contact v.2 -->
<section class="my-5 p-5 content-size cont-back">

  <img src="bildes/header/header1.jpg" class="img-fluid mx-auto contact-img d-block" alt="Responsive image">
  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-9 mb-md-0 mb-5">

      <form>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form mb-0">
              <input type="text" id="contact-name" class="form-control mb-2" placeholder="Your name">
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form mb-0">
              <input type="text" id="contact-email" class="form-control mb-2"placeholder="Your email">
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">
            <div class="md-form mb-0">
              <input type="text" id="contact-Subject" class="form-control mb-2"placeholder="Subject">
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">
            <div class="md-form">
              <textarea id="contact-message" class="form-control md-textarea mb-2" rows="3" placeholder="Your message..."></textarea>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </form>

      <div class="text-center text-md-center">
        <a class="btn btn-warning btn-lg">Send</a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 text-center">
      <ul class="list-unstyled mb-0">
        <li>
          <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
          <p>San Francisco, CA 94126, USA</p>
        </li>
        <li>
          <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
          <p>+ 01 234 567 89</p>
        </li>
        <li>
          <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
          <p class="mb-0">contact@example.com</p>
        </li>
      </ul>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.2 -->

@endsection
