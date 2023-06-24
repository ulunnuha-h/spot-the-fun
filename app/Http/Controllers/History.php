<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\History as Model;
use App\Models\Event;

class History extends Controller
{
    public function index(Request $req){
        $data = Model::where('user_id', Auth::user()->id)
                ->join('categories','histories.category_id','=','categories.id')
                ->join('events','histories.event_id','=','events.id')
                ->get(['histories.id',
                    'histories.quantity', 
                    'histories.created_at', 
                    'categories.category', 
                    'categories.price', 
                    'events.title']);

        return view('history.index', ['data'=>$data]);
    }

    public function create(Request $req){
        $data = Model::create([
            'user_id'=>Auth::user()->id,
            'event_id'=>$req->input('event_id'),
            'category_id'=>$req->input('category_id'),
            'name'=>$req->input('name'),
            'birth'=>$req->input('birth'),
            'gender'=>$req->input('gender'),
            'phone'=>$req->input('phone'),
            'quantity'=>$req->input('quantity')
        ]);

        return redirect()->route('history.detail', ['id' => $data->id]);
    }

    public function detail($id){
        $data = Model::where('user_id', Auth::user()->id)
                ->where('id', $id)
                ->get();
        $event = Event::find($data[0]->event_id);
        return view('history.detail', 
            ['data'=>$data[0], 
            'event'=>$event,
            'images'=>explode('|', $event->images)]);
    }
}
