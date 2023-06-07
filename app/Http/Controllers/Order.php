<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Event;
use App\Models\Category;

class Order extends Controller
{
    public function index(Request $req){
        $event = Event::find($req->input('event'));
        $category = Category::where('event_id', $req->input('event'))
            ->where('id', $req->input('category'))
            ->get();
        return view('order', 
            ['event'=>$event, 
            'category'=>$category, 
            'quantity'=>$req->input('quantity')]);
    }
}
