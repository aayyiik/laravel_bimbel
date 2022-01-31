<?php

namespace App\Http\Controllers;

use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }

    public function postlogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'passowrd'=>'required',
        ]);

        $user = $request->only('email','password');
        if(Auth::attempt($user)){
            $user = Auth::user();
            if($user->id_role=='1'){
                return redirect('/dashboard');
            }elseif($user->id_role=='2'){
                return redirect('/dashboard');
            }elseif($user->id_role=='3'){
                return redirect('/dashboard');
            }elseif($user->id_role=='4'){
                return redirect('/dashboard');
            }

            return redirect()->intended('/');
        }

        return redirect('/login')
        ->withInput()
        ->withErrors(['login_gagal' => 'Eror, salah input']);
    }
}
