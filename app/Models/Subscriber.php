<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'confirmed',
        'token',
        'confirmed_at',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'confirmed' => 'boolean',
        'confirmed_at' => 'datetime',
    ];

    public function markAsConfirmed() {
        return $this->update([
            'confirmed' => true,
            'confirmed_at' => now(),
            'token' => Str::uuid(),
        ]);
    }
}
