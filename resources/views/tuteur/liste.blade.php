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
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>PROJET 10</h1>
                <hr>
                <a href="/ajouter1" class="btn btn-primary">Ajouter un tuteur</a>
                <a href="/etudiant" class="btn btn-primary">Revenir à la liste des étudiants</a>
                <a href="post/" class="btn btn-primary">POST</a>
                <a href="tag/" class="btn btn-primary">TAG</a>
                <hr>
                @if (session('status'))
                <div class="alert alert-succes">
                    {{session('status')}}
                </div>
                @endif
                <table class="table">
<thead>
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Profession</th>
        <th>Contact</th>
        <th>Etudiant</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @php
        $ide = 1;
    @endphp
    @foreach ($tuteurs as $tuteur)
    <tr>
        <td>{{$ide }}</td>
        <td>{{ $tuteur->nom }}</td>
        <td>{{ $tuteur->prenom }}</td>
        <td>{{ $tuteur->profession }}</td>
        <td>{{ $tuteur->contact }}</td>
        <td>
            @foreach ($tuteur->etudiant as $etudiant )
       {{ $etudiant->nom }}        {{ $etudiant->prenom }} <br>

            @endforeach
        </td>
        <td>
            <a href="/update1-tuteur/{{ $tuteur->id }}" class="btn btn-info">Update</a>
            <a href="/delete-tuteur/{{ $tuteur->id }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @php
        $ide += 1;
    @endphp
    @endforeach

</tbody>
                </table>
                {{--  {{$etudiants->links() }}  --}}
            </div>
          </div>
    </div>



    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
