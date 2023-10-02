<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $guarded = ['id'];
    protected $appends = ['status'];

    public function getStatusAttribute():string{
        return $this->is_processed ? "Опрацьовано": "NEW" ;
    }
}
