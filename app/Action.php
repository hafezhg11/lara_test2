<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable=[ 'operation_id','name','status', 'next_action_id', 'pre_action_id'];
//    public function branches()
//    {
//        return $this->hasMany(branch::class);
//    }
}
