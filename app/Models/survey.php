<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class survey extends Model
{
   use HasFactory;
   protected $fillable=[
    'student_id',
    'teacher_id',
    'knowledge_level',
    'teaching_style',
    'behavior',
    'punctuality',
    'comment'
   ];
   public function student(){
    return $this->belongsTo(student::class);
   }
   public function teacher(){
    return $this->belongsTo(teacher::class);
   }
}
