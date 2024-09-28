<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'txt', 'reading_time'];

    protected $casts = [

        'created_at' => 'datetime:d/m/Y',
    ];

}
