<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showFormLogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required|string',
            'password' => 'required|string'
        ];
        $messages = [
            'email.required' => 'Email Wajib diisi',
            'email.string' => 'Email invalid, harus berupa string',
            'password.required' => 'Password Wajib diisi',
            'password.string' => 'Password invalid, harus berupa string ',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        Auth::attempt($data);

        if(Auth::check()){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('error', 'Login gagal! User tidak ditemukan.');;
        }
    }

    public function showFormRegister(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required|max:35',
            'email' => 'required|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ];
        $messages = [
            'name.required' => 'Nama Wajib diisi',
            'name.min' => 'Nama maksimal 35 karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.confirmed' => 'Password tidak sama dengan konfirmasi password',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User();
        $user->name = ucwords($request->name);
        $user->username = strtolower($request->username);
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if($save){
            Session::flash('success', 'Register berhasil!');
            return redirect()->route('login');
        }else{
            Session::flash('error', ['' => 'Register gagal!']);
            return redirect()->route('register');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
