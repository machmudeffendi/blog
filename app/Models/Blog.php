<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'topik',
        'materi',
        'konten',
        'keterangan',
        'image',
        'total_views',
    ];
}
