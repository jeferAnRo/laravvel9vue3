<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Son extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'person_id'
    ];
    public $timestamps = false;
    public function person(){
        return $this->belongsTo(Person::class);
    }
}
