<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'class_id',
        'student_id',
    ];

    protected $hidden = [

    ];

    public function class()
    {
        return $this->belongsTo(Classs::class, 'id', 'class_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'id', 'student_id');
    }

}
