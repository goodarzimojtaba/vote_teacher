<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    protected $fillable = ['user_id'];
use HasFactory;
public function user(){
    return $this->belongsTO(user::class);
}
public function teachers(){
    return $this->belongstomany(teacher::class);
}
public function survey(){
    return $this->hasmany(survey::class);
}
}
