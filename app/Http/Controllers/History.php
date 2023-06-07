<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class History extends Controller
{
    public function index(){
        return view('history.index');
    }

    public function detail(){
        return view('history.detail');
    }
}
