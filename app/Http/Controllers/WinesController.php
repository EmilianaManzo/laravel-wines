<?php

namespace App\Http\Controllers;

use App\Http\Requests\WineRequest;
use Illuminate\Http\Request;
use App\Models\Wine;

class WinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::paginate(20);
        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Crea nuovo Vino';
        $route = route('wines.store');
        $method= 'POST';
        $button= 'Crea';
        $wines = null;
        return view('wines.create-edit', compact('title', 'route','method', 'button', 'wines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WineRequest $request)
    {
        dd($request);
        $form_data = $request->all();

        $new_wine = new Wine();
        $new_wine->fill($form_data);
        $new_wine->save();




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
