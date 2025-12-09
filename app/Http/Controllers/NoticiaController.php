<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::latest()->paginate(10);
        return view('noticias.index', compact('noticias'));       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required',
            'imagen_principal' => 'nullable|string'
        ]);

        $nota = Noticia::create($request->all());

        return redirect()->route('notas.show', $nota);
    }

    /**
     * Display the specified resource.
     */
    public function show(Noticia $noticia)
    {
        return view('noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
