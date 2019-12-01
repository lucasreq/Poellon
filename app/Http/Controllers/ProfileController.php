<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use PhpOption\None;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = DB::table('profiles')->get()->toArray();
        return view('profile.show', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("profile.create");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->pseudo = $request->pseudo;
        $profile->genre = $request->genre;
        $profile->description = $request->description;
        $profile->id;

        $profile->save();

        return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('profile.show', array('user' => Auth::user()) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $path = '/uploads/avatars/';
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path($path . $filename));
            $request->user()->avatar = $filename;
            $request->user()->save();
        };

        return redirect()->route('profile.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        // Logic for user upload of avatar

        $user = Auth::user();
    //
        $user->pseudo = $request->pseudo;
    //
        $user->genre = $request->genre;
    //
        $user->description = $request->description;

        $user->save();

        return view('profile.show', ['user' => Auth::user()] );

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }


}
