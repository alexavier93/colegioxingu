<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */

    protected $fillable = [
        'date',
        'title',
        'intro',
        'source',
        'image',
        'link',
    ];
}
