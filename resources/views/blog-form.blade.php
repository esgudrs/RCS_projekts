@extends('layouts.layout')

@section('head')

<link rel="stylesheet" type="text/css" href="/css/contacts.css?v={{rand()}}" >

<style>

.back {
    background: white;
}

</style>

@endsection




@section('content')


<section class="content-size my-5 cont-back">

        <h2 class="h1-responsive font-weight-bold text-center my-5">Post new blog</h2>

    <form method="POST" action="/blog/create">
        @csrf

        <div class="row">

          <div class="col mx-5 mb-5 ">

            <form>

              <div class="row">

                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-Subject" class="form-control" name="title" required>
                    <label for="contact-Subject" class="">Title</label>
                  </div>
                </div>

              </div>

              <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea id="" class="form-control md-textarea" rows="12" name="body" required></textarea>
                    <label for="contact-message">Your message</label>
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </form>

            <div class="text-center text-md-center">
              <input class="btn btn-warning btn-md col-4" type="submit" value="Save">
            </div>

          </div>

        </div>
        <!-- Grid row -->
    </form>

      </section>
      <!-- Section: Contact v.2 -->

@endsection
