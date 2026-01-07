<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_image',
        'bio',
        'phone',
        'date_of_birth',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
