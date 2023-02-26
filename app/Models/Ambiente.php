<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    use HasFactory;
    protected $primarykey= 'nro_ambiente';
    protected $timestamps = false ;
    protected $fillable =[
        'nro_ambiente',
        'nombre',
        'especializacion',
        'nro_elementos',
        'descripcion',
        'codigo_centro'

    ];
}
