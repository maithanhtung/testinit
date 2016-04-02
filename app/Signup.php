<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = [
        'studentid', 'group','lastname','firstname'
    ];

    public function exam() {
        return $this->belongsTo('App\Exam');
    }
}

