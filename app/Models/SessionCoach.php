<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionCoach extends Model
{
    use HasFactory;

    // Permitir asignación masiva para estos campos
    protected $fillable = [
        'client_id',
        'group_activity_id',
        'user_id',
        'name',
        'level',
        'date',
        'duration',
        'number_of_participants',
        'age_range',
        'location',
        'equipment',
        'goal',
        'content',
        'time_distribution',
        'description',
        'warmup_general',
        'warmup_specific',
        'main_part',
        'cooldown',
        'observations'
    ];

    /**
     * Relación con el modelo Client (cliente individual)
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Relación con el modelo GroupActivity (actividad grupal)
     */
    public function groupActivity()
    {
        return $this->belongsTo(GroupActivity::class);
    }

    /**
     * Relación con el modelo User (entrenador)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
