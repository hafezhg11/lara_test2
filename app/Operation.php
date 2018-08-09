<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable=[ 'name','status', 'origin', 'parent_id','service_id'];
//    public function branches()
//    {
//        return $this->hasMany(branch::class);
//    }
    public function templates()
    {
        return $this->belongsToMany(Template::class);
    }
}
