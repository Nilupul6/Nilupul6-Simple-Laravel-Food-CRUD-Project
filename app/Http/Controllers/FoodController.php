<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\food;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function login(){
        return view('login',);
    }

    public function home(){
        $table = food::all();
        return view('home',['table'=>$table]);
    }

    public function logstore(Request $req){

        $req->validate([
            'name' => 'required|max:20',
            'password' => 'required|max:20'
        ]);

        $credential = $req->only('name','password');

        if(Auth::attempt($credential)){
            return redirect(route('food.home'));
        }
        else{
            return view('login')->with('failed','Login failed');
        }
    }

    public function register(){
        return view('register');
    }

    public function regstore(Request $req){
        $req->validate([
            'name' => 'required|max:20',
            'email' => 'required|email',
            'password' =>'required|max:20' 
        ]);  

        $check = User::create($req->all());

        if($check){
            return view('login')->with('registerd','registered');
        }
        else{
            return view('register')->with('failed','failed');
        }
    }

    public function include(Request $req){
        $req->validate([
            'name' => 'required|max:10',
            'type' => 'required|max:10',
            'qty' => 'numeric|max:4'
        ]);

        $check = food::create($req->all());

        if($check){
            return redirect(route('food.home'))->with('success','success');
        }
        else{
            return redirect(route('food.home'))->with('fail','failed');
        }



    }
}
