<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return response()->view('classes.index');
//        return sprintf('Lista corsi, pagina %s, %s per pagina, ordinati per %s',
//        $request->query('page'),
//        $request->query('per-page'),
//        $request->query('order-by'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Form per la creazione di un corso';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Form per la creazione di un corso';
        // TODO: sviluppero più tardi
        // return response()->redirectToRoute('dettaglio di un corso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $class)
    {
        return sprintf('Dettaglio di un corso %s', str_replace('-',' ', $class));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Modifica di un corso';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Vista di dettaglio corso';
        // TODO: sviluppero più tardi
        // return response()->redirectToRoute('dettaglio di un corso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->redirectToRoute('lista dei corsi');
    }
}
