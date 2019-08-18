@extends('layouts.layout')

@section('head')

  <link rel="stylesheet" type="text/css" href="/css/blog-post.css?v={{rand()}}" >
  <link rel="stylesheet" type="text/css" href="/css/blog-coments.css?v={{rand()}}" >


@endsection


@section('content')


  <!-- Page Content -->
  <div class="container content-size mb-5 blog-back">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$post->author}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at}}}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded big-blog-image" src="{{$post->img}}" alt="">

        <hr>

        <!-- Post Content -->
        <p>{{$post->body}}</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  @section('js')

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="/js/coments.js"></script>


  @endsection

@endsection
