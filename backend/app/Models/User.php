<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'uid',
    ];

    /**
     * ユーザーの予約を取得
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
