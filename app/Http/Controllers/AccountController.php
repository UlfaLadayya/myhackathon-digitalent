<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signupuser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class AccountController extends Controller
{
    function homepageuser(){
        $data = array();
        if (Session::has('loginId')) {
            $data = Signupuser::where('username', '=', Session::get('loginId'))->first();
        }
        return view('homepageuser', compact('data'),[
            "title" => "Home"
        ]);
    }

    function loginpageuser(){
        return view('loginpageuser', [
            "title" => "Login Page User"
        ]);
    }

    function signuppageuser(){
        return view('signuppageuser', [
            "title" => "Sign Up Page User"
        ]);
    }

    function Save(Request $request)
    {
        //validate requests
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        //insert data to database
        $signupuser = new Signupuser;
        $signupuser->username = $request->username;
        $signupuser->password = Hash::make($request->password);
        $Save =  $signupuser->Save();

        if($Save){
            return back()->with('success','New user has been successfuly added');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    function Check(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:6|max:12'
        ]);

        $credentials =[
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/homepageuser');
        }

        return back()->with('fail', 'Username atau password salah.');
       
    }

    public function logoutuser(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginpageuser');
    }

    // public function logoutuser(){
    //     if (Session::has('loginId')) {
    //         Session::pull('loginId');
    //         return redirect('/loginpageuser');
    //     }
    // }
}

    // function Check(Request $request){
    //     $request->validate([
    //         'username'=>'required',
    //         'password'=>'required|min:6|max:12'
    //     ]);

    //     $user = Signupuser::where('username', '=', $request->username)->first();
    //     if($user){
    //         if(Hash::check($request->password, $user->password)) {
    //             $request->session()->put('loginId', $user->id);
    //             return redirect('/homepageuser');
    //         }else{
    //             return back()->with('fail', 'Password not match.');
    //         }
    //     }else{
    //         return back()->with('fail', 'This full name is not registered');
    //     }
    // }