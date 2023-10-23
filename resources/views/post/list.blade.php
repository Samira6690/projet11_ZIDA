<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 11</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>PROJET 11</h1>
                <hr>
                 <a href="post/" class="btn btn-primary">POST</a>
                 <a href="tag/" class="btn btn-primary">TAG</a>
                 <a href="ajout/" class="btn btn-primary">Ajouter un post</a>
                 <a href="post/" class="btn btn-primary">Revenir à la liste des posts</a>


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
        <th>Titre</th>
        <th>Contenu</th>
    </tr>
</thead>
<tbody>
    @php
        $ide = 1;
    @endphp
    @foreach ($posts as $post)
    <tr>
        <td>{{$ide }}</td>
        <td>{{ $post->titre }}</td>
        <td>{{ $post->contenu }}</td>
        <td>
            <a href="/updat-post/{{ $post->id }}" class="btn btn-info">Update</a>
            <a href="/delete-post/{{ $post->id }}" class="btn btn-danger">Delete</a>
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
