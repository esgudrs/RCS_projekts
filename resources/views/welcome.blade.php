@extends('layouts.layout')

@section('head')

  <link rel="stylesheet" type="text/css" href="/css/home.css?v={{rand()}}" >
  <link rel="stylesheet" type="text/css" href="/css/blog.css?v={{rand()}}" >


<link href="https://fonts.googleapis.com/css?family=Lexend+Peta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">


@endsection

@section('content')

<div class="container content-size text-center">
    <div class="row">
        <div class="col-6 mx-auto">
            <img src="/bildes/welcome.jpg" alt="welcome" class="welcome-img img-fluid">
        </div>
    </div>
</div>

<section>

</section>


<section class="content-size my-5">
  <div class="row mx-auto">
      @foreach ($posts as $post)
    <div class="col-12 col-md-6 col-xl-3 my-4">
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




@endsection
