<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedagogia extends Model
{
    use HasFactory;

    protected $table = 'pedagogia';

    protected $fillable = [
        'titulo',
        'texto',
        'banner',
        'slug',
    ];

    public $timestamps = false;
}
