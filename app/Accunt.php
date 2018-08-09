<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accunt extends Model
{
    protected $fillable = [
        'username','password','type'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

}
