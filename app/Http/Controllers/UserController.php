<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $user = new User();
        $user->name = 'Infas';
        $user->email = 'infas@gmail.com';
        $user->phone = '(123) 456-7899';
        $user->age = '30';
        $user->save();

        return $user;
    }
}
