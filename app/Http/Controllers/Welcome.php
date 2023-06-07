<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Event;

class Welcome extends Controller
{
    public function index(){

        return view('welcome', ['data'=>Event::take(4)->get()]);
    }
}
