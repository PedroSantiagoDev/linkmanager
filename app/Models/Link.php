<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'name',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
