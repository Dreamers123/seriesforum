<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
class AdminRegisterController extends Controller
{
    public function create()
    {
        return view('admin.register');
    }
    public function store(Request $request)
    {
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        $admin=Admin::create( [
            'email'=> request('email'),
            'password'=> request('password'),
        ]);

        auth()->login($admin);
        return redirect('quotes');
    }
}
