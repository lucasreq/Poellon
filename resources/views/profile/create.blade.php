<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Poellon | Creation de profil</title>
        <link rel='stylesheet' href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="d-flex justify-content-center">
                <div class="title m-b-md">
                    Creation de votre profil
                </div>
                <form>
                    <div class="form-group">
                        <label for="inputPseudo">Pseudo</label>
                        <input type="text" class="form-control" id="inputPseudo" aria-describedby="Pseudo" placeholder="Pseudo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Genre</label>
                        <select id="monselect">
                            <option value="masculin" selected>Masculin</option>
                            <option value="feminin">Feminin</option>
                            <option value="autre">Autre</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <input type="text" class="form-control" id="inputDescription" placeholder="Description">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </body>
</html>
