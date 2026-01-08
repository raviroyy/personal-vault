<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
    ];

    public function document()
    {
        return $this->hasMany(Document::class, "category_id");
    }
}
