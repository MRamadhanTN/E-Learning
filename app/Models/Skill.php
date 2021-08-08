<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teachers_id',
    ];

    protected $hidden = [

    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'id', 'teacher_id');
    }
}
