<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Docente;
use App\Models\Grupo;


class DocenteGrupo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'docente_grupo';
    protected $fillable = [
        'docente_id',
        'grupo_id'
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
