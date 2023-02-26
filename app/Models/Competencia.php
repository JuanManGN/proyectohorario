<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;
    protected $primarykey= 'codigo_com';
    protected $fillable =[
        'codigo_com',
        'nombre',
        'codigo_programa'
    ];
}
