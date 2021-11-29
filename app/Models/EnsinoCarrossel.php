<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnsinoCarrossel extends Model
{
    use HasFactory;

    protected $table = 'ensino_carrossel';

    protected $fillable = [
        'titulo',
        'descricao',
        'imagem',
        'link',
    ];

    public $timestamps = false;
}
