<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaginaSazonal extends Model
{
    use HasFactory;

    protected $table = 'paginas_sazonais';

    protected $fillable = [
        'titulo',
        'texto',
        'banner',
        'slug',
    ];

    public $timestamps = false;
}
