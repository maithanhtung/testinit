<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'ccode', 'cname','exname','date','time','place'
    ];

    public function signups() {
        return $this->hasMany('App\Signup');
    }
}

