<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Nombre', 'Edad', 'Genero', 'Personalidad', 'Historia', 'Extras', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function historias()
    {
        return $this->belongsToMany(Historia::class);
    }
}
