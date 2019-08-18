<!doctype html>
<html lang="en">
<head>
  <title>ItsDevKing Merch</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="/css/main.css?v={{rand()}}" >

    @yield('head')


  <!-- FONTS -->

  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>

    <!-- NAVBAR -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5 navback">
        <button class="navbar-toggler custom-toggler"" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse content-size" id="navbarSupportedContent">
            <a class="nav-link" href="/"><img class="navpic" src="/bildes/brand/Untitled-3.png" alt=""> <span class="sr-only">(current)</span></a>

            <ul class="navbar-nav ml-auto nav-links">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/blog"> <span class="sr-only">(current)</span>Blog </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/aboutus">About Us <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
        </nav>


    </header>









    {{-- saturs --}}
    @yield('content')



    <!-- FOOTER -->
    <footer>
        <div class="container pb-3 content-size">
            <div class="row pt-3">
            <div class="col-12 col-md-2 support-text text-center">
                <h3>Support</h3>
                <a href="#">FAQ</a>
                <a href="#">GIFT CARDS</a>
                <a href="#">SIZE CHART</a>
                <a href="/contacts">CONTACT SUPPORT</a>
            </div>
            <div class="col-12 col-md-4 text-center social-icons">
                <h3>Socials</h3>
                <a href="https://www.twitch.tv/itsdevking" target="_blank"><i class="fab fa-twitch fa-2x m-3"></i></a>
                <a href="https://www.twitter.com/itsdevking" target="_blank"><i class="fab fa-twitter fa-2x m-3" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/itsdevking" target="_blank"><i class="fab fa-youtube fa-2x m-3" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/itsdevking" target="_blank"><i class="fab fa-instagram fa-2x m-3" aria-hidden="true"></i></a>
            </div>
            <div class="col-12 col-md-6 text-center">
                <h3>SIGN UP FOR THE NEWSLETTER</h3>
                <form action="" class="newsletter">
                <input class="field" type="email" placeholder="E-Mail">
                <button class="subscribe">SUBSCRIBE</button>
                </form>
            </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->

    <script src="/js/navbar.js"></script>

    @yield('js')







    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
