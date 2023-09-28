<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Meta extends Model implements TranslatableContract
{
    use Translatable;

    protected $guarded = ['id'];
    public $translatedAttributes = [
        'slug',
        'title',
        'description',
        'robots',
    ];
    public function metaable():MorphTo
    {
        return $this->morphTo();
    }

}
