<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test()
    {
        $data=[];
        $data[2] = ['Name', 'Email'];
        $data[1] = [
            ['Dhriti', 'dhriti@amrit.com'],
            ['Moses', 'moses@gutierez.com']
        ];
         return $data;

    }
    public function users()
    {
        $user=User::all();
        return $user;
    }
}
