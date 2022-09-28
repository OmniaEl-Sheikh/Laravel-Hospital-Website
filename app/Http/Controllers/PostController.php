<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showThankSignup(){
        return view('ThankSignup');
    }
    public function showThankAppointment(){
        return view('ThankAppointment');
    }
    
}
