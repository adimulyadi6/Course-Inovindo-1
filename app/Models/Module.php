<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{protected $fillable = [
    'course_id',     // 🔥 WAJIB
    'title',
    'order',
    'description',
    'is_published',
];
    public function course()
{
    return $this->belongsTo(\App\Models\Course::class);
}
}
