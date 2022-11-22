<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Recording;
use App\Models\Expedition;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function status(){
        $expedition = Status::with('expedition')->get();
        return view('status', ['expedition'=>$expedition]);
    }

    public function update_status_confirm(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $nomer = strtotime($date);
        $recording = Recording::create([
            'user_id' => $request->user_id,
            'exp_id' => $request->exp_id,
            'status_id' => $request ->status_id,
            'passport' => $request->passport,
            'date' => $request->date,
            'nomer'=>$nomer,
        ]);
        $id = $request -> id;
        Status::find($id)->delete();
        return redirect()->back()->with('success','Заявка подтверждена');
    }

    public function update_status_reject($id, Request $request)
    {
        Status::where('id', $id)
            ->update([
                'event' => $request->event,
            ]);
        return redirect()->back()->with('success','Заявка отклонена');
    }

    public function status_delete($id)
    {
        Status::find($id)->delete();
        return redirect()->route('profile')->with('success','Удалена заявка');
    }
}
