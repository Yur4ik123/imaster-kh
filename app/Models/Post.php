<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Post extends Model implements TranslatableContract
{
    use SoftDeletes;
    use Translatable;

    protected $table = 'posts';

    protected $guarded = ['id'];
    public $translatedAttributes = ['title', 'content'];

    public function meta():MorphOne
    {
        return $this->morphOne(Meta::class,  'metaable');
    }

}
