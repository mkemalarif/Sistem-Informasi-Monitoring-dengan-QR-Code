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

    public function scopeTanggal($query, array $filters)
    {
        $query->when($filters['tanggal'] ?? false, function ($query, $tanggal) {
            return $query->where(function ($query) use ($tanggal) {
                $query->where("created_at", "like", "%" . $tanggal . "%")->get();
            });
        });
    }

    // public function scopeJenisTanggal($query, array $filters)
    // {
    //     $query->when($filters['tanggalCollection'] ?? false, function ($query, $tanggalCollection) {
    //         if ($tanggalCollection == 'semua') {
    //             return $query->get();
    //         } else if ($tanggalCollection == "harian") {
    //             return $query->whereDate("created_at", "like", "%" . today()->toDateString() . "%")->get();
    //         } else if ($tanggalCollection == "bulan") {
    //             return $query->whereYear("created_at", now()->format('Y'))
    //                 ->whereMonth("created_at", now()->format('m'))
    //                 ->get();
    //         }
    //     });
    // }

    public function scopeJenisTanggal($query)
    {
        if (request('tanggalCollection') === "semua") {
            return $query;
        } else if (request('tanggalCollection') === "harian") {
            return $query->whereDate("created_at", "like", "%" . today()->toDateString() . "%");
        } else if (request('tanggalCollection') === "bulan") {
            return $query->whereYear("created_at", now()->format('Y'))
                ->whereMonth("created_at", now()->format('m'));
        }
    }

    public function scopeKategori($query)
    {
        if (request('category')) {
            return $query->where("category_id", "like", "%" . request('category') . "%");
        }
    }

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
