<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Perro extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table    = 'perros';
    protected $fillable = [
        'name',
        'imgurl',
        'descripcion'
    ];
}
