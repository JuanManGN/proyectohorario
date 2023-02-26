<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
    protected $primarykey= 'codigo_centro';
    protected $fillable =[
        'codigo_centro',
        'nombre',
        'direccion'
    ];

}
