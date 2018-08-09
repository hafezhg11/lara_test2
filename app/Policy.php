<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable=['date', 'progress'];
    public function quote()
    {
        return $this->belongsTo(quote::class);
    }
}
