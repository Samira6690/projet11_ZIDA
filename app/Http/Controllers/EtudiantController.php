<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Tuteur;
use App\Models\Ville;
use App\Models\Nationalité;
use App\Models\Groupe;



class EtudiantController extends Controller
{

    public function liste_etudiant()
    {
    $etudiants = Etudiant::paginate(4);
       return view('etudiant.liste', compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        $tuteurs = Tuteur::all();
        $villes = Ville::all();
        $nationalités = Nationalité::all();
        $groupes = Groupe::all();
        return view('etudiant.ajouter', compact('tuteurs', 'villes','nationalités', 'groupes'));
    }

    public function ajouter_etudiant_traitement(Request $request)

    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'tuteur' => 'required',
            'image'  => 'required',
            'ville' => 'required',
            'nationalité' => 'required',
            'groupe' => 'required',

        ]);
        $etudiant = new Etudiant();
        $etudiant ->nom = $request->nom;
        $etudiant ->prenom = $request->prenom;
        $etudiant ->classe = $request->classe;
        $etudiant ->tuteur_id= $request->tuteur;
        $etudiant ->photo= $request->image;
        $etudiant ->ville_id= $request->ville;
        $etudiant ->nationalité_id= $request->nationalité;
        $etudiant ->groupe_id= $request->groupe;

        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec susses');
    }
    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        $tuteurs = Tuteur::all();
        $villes = Ville::all();
        $nationalités = Nationalité::all();
        $groupes = Groupe::all();

        return view('etudiant.update', compact('etudiants', 'tuteurs', 'villes','nationalités', 'groupes'));
    }
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'tuteur' => 'required',
             'image'  => 'required',
             'ville' => 'required',
             'nationalité' => 'required',
             'groupe' => 'required',

        ]);
        $etudiant =  Etudiant::find($request->id);
        $etudiant ->nom = $request->nom;
        $etudiant ->prenom = $request->prenom;
        $etudiant ->classe = $request->classe;
         $etudiant ->tuteur_id= $request->tuteur;
         $etudiant ->photo= $request->image;
         $etudiant ->ville_id= $request->ville;
         $etudiant ->nationalité_id= $request->nationalité;
         $etudiant ->groupe_id= $request->groupe;
        $etudiant->update();
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifier avec susses');

}

public function delete_etudiant($id){
    $etudiant = Etudiant::find($id);
    $villes = Ville::all();
    $nationalités = Nationalité::all();
    $groupes = Groupe::all();
    $etudiant->delete();
    return redirect('/etudiant')->with('status', 'L\'étudiant a bien été supprimer avec susses');

}

    public function ajouter1_tuteur()
    {
        return view('tuteur.ajouter1');
    }
    public function ajouter1_etudiant_traitement(Request $request)

    {
// public function index()
// {
//     $etudiant = Etudiant::all();
//     return view ('')
// }
}
}
