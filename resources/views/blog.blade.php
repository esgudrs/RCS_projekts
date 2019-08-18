@extends('layouts.layout')

@section('head')

  <link rel="stylesheet" type="text/css" href="/css/blog.css?v={{rand()}}" >

<style>

  .blog-h1 {
    color: white;
  }

  .blog-back {
    background: white;
  }

  .page-sel {
    width: 177px;
  }

</style>

@endsection

@section('content')


    <!-- Slider Conent -->

<section class="content-size my-2">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="bildes/slider/bilde1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="bildes/slider/bilde2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="bildes/slider/bilde3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="bildes/slider/bilde4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>


{{-- blogi --}}

<section class="content-size my-5">
  <div class="row mx-auto">
      @foreach ($posts as $post)
    <div class="col-12 col-md-4 col-xl-3 my-4">
        <div class="card mx-auto" style="width: 18rem;">
          <img src="{{$post->img}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{ str_limit($post->body, $limit = 100, $end = '...') }}</p>
            <a href="/blog/{{$post->id}}" class="float-right">READ MORE</a>
          </div>
        </div>
    </div>
      @endforeach
  </div>
</section>


<nav aria-label="..." class="mx-auto page-sel">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
    </li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
@endsection
