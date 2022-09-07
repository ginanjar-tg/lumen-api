<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// <!-- Dibuat manual -->
// <!-- Menampilkan data dari database dengan Lumen -->
// <!-- Dalam bentuk Resftful API dan format JSON -->



class Post extends Model
{
    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'content',
    ];
}
