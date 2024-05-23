<?php

namespace App\Http\Controllers;

use App\Functions\Helper;
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
        $title = 'Crea un nuovo vino';
        $route =  route('wines.store');
        $method = 'POST';
        $wine = null;
        $button = 'Crea';
        return view('wines.create-edit', compact('route', 'method', 'wine','title', 'button'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WineRequest $request)
    {
        $form_data = $request->all();

        $new_wine = new Wine();
        $form_data['slug'] = Helper::createSlug($form_data['wine'], new Wine()) ;

        $new_wine->fill($form_data);
        // dd($new_wine);
        $new_wine->save();

        return redirect()->route('wines.show',$new_wine);

    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        return view('wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wine $wine)
    {
        $title = 'Aggiorna vino';
        $route =  route('wines.update', $wine);
        $method = 'PUT';
        $button = 'Aggiorna';
        return view('wines.create-edit', compact('route', 'method', 'wine','title', 'button'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WineRequest $request, Wine $wine)
    {
        $form_data = $request->all();

        if ($form_data['wine'] === $wine->wine) {
            $form_data['slug'] = $wine->slug;
        } else {
            $form_data['slug'] = Helper::createSlug($form_data['wine'], Wine::class);
        }

        $wine->update($form_data);

        return redirect()->route('wines.show', $wine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();

        return redirect()->route('wines.index')->with('deleted', 'Il vino'. ' ' . $wine->wine. ' ' .'è stato cancellato con successo!');
    }
}
