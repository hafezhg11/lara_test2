<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable=['quote_ref', 'valid_from', 'valid_to', 'premium'];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function policy()
    {
        return $this->hasMany(policy::class);
    }
}
