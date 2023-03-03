<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCucian extends Model
{
    use HasFactory;

    protected $guarded = ["status_id" => "1"];
    protected $with = ["category", "status"];
    protected $primaryKey = 'noTransaksi';

    // public function scopeSearch($query){
    //     $query->
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
