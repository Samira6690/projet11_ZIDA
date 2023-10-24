<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\Post;

class PostController extends Controller
{
    public function list_post()
    {
    $posts = Post::all();
    $tags = Tag::all();

       return view('post.list', compact('posts', 'tags'));
    }
    public function ajout_post()
    {
        $tags = Tag::all();
        $posts = Post::all();

        return view('post.ajout', compact('tags', 'posts'));
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

        $tags = $request->tag_id;
        $post->tags()->attach($tags);
        return redirect('/ajout')->with('status', 'Le post a bien été ajouté avec succes');
    }
    public function updat_post($id){
        $posts = Post::find($id);
        $tags =Tag::all();

        // $etudiant = Etudiant::all();
        return view('post.updat', compact('posts', 'tags'));
    }
    public function updat_post_traitement(Request $request){
        $request->validate([
        ]);
        $post = Post::find($id);
        $tags = Tag::all();
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
