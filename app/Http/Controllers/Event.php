<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Event as Model;
use App\Models\Category;

class Event extends Controller
{

    public function index(Request $req){
        $key = $req->query("key");
        $data = Model::where('title', 'LIKE','%'.$key.'%')->get();

        return view('event.index', ['data'=>$data, 'key'=>$key]);
    }

    public function description($id){
        $data = Model::find($id);
        $images = explode('|', $data->images);
        $desc = explode('|', $data->description);
        $other = Model::take(4)->get();

        return view("event.description", 
            ["data"=>$data, 
            "images"=>$images, 
            "desc"=>$desc,
            "other"=>$other]);
    }
    
    public function category($id){
        $data = Model::find($id);
        $images = explode('|', $data->images);
        $desc = explode('|', $data->description);
        $other = Model::take(4)->get();
        $category = Category::where('event_id', $id)->get();

        return view("event.category", 
            ["data"=>$data, 
            "images"=>$images, 
            "desc"=>$desc,
            "other"=>$other,
            "category"=>$category]);
    }
}
