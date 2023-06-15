<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allApplications(){
        return view('users.my_applications');
    }
}
