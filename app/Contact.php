<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable=['landline','mobile','address'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
