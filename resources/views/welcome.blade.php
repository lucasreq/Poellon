<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Poellon</title>

    <style>
        .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
            }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .searchbar{
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input{
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color:transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input{
            padding: 0 10px;
            width: 450px;
            caret-color:red;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_icon{
            background: white;
            color: #e74c3c;
        }

        .search_icon{
            height: 40px;
            width: 40px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color:white;
            text-decoration:none;
        }
    </style>
  </head>
  <body style="background-image: url('https://swagatcatering.com/upload/2017/06/indian-food-background.jpg')">

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="https://zupimages.net/up/19/47/rhfx.png" alt="logo" width="100em" height="50em"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="#">Top recettes</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" style="margin:auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/profile') }}">Profil</a>
                                    <a class="dropdown-item" href="#">Historique</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>


    <div class="content" style="margin :auto; width: 75%; margin-top: 1em; background-color:beige;">
        <!-- jumbotron -->
        <div class="jumbotron" style="background-image:url('https://xtratheme.com/restaurant/wp-content/uploads/sites/14/2018/01/pb2-1.jpg'); backgroud-">
            <h1 class="display-4" style="color: white">Trouver une recette !</h1>
            <p class="lead" style="color: white">Une idée pour impressioner vos proches ?</p>
            <hr class="my-4">
            {{-- <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="container h-100">
                    <div class="d-flex justify-content-center h-100">
                        <div class="searchbar">
                        <input class="search_input" type="text" name="q" placeholder="">
                        <button type="submit" style="background-color: grey;border: none;color: white;border-radius: 15%;"><img src="https://icon-library.net/images/zoom-icon/zoom-icon-1.jpg" width='30em'><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form> --}}
        </div>
        <!-- CARD -->
        <div class="row" style="text-align:center; margin:auto; height:auto; padding: .5em .5em .5em .5em;">
            @foreach ($recipes as $row)
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <img src="https://www.canald.com/polopoly_fs/1.1394494.1393432534!/image/potoo.jpg_gen/derivatives/cd_796_449/potoo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->name }}</h5>
                        <p class="card-text">{{ $row->description }}</p>
                        <a href="#" class="btn btn-primary">Recette</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
              <a href="admin/login"> admin access </a>
            </div>
            <!-- Copyright -->

          </footer>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  </body>
</html>
