<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "category_id",
        "original_name",
        "stored_name",
        "file_path",
        "file_type",
        "is_encrypted",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(DocumentCategory::class);
    }
}



