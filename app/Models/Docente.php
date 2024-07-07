<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatetable;
use Illuminate\Notifications\Notifiable;

class Docente extends Authenticatetable
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $table = 'docente';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password'
    ];

    protected $hidden =[
        'password'
    ];
}
