<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authentication extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|unique:users,email|min:4',
            'password' => 'required|min:8|max:8',
        ]);

        try {
            DB::table('users') -> insert([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect() -> Route('login') -> with('success', 'Sign up successfully keep login..');

        }
        catch (\Exception $ex) {
            return redirect() -> Route('register') -> with('warning', 'Sign up is not successful');
        }
        
    }

    public function dashboard(Request $request)
    {
        //$user = Auth() -> user();
        $customer = DB::select("SELECT  * FROM `customer` ");
        $count = count($customer);
        session(['count'=>$count]);
        $callDetails = DB::select("SELECT * from `callDetails` ");
        $call = count($callDetails);
        session(['call'=>$call]);
        return view('dashboard' ,compact('count', 'call'));
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $this -> validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required|max:8',
        ]);

        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $user = auth() -> user();
            $name = $user -> name;
            session(['name' =>  $name]);
            $email = $user -> email;
            session(['email' =>  $email]);
            //dd(session('name'));

            //return redirect() -> Route('dashboard');
            return redirect() -> intended('dashboard');
        }
        else
        {
            return redirect() -> Route('login') -> with('warning', 'login failed');
        }
    }

    public function logout(Request $request)
    {
        $request -> session() -> flush();
        Auth::logout();
        //session() -> forget('name');

        //$user = auth() -> user();
        //dd($user);
        return redirect() -> Route('login') -> with('success', 'You are logout');
    }

}
