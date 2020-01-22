<?php

namespace App\Http\Controllers;

use App\User;
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
        return view('admin')->with('users',$users);
    }

    public function adminDeleteUser(Request $request, $id)
    {

        $users = User::destroy($id);
        return view('admin')->with('success', 'User as been deleted');

    }
}
