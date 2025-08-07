<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
     use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        // tambahkan kolom lain yang relevan
    ];
}
