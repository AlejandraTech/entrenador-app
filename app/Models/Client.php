<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Permitir asignación masiva para estos campos
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'notes'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($client) {
            // Eliminar sesiones relacionadas
            $client->sessions()->each(function ($session) {
                $session->delete();
            });
        });
    }

    /**
     * Relación con el modelo User (entrenador)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con las sesiones
     */
    public function sessions()
    {
        return $this->hasMany(SessionCoach::class);
    }
}
