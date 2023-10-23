<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 10</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UN ETUDIANT</h1>
                <hr>
                <td>
                    <a href="/tuteur" class="btn btn-danger">liste-tuteurs</a>
                </td>
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
<form action="/ajouter/traitement" method="POST" class="form-group">
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
                    <label for="Classe">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="classe">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="tuteur">
                        <option value="selected">Sélectionnez un tuteur</option>
                        @foreach ($tuteurs as $tuteur)
                        <option value="{{ $tuteur->id }}">
                            {{ $tuteur->nom }} {{ $tuteur->prenom }}
                        </option>

                        @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="Classe">Image</label>
                    <input type="file" class="form-control" id="Image" name="image">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="ville">
                        <option value="selected">Sélectionnez une ville</option>
                        @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">
                            {{ $ville->nomVille }}
                        </option>

                        @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="nationalité">
                        <option value="selected">Sélectionnez une nationalité</option>
                        @foreach ($nationalités as $nationalité)
                        <option value="{{ $nationalité->id }}">
                            {{ $nationalité->nomNationalité }}
                        </option>

                        @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="groupe">
                        <option value="selected">Sélectionnez un groue sanguin</option>
                        @foreach ($groupes as $groupe)
                        <option value="{{ $groupe->id }}">
                            {{ $groupe->nom }}
                        </option>

                        @endforeach
                </select>
                </div>


<button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button><br><br>
<a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
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
