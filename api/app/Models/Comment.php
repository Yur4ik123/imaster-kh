<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = ['id'];
    protected $appends = ['status'];

    public function getStatusAttribute():string{
        return $this->is_published ? "Опубліковано": "Не опубліковано" ;
    }
}
