<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable=[ 'name','status'];

    public function operations()
    {
//        return $this->belongsToMany(Operation::class,'operation_template','operation_id','template_id','priority');
        return $this->belongsToMany(Operation::class)->withPivot('priority','template_id');
//        return $this->belongsToMany(Operation::class);
    }
}
