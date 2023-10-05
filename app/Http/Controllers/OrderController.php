<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($date,$num){
       // return view("show",["date"=>$date,"num"=>$num]);
       // return view("show")->with(["date"=>$date,"num"=>$num]);
        return view("show",compact("date","num"));
    }

    public function form(){
        return view("form");
    }

    public function post(Request $request){
        //dd($request->all());
        $date=$request->date;
        $num=$request->num;
        return view("show",compact("date","num"));
    }
}

