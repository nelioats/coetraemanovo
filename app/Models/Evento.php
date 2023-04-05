<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title' => 'required',
        'descricao' => 'required',
        'start' => 'required',
        'end' => 'required',
        'organizadores' => 'required',
        'localevento' => 'required',
    ];

    protected $fillable=['title','descricao','color','start','end','organizadores','localevento','linkdivulgacao','horarioend','horariostart'];
}
