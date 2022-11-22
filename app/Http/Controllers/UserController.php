<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Expedition;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $request -> validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if (Auth::attempt($request->only(['email', 'password']))){
            $user = Auth::user();
            if ($user->role=='admin')
                return redirect('admin');
            if ($user->role=='user')
                return redirect('profile');
        }
        return back()->withErrors([
            'email'=>'Email or password in correct',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'fio' => 'required',
            'telephone' => 'required|min:11',
            'date' => 'required',
            'email' => 'email|min:6|unique:App\Models\User,email',
            'password' => 'required',
            'checkbox' => 'required',
        ]);
        User::create(['password' => Hash::make($request->password)] + $request->all());
        return redirect()->route('login')->with('success','Пользователь успешно добавлен');
    }

    public function admin()
    {
        $expeditions = Expedition::all();
        return view('admin', ['expeditions'=>$expeditions]);
    }

    public function profile(){
        $expedition = Status::with('expedition')->where('user_id', Auth::id())->get();
        $recording = User::with('recording')->where('id', Auth::id())->first()->recording;
        return view('profile', ['expedition'=>$expedition, 'recording'=>$recording]);
    }

    public function user_update($id, Request $request)
    {
        $request->validate([
            'fio' => 'required|',
            'telephone' => 'required|min:11',
            'date' => 'required',
            'email' => 'required',
        ]);

        User::where('id', $id)
            ->update([
                'fio' => $request->fio,
                'telephone' => $request->telephone,
                'date' => $request->date,
                'email' => $request->email,
            ]);
        return redirect()->route('profile')->with('success','Успешно редактировано');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
