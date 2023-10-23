<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJET 10</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UN TUTEUR</h1>
                <hr>
                @if (session('status'))
                <div class="alert alert-succes">
                    {{session('status')}}
                </div>
                @endif

<ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{$error}}</li>
    @endforeach
</ul>
<form action="/ajouter1/traitement1" method="POST" class="form-group">
    @csrf
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="Profession">Profession</label>
                    <input type="text" class="form-control" id="Profession" name="profession">
                </div>
                <div class="form-group">
                    <label for="Contact">Contact</label>
                    <input type="number" class="form-control" id="Contact" name="contact">
                </div><br>

                 {{--  <div class="form-group">
                    <label for="Etudiant">Etudiant en charge</label>
                    <input type="text" class="form-control" id="Etudiant" name="etudiant">
                </div><br>    --}}

<button type="submit" class="btn btn-primary">AJOUTER UN TUTEUR</button><br><br>
<a href="/tuteur" class="btn btn-danger">Revenir à la liste des tuteurs</a>
</form>

            </div>
          </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
