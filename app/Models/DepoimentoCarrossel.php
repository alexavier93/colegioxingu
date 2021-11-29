<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepoimentoCarrossel extends Model
{
    use HasFactory;

    protected $table = 'depoimento_carrossel';

    protected $fillable = [
        'nome',
        'depoimento',
        'imagem',
    ];

    public $timestamps = false;
}
