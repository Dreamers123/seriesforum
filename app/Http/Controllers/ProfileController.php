<?php

namespace App\Http\Controllers;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profiles.index');
    }


    public function create()
    {
        echo url()->current();
        return view('profiles.create');
    }


    public function store(Request $request)
    {
        Profile::create($request->all());
        return redirect('/profile/');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $profiles=Profile::findOrFail($id);

        return view('profiles.edit', compact('profiles'));
    }


    public function update(Request $request, $id)
    {

        $profiles=Profile::findOrFail($id);

        $profiles->update($request->all());
        return redirect('/user/profile');

    }


    public function destroy($id)
    {

    }
    public function showProfile()
    {
        return view('profiles.showprofile');
    }
}
