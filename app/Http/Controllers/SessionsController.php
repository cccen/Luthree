<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
            'only'=>['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials=$this->validate($request,[
            'password'=>'required',
            'email'=>'required|email',
        ]);
        if(Auth::attempt($credentials,$request->has('remember'))){
            session()->flash('success','欢迎回来');
            return redirect()->intended(route('users.show',[Auth::user()]));
        }else{
            session()->flash('danger','登录失败，请重试');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','下次再见');
        return redirect('login');
    }
}
