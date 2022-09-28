<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        return view('hospital');
    }



    public function showLogin(){
        return view('login');
    }

    public function showsignup(){
        return view('signup');
    }
    public function showappointment(){
        return view('appointment');
    }
    public function showdoctors(){
        return view('doctors');
    }
    public function showdepartments(){
        return view('departments');
    }
     public function showradiologyupload(){
         return view('radiologyupload');
     }
    public function showThankAppointment(){
        return view('ThankAppointment');
    }
    public function showThankSignup(){
        return view('ThankSignup');
    }









    public function signup(Request $request){
        // return dd($request->all());

        // validation
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:9'
        ]);

        // store data in database
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $passwordEnc = Hash::make($password);
        DB::insert('insert into users(name, email, password) values(?, ?, ?)', [$name, $email, $passwordEnc]);

        // mark user as logged in
        $userId = DB::getPdo()->lastInsertId();
        $result = DB::select('select id, name, email from users where id = ?', [$userId]);
        $user = null;
        if($result){
            $user = $result[0];
        }
        if($user == null){
            return back()->with(['error' => 'Unexpected error happened during registration'])->withInput();
        }
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $userId,
            'user' => $user
        ]);


        return redirect('/ThankSignup');
    }

    public function login(Request $request){

        // validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // search for user by email
        $email = $request->email;
        $password = $request->password;
        $result = DB::select('select * from users where email = ?', [$email]);
        if(!$result){
            return back()->with(['error' => 'This email is not found'])->withInput();
        }
        $user = $result[0];

        // check password
        if(!Hash::check($password, $user->password)){
            return back()->with(['error' => 'Incorrect password'])->withInput();
        }

        // mark user as logged in
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $user->id,
            'user' => $user
        ]);


        return redirect('/ThankSignup');
    }

    public function logout(){
        session()->invalidate();
        return redirect('/');
    }
    public function appointment(Request $request)
    { $request->validate([
        'date'=>'required|date|after:tomorrow',
    ]);


        //return dd($request->all());
        $service=$request->service;
        $gender=$request->gender;
        $date=$request->date;
        $time=$request->time;
        $payment=$request->payment;
        $cardNumber=$request->cardNumber;
        $cardNumberEnc = Hash::make($cardNumber);

        DB::insert('insert into Appointment(service ,gender,date,time,payment,cardNumber ) values(?,?,?,?,?,?)', [$service,$gender,$date,$time,$payment,$cardNumberEnc]);

        // mark user as logged in
        $userId = DB::getPdo()->lastInsertId();
        $result = DB::select('select service ,gender,date,time,payment from Appointment where id = ?', [$userId]);

        $user = null;
        if($result){
            $user = $result[0];
        }
        if($user == null){
            return back()->with(['error' => 'Unexpected error happened during registration'])->withInput();
        }
        session()->regenerate();
        session([
            'loggedIn' => true,
            'userId' => $userId,
            'user1' => $user
        ]);



        // go to Appointment
        return redirect('/ThankAppointment');


    }
}
