<?php

namespace App\Mode;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $fillable = [
        'email',
        'password',
        'birthday',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
