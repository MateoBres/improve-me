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
        return response()->view('classes.show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return response()->view('classes.show');
         return response()->redirectToRoute('classes.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $class)
    {
        return response()->view('classes.show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        return response()->view('classes.show');
        return response()->redirectToRoute('classes.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->redirectToRoute('classes.index');
    }
}
