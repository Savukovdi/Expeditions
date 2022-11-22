<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;

class LeaderController extends Controller
{
    public function leader(){
        $leaders = Leader::all();
        return view('leader', ['leaders'=>$leaders]);
    }

    public function leader_create(Request $request){
        $request->validate([
            'fio' => 'required',
            'telephone' => 'required|min:11',
            'email' => 'email|min:6|unique:App\Models\Leader,email',
        ]);
        Leader::create([
            'fio' => $request->fio,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'Успешно добавлен ведущий');
    }

    public function leader_delete($id)
    {
        Leader::find($id)->delete();
        return redirect()->back()->with('success','Ведуший успешно удален');
    }
}
