<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Support\Facades\Storage;

class Slide extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table = 'slides';
    protected $guarded = ['id'];
    protected $appends=['img_path'];
    public $translatedAttributes = ['header', 'subheader'];
    public function getImgPathAttribute():string{
        return Storage::url($this->image);
    }
}
