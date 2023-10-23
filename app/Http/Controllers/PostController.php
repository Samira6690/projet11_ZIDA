<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class PostController extends Controller
{
    public function list_post()
    {
    $posts = Post::all();
       return view('post.list', compact('posts'));
    }
    public function ajout_post()
    {
        return view('post.ajout');
    }
    public function ajout_post_traitement(Request $request)

    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',

        ]);
        $post = new Post();
        $post ->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->save();
        return redirect('/ajout')->with('status', 'Le post a bien été ajouté avec succes');
    }
    public function updat_post($id){
        $post = Post::find($id);
        // $etudiant = Etudiant::all();

        return view('post.updat', compact('post'));
    }
    public function updat_post_traitement(Request $request){
        $request->validate([

        ]);
        $post =  Post::find($request->id);
        $post ->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->update();

        return redirect('/post')->with('status', 'Le post a bien été modifier avec succes');

}
public function delete_post($id){
    $post = Post::find($id);
    $post->delete();
    return redirect('/post')->with('status', 'Le post a bien été supprimer avec susses');

}
// public function index()
// {;
//     $etudiant = Etudiant::all();
//     return view ('')
// }
}
