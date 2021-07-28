<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginStudentController extends Controller
{
    public function index()
    {
        return view('auth.loginStudent');
    }
}
