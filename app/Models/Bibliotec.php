<?php

namespace App\Models;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotec extends Model
{
    use HasFactory;

    protected $fillable=[
    'organizacao',
    'tipomaterial',
    'titulo',
    'resumo',
    'autores',
    'orientadores',
    'anopublicacao',
    'parceiro',
    'filepublicacao_path'];



       //get tribute
       public function getAnopublicacaoAttributeNoFormat()
       {
        $dataFormatada = trim($this->anopublicacao);
        $dataFormatada = date("Y-m-d", strtotime($dataFormatada));
        return $dataFormatada;
       }


}
