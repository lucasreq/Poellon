<?php

namespace App\Http\Controllers;

use App\User;
use App\Recipe;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $users = User::all();
        $recipes = Recipe::all();
        return view('admin')
        ->with('users',$users)
        ->with('recipes',$recipes);


        //return view('admin')->with('recipes'->$recipes);
    }

    public function adminDeleteUser($id)
    {

        $users = User::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'User as been deleted');

    }
}
