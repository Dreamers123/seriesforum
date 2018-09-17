<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
class AdminController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
        if(auth()->guard('admin')->attempt(request(['email','password']))){
            return back();
        }
        return redirect('/quotes');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('register');
    }

}
