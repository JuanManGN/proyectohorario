<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoFormacion extends Model
{
    use HasFactory;
    protected $timestamps = false ;
    protected $prymarykey= 'codigo_tipo_form';
    protected $fillable =[
        'codigo_tipo_form',
        'nombre'
    ];
}
