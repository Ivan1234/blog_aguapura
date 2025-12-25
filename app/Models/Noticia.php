<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'summary',
        'body',
        'categoria_id',
        'autor_id',
        'titulo',
        'descripcion_imagen',
        'galeria',
        'palabras_clave',
        'meta_titulo',
        'meta_descripcion',
        'meta_robots',
        'og_titulo',
        'og_descripcion',
        'og_imagen',
        'twitter_titulo',
        'twitter_descripcion',
        'twitter_imagen',
        'hits',
        'tiempo_lectura'
    ];

    protected $cast = [
        'featured' => 'boolean',
        'published_at' => 'datetime'
    ];

    protected static function boot(){
        parent::boot();

        static::saving(function($noticia){
            if (empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->title);

                // Evitar duplicados
                $original = $noticia->slug;
                $count = 1;

                while (static::where('slug', $noticia->slug)->exists()) {
                    $noticia->slug = "{$original}-{$count}";
                    $count++;
                }
            }

            if(empty($noticia->tiempo_lectura) && !empty($noticia->body)){
                $noticia->tiempo_lectura = $noticia->calcularTiempoLectura();
            }

            if(empty($noticia->meta_descripcion) && !empty($noticia->body)){
                $noticia->meta_descripcion = Str::limit(strip_tags($noticia->body), 160);
            }
        });
    }
    
    // Para usar slug en lugar del id en las rutas
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * RELACIONES
     * ***/
    public function categoria(){
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id');
    }

    public function autor(){
        return $this->belongsTo(\App\Models\User::class, 'autor_id');
    }

    /**
     * MÉTODOS AUXILIARES
     * ***/
    //200 palabras por minuto para calcular el tiempo de lectura
    public function calcularTiempoLectura(){
        $words = str_word_count(strip_tags($this->body));
        return max(1, ceil($words/200));
    }

    public function getUrlAtrribute(){
        return url('/noticia/'.$this->slug);
    }

    public function incrementarVistas(){
        $this->increment('hits');
    }

    /****
     * SCOPES (Para filtros SEO)
     ***/
    public function scopePublicadas($query){
        return $query->where('featured', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }                

    public function scopeMasVistas($query){
        return $query->orderByDesc('hits');
    }

    public function scopeCategoria($query, $categoria){
        return $query->where('categoria_id', $categoria);
    }

    public function scopeBuscar($query, $texto){
        return $query->where(function($q) use ($texto){
            $q->where('title', 'like', "%$texto%")
              ->orWhere('body', 'like', "%$texto%")
              ->orWhere('descripcion_imagen', 'like', "%$texto%")
              ->orWhere('palabras_clave', 'like', "%$texto%");
        });
    }
}
