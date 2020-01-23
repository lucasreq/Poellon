<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Recipe;

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
        return view('home');

    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $recipe=DB::table('recipes')->where('name','LIKE','%'.$request->search."%")->get();
            if($recipe)
            {
                foreach ($recipe as $key => $recipes) {
                    $output.='<tr>'.
                    '<td>'.$recipes->id.'</td>'.
                    '<td>'.$recipes->name.'</td>'.
                    '<td>'.$recipes->description.'</td>'.
                    '</tr>';
        }
    }
