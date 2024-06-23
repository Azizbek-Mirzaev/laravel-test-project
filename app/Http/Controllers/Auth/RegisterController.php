<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function ShowRegistreForm()
    {
        return view("auth.register");
       //dump('Login page'); // return view("admin.index");
    }

    public function register(Request $request)
    {
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = bcrypt($request->password);
        $user ->save();
        return redirect()->route("showLoginForm");
        //dd($user, md5('password'), bcrypt('password'));
        //return view("auth.register");
        //dump($request->password); // return view("admin.index");
    }
}
