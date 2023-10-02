<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideTranslation extends Model
{
    use HasFactory;
    protected $table = 'slide_translations';

    protected $guarded = ['id'];
}
