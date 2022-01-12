<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'name',
        'area',
        'kind'
    ];

    /**
     * ショップの予約を取得
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
