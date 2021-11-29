<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeCarrossel extends Model
{
    use HasFactory;

    protected $table = 'atividade_carrossel';

    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
        'thumbnail'
    ];

    public $timestamps = false;
}
