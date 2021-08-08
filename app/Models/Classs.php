<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Classs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'teacher_id',
        'subject_id',
        'image',
    ];

    protected $hidden = [

    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'id', 'teacher_id');
    }

    public function subject()
    {
        return $this->hasMany(Subject::class, 'id', 'subject_id');
    }
}
