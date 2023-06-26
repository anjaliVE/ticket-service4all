<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');
    }
}
