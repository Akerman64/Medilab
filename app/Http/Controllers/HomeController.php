<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Patient;
use App\Models\Rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $email = Auth::user()->email;

        if($email == 'admin@gmail.com' ){
            return view('admin.admin');
        }
        else{
            return view('home');
        }

    }


    public function rendezvous(Request $request){


        if(Auth::id()){
            $rdv = new Rendezvous;

            $rdv->name = $request->name;
            $rdv->email = $request->email;
            $rdv->phone = $request->phone;
            $rdv->date = $request->date;
            $rdv->department = $request->department;
            $rdv->doctor = $request->doctor;
            $rdv->message = $request->message;

            $rdv->save();

            return redirect()->back()->with('message', 'Bien reçu');
        } else {
            return redirect('login');
        }

    }

    public function contact(Request $request){

        if(Auth::id()){
            $contact = new Contact;

            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->sujet = $request->sujet;
            $contact->message = $request->message;

            $contact->save();

            return redirect()->back()->with('message', 'Bien reçu');
        } else {
            return redirect('login');
        }
    }



}
