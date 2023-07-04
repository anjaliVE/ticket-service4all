<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
         $this->middleware(['auth','verified']);
    }

    public function index()
    {
        return view('home');
    }

    public function UserInfo(){
        $user_id = Auth::id();
        $users = User::where('id', $user_id)->firstOrFail();
       
        return view('user.userinfo', compact('users'));
    }

    public function EditUserInfo(){
        $user_id = Auth::id();
        $users = User::where('id', $user_id)->firstOrFail();
       
        return view('user.editinfo', compact('users'));
    }

    public function UpdateUserInfo(Request $request ){
        $user =Auth::user();
        if($user->email == $request->email){
            $request->validate([
                'name' =>'required|min:4|string|max:255'
            ]);
        }else{
            $request->validate([
                'name' =>'required|min:4|string|max:255',
                'email'=>'required|email|string|max:255|unique:users'
            ]);
        }

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();

        return back()->with('message','Profile Updated');
    }
}
