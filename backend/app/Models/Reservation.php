<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_at',
        'number',
        'user_id',
        'shop_id',
        'canceled'
    ];

    /**
     * 予約を所有している店舗を取得
     */
    public function shop()
    {
        return $this->belongsTo(User::class, 'foreign_key');
        return $this->belongsTo(Shop::class, 'foreign_key');
    }
}
