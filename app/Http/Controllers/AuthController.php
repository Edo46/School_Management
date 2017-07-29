<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }
    public function auth(LoginRequest $request) {
        $username = $request->get('username');
        $password = $request->get('password');
        if ($this->auth->attempt(['username' => $username, 'password' => $password])) {
            return response()->json(['success' => true, 'msg' => 'Login Sukses!', 'user' => $this->auth->user()]);
        }
        return response()->json(['success' => false, 'msg' => 'Username atau Password Anda Salah!']);
    }
    public function logout(){
        $this->auth->logout();
        return redirect()->to('login');
    }

}
