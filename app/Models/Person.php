<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'age',
        'city_id',
        'email',
        'phone',
        'address'
    ];
    public $timestamps = false;
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function sons(){
        return $this->hasMany(Son::class);
    }
}

