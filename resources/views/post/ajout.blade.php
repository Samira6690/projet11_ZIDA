<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJET 11</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UN POST</h1>
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
<form action="/ajout/traitement" method="POST" class="form-group">
    @csrf
                <div class="form-group">
                    <label for="Titre">Titre</label>
                    <input type="text" class="form-control" id="Titre" name="titre">
                </div><br>
                <label for="text">Contenu</label>
                <div class="form-group">
<textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
    </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="tag_id" id="tag_id">
                        <option value="selected">Sélectionnez un tag</option>
                        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">
                            {{ $tag->nom }}
                        </option>
                        @endforeach
                </select>
                </div><br>


                 {{--  <div class="form-group">
                    <label for="Etudiant">Etudiant en charge</label>
                    <input type="text" class="form-control" id="Etudiant" name="etudiant">
                </div><br>    --}}

<button type="submit" class="btn btn-primary">AJOUTER UN POST</button><br><br>
<a href="/post" class="btn btn-danger">Revenir à la liste des posts</a>
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
