<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function email(){

        return $this->hasOne('App\Models\Email');
    }

    public function customer(){

        return $this->hasMany('App\Models\Customer');
    }

    public function developer(){

        return $this->belongsToMany('App\Models\Developer', 'company_developer');
    }
}
