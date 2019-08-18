@extends('layouts.layout')

@section('head')

  <link rel="stylesheet" type="text/css" href="/css/aboutus.css?v={{rand()}}" >

<style>

.about-back {
	background: white;
	border-radius: 7px;
	border: 3px solid #333;
	color: black;
}

</style>


@endsection


@section('content')




<section class="team-section text-center my-5 p-5 content-size about-back">

  <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>

  <div class="row">



    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="..." class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Aasdf Pasdj</h5>
      <p class="text-uppercase blue-text"><strong>does something</strong></p>
      <p class="grey-text">lorem ipsum</p>
      <ul class="list-unstyled mb-0">
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <a class="p-2 fa-lg tw-ic">
          <i class="fab fa-twitter blue-text"> </i>
        </a>
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
      </ul>
    </div>

  </div>

</section>


@endsection
