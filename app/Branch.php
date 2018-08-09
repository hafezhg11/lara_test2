<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable=['title','landline','address','website_address','email'];

    public function users()
    {
        return $this->hasMany(user::class);
    }
    public function service()
    {
        return $this->belongsTo(service::class);
//        return $this->hasOne(service::class);
    }
}
