<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ["idCategory"];

    public function StatusCucian()
    {
        return $this->hasMany(StatusCucian::class);
    }
}
