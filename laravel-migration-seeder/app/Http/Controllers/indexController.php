<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\train;

class indexController extends Controller
{
    public function index(){
        $train = train::all();
        return view('index', compact('train'));
    }
}
