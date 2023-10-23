<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;
class TagController extends Controller
{
    public function list1_tag()
    {
    $tags = Tag::all();
       return view('tag.list', compact('tags'));
    }
    public function ajout1_tag()
    {
        return view('tag.ajout1');
    }
    public function ajout1_tag_traitement(Request $request)

    {
        $request->validate([
            'nom' => 'required',

        ]);
        $tag= new Tag();
        $tag ->nom = $request->nom;
        $tag->save();
        return redirect('/ajout1')->with('status', 'Le tag a bien été ajouté avec succes');
    }
    public function updat1_tag($id){
        $tag = Tag::find($id);
        // $etudiant = Etudiant::all();

        return view('tag.updat1', compact('tag'));
    }
    public function updat1_tag_traitement(Request $request){
        $request->validate([
        ]);
        $tag =  Tag::find($request->id);
        $tag ->nom = $request->nom;
        $tag->update();

        return redirect('/tag')->with('status', 'Le tag a bien été modifier avec succes');

}
public function delete_tag($id){
    $tag = Tag::find($id);
    $tag->delete();
    return redirect('/tag')->with('status', 'Le tag a bien été supprimer avec susses');

}
// public function index()
// {;
//     $etudiant = Etudiant::all();
//     return view ('')
// }
}
