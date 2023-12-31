<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostTranslation extends Model
{
    use SoftDeletes;
    protected $table = 'post_translations';

    protected $guarded = ['id'];

}
