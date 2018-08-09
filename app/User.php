<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','firstname','lastname','email','password','contract_date','contract_detail','status','dob','ssn'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function accunts()
    {
        return $this->hasMany(accunt::class);
    }
    public function branch()
    {
        return $this->belongsTo(branch::class);
    }
    public function contacts()
    {
        return $this->hasMany(contact::class);
    }
    public function quotes()
    {
        return $this->hasMany(quote::class);
    }
//    public function language()
//    {
//        return $this->id;
//    }

}
