<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'descripton',
        'price',
        'stock',
    ];
}
