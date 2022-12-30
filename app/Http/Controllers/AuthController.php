<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = $request->only('email','password');
        if(Auth::attempt($user)){
            $user = Auth::user();
            if($user->id_role=='1'){
                return redirect('/dashboardStafPages');
            }elseif($user->id_role=='2'){
                return redirect('/dashboardGuruPages');
            }elseif($user->id_role=='3'){
                return redirect('/ortuPagesKemajuan');
            }

            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect ('login');
    }
}
