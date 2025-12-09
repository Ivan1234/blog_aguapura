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
        'autor_id'
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
        });
    }
    
    // Para usar slug en lugar del id en las rutas
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
