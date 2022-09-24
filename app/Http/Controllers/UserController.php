<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //login
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        // return $user->password;
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "username or password incorrect";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->role = "user";
        $user->password = Hash::make($req->password);
        $user->save();


        return redirect('/login');
    }
    function addUser(Request $req){
        $user = new User;
        $user->name = $req->fullname;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->password = Hash::make($req->password);
        $user->save();


        return redirect('/');
    }
}
