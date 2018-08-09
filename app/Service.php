<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[ 'branch_id','name', 'specification', 'ave_processing_time'];
    public function branches()
    {
        return $this->hasMany(Branch::class);
//        return $this->belongsTo(branch::class);
    }
}
