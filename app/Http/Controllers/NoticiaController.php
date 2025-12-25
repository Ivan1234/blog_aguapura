<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'titulo' => 'required|string|max:255',
            'body' => 'required',
            'imagen_principal' => 'nullable|string',
            'meta_description' => 'nullable|string|max:255'
        ]);

        $noticia = new Noticia($request->all());

        $noticia->slug = $this->generarSlugUnico($request->titulo);

        if(!$noticia->meta_description){
            $noticia->meta_description = Str::limit(strip_tags($noticia->body), 160);
        }

        $noticia->tiempo_lectura = $noticia->calcularTiempoLectura();

        $noticia->autor_id = auth()->id();
        $noticia->save();

        return redirect()->route('notas.show', $noticia)->width('success', 'Noticia creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $noticia = Noticia::where('slug', $slug)->firstOrFail();

        $noticia->incrementarVistas();

        return view('noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', compact($noticia));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required',
            'meta_description' => 'nullable|string|max:255'
        ]);

        $noticia->fill($request->All());

        if($request->titulo !== $noticia->titulo){
            $noticia->slug = $this->generarSlugUnico($request->titulo, $noticia->id);
        }

        if(!$noticia->meta_description){
            $noticia->meta_description = Str::limit(strip_tags($noticia->body), 160);
        }

        $noticia->tiempo_lectura = $noticia->calcularTiempoLectura();

        $noticia->save();

        return redirect()->route('noticias.index')->width('success', 'Noticia actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()->route('noticias.index')->width('success', 'Noticia Eliminada correctamente');
    }

    private function generarSlugUnico($titulo, $ignoredId = null){
        $slug = Str::slug($titulo);
        $baseSlug = $slug;
        $contador = 1;

        while(
            Noticia::where('slug', $slug)
                    ->when($ignoredId, fn($q) => $q->where('id', '!=', $ignoredId))
                    ->exists()
        ){
            $slug = $baseSlug.'-'.$contador++;
        }

        return $slug;
    }
}
