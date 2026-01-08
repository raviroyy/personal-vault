<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "content",
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function media()
    {
        return $this->hasMany(postmedia::class);
    }
}
