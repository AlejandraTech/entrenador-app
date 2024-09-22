<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            // Eliminar clientes relacionados
            $user->clients()->each(function ($client) {
                $client->delete();
            });

            // Eliminar actividades grupales relacionadas
            $user->activities()->each(function ($activity) {
                $activity->delete();
            });

            // Eliminar sesiones relacionadas
            $user->sessions()->each(function ($session) {
                $session->delete();
            });
        });
    }

    // Relación con clientes
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    // Relación con actividades grupales
    public function activities()
    {
        return $this->hasMany(GroupActivity::class);
    }

    // Relación con sesiones
    public function sessions()
    {
        return $this->hasMany(SessionCoach::class);
    }
}
