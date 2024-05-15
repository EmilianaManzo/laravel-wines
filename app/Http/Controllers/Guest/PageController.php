<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class PageController extends Controller
{
    public function index(){

        $wines = Wine::all();


        return view('wines', compact('wines'));
    }


}
