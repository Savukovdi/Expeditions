<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recording;
use Illuminate\Support\Facades\Auth;

class RecordingController extends Controller
{
    public function recording(){
        $expedition = Recording::with('expedition')->get();
        return view('recording', ['expedition'=>$expedition]);
    }

    public function info($id){
        $recording = Recording::find($id);
        return view('info', ['recording'=>$recording]);
    }

    public function recording_delete($id)
    {
        Recording::find($id)->delete();
        return redirect()->back()->with('success','Заявка удалена');
    }
}
