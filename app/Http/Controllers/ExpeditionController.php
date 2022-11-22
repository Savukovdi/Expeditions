<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expedition;
use App\Models\Status;
use App\Models\Leader;

class ExpeditionController extends Controller
{
    public function expedition(){
        $expeditions = Expedition::all();
        return view('expedition', ['expeditions'=>$expeditions]);
    }

    public function expedition_filtr(Request $request){
        if($request->filtr == 0){
            $expeditions = Expedition::all();
        }
        else
        $expeditions = Expedition::where('complexity', $request->filtr)->get();
        return view('expedition', ['expeditions'=>$expeditions]);
    }
    
    public function expedition_create_form(){
        $leaders = Leader::all();
        return view('expedition_create', ['leaders'=>$leaders]);
    }

    public function expedition_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:15',
            'quantity' => 'required',
            'price' => 'required',
            'date' => 'required',
            'duration' => 'required',
            'img' => 'required|file|mimes:jpg,jpeg,png',
            'complexity'=> 'required',
            'location'=>'required',
            'leader_id'=>'required',
        ]);

        $path = $request->img->store('/img', 'public');

        Expedition::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request ->quantity,
            'price' => $request->price,
            'date' => $request->date,
            'duration' => $request->duration,
            'img' => $path,
            'complexity' => $request->complexity,
            'location'=>$request->location,
            'leader_id'=>$request->leader_id,
        ]);
        return redirect()->route('admin')->with('success','Экспедиция успешно добавлен');
    }

    public function expedition_update_form($id)
    {
        $expedition = Expedition::find($id);
        $leaders = Leader::all();
        return view('expedition_update', ['expedition'=>$expedition, 'leaders'=>$leaders]);
    }

    public function expedition_update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:15',
            'quantity' => 'required',
            'price' => 'required',
            'date' => 'required',
            'duration' => 'required',
            'complexity'=> 'required',
            'location'=>'required',
            'leader_id'=>'required',
        ]);

        Expedition::where('id', $id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'quantity' => $request ->quantity,
                'price' => $request->price,
                'date' => $request->date,
                'duration' => $request->duration,
                'complexity' => $request->complexity,
                'location'=>$request->location,
                'leader_id'=>$request->leader_id,
            ]);
        return redirect()->route('admin')->with('success','Экспедиция успешно обновлена');
    }

    public function expedition_page_form($id)
    {
        $expedition = Expedition::find($id);
        return view('expedition_page', ['expedition'=>$expedition]);
    }

    public function expedition_book_form($id)
    {
        $expedition = Expedition::find($id);
        return view('expedition_book', ['expedition'=>$expedition]);
    }

    public function expedition_book(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'passport' => 'required|min:10',
            'checkbox'=> 'required',
        ]);
        Status::create([
            'user_id' => $request->user_id,
            'exp_id' => $request->exp_id,
            'telephone' => $request ->telephone,
            'email' => $request->email,
            'adults' => $request->adults,
            'children' => $request->children,
            'date' => $request->date,
            'passport' => $request->passport,
            'description' => $request->description,
        ]);
        return redirect()->route('profile')->with('success','Заявка успешно отправлена');
    }

    public function expedition_delete($id)
    {
        Expedition::find($id)->delete();
        return redirect()->route('admin')->with('success','Экспедиция успешно удалена');
    }
}
