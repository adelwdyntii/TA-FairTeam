<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable = ['name','class',];

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
    use HasFactory;
}
