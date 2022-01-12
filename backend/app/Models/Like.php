<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = [
        'user_id',
        'shop_id'
    ];

    /**
     * Likeを所有しているユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    /**
     * Likeを所有している店舗を取得
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'foreign_key');
    }
}
