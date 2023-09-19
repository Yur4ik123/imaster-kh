<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use Translatable;

    protected $fillable = [
        'is_published',
        'image',
        'slug'
    ];
    public $translatedAttributes = ['title', 'content'];
}
