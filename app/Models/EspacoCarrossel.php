<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspacoCarrossel extends Model
{
    use HasFactory;

    protected $table = 'espaco_carrossel';

    protected $fillable = [
        'titulo',
        'imagem',
        'thumbnail',
    ];

    public $timestamps = false;
}