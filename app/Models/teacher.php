<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class teacher extends Model
{
use HasFactory;
 protected $fillable=['user_id'];
 public function user(){
    return $this->belongsTo(user::class);
}
 public function student(){
        return $this->belongsTomany(student::class);
    }
    public function survey(){
        return $this->hasmany(survey::class);
    }

}
