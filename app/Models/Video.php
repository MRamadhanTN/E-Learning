<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'theory_id',
        'video',

    ];

    protected $hidden = [

    ];

    public function theory()
    {
        return $this->belongsTo(Theory::class, 'id', 'theory_id');
    }
}
