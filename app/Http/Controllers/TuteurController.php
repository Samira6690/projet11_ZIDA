<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tuteur;
use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\Nationalité;
use App\Models\Groupe;

class TuteurController extends Controller
{
    public function liste_tuteur()
    {
    $tuteurs = Tuteur::all();
       return view('tuteur.liste', compact('tuteurs'));
    }
    public function ajouter1_tuteur()
    {
        return view('tuteur.ajouter1');
    }
    public function ajouter1_tuteur_traitement1(Request $request)

    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'profession' =>'required',
            'contact' =>'required',
        ]);
        $tuteur = new Tuteur();
        $tuteur ->nom = $request->nom;
        $tuteur ->prenom = $request->prenom;
        $tuteur ->profession = $request->profession;
        $tuteur ->contact = $request->contact;
        $tuteur->save();
        return redirect('/ajouter1')->with('status', 'Le tuteur a bien été ajouté avec succes');
    }
    public function update1_tuteur($id){
        $tuteur = Tuteur::find($id);
        $etudiant = Etudiant::all();

        return view('tuteur.update1', compact('tuteur','etudiant'));
    }
    public function update1_tuteur_traitement1(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'profession' =>'required',
            'contact' =>'required',
        ]);
        $tuteur =  Tuteur::find($request->id);
        $tuteur ->nom = $request->nom;
        $tuteur ->prenom = $request->prenom;
        $tuteur ->profession = $request->profession;
        $tuteur ->contact = $request->contact;
        $tuteur->update();

        return redirect('/tuteur')->with('status', 'Le tuteur a bien été modifier avec succes');

}
public function delete_tuteur($id){
    $tuteur = Tuteur::find($id);
    $tuteur->delete();
    return redirect('/tuteur')->with('status', 'Le tuteur a bien été supprimer avec susses');

}
// public function index()
// {;
//     $etudiant = Etudiant::all();
//     return view ('')
// }
}
