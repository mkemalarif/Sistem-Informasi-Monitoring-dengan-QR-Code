<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ["idStatus"];

    public function statusCucian()
    {
        return $this->hasMany(StatusCucian::class);
    }
}
