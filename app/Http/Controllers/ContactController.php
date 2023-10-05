<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function postcontact(Request $request){
        // $nom=$request->nom;
        // $prenom=$request->prenom;
        // $email=$request->email;
        // $tel=$request->tel;
        $inputs=$request->all();
        return view("ex/contact",compact("inputs"));
    }
    public function contact(){
        return view("ex/contact");
    }
    
}
