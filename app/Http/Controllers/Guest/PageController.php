<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wines;

class PageController extends Controller
{
    public function index(){

        $wines = Wines::all();

        return view('wines', compact('wines'));
    }


}
