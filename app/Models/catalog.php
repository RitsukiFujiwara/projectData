<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Catalog extends Model
{
    use HasFactory;
    //カタログとユーザーIDを紐付け
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function skill()
    {
        return $this->hasMany(Skills::class);
    }
}
