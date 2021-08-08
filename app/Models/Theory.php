<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'class_id',
        'description',
    ];

    protected $hidden = [

    ];

    public function class()
    {
        return $this->belongsTo(Classs::class, 'id', 'class_id');
    }
}
