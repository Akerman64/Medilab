<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Rendezvous;
use Dotenv\Store\File\Paths;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.addpatient');
    }

    public function uploadpatient(Request $request){

        $patient = new Patient;

        $patient->nom = $request->nom;
        $patient->prenom = $request->prenom;
        $patient->email = $request->email;
        $patient->genre = $request->genre;
        $patient->age = $request->age;
        $patient->ville = $request->ville;
        $patient->maladie = $request->maladie;
        $patient->traitement = $request->traitement;
        $patient->commentaire = $request->commentaire;

        $patient->save();

        return redirect()->back()->with('message','Données enregistrées');
    }

    public function showpatient(){

        $patient = Patient::all();

        return view('admin.showpatient', compact('patient'));
    }

    public function deletepatient($id){
        $patient = Patient::find($id);

        $patient->delete();

        return redirect()->back()->with('message','Supprimé avec succés');
    }

    public function updatepatient($id){

            $patient = Patient::find($id);

            return view('admin.updatepatient',compact('patient'));

    }

    public function uploadpatients(Request $request, $id){

        $patient = Patient::find($id);

        $patient->nom = $request->nom;
        $patient->prenom = $request->prenom;
        $patient->email = $request->email;
        $patient->genre = $request->genre;
        $patient->age = $request->age;
        $patient->ville = $request->ville;
        $patient->maladie = $request->maladie;
        $patient->traitement = $request->traitement;
        $patient->commentaire = $request->commentaire;

        $patient->save();

        return redirect()->back()->with('message','Données mises à jour');
    }

    
}
