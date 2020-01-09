<?php

namespace App\Mode;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user1s()
    {
        return $this->hasMany(User1::class);
    }
}
